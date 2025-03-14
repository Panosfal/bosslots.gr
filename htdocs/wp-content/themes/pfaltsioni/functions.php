<?php
// HIDES WORDPRESS HEADER (ADMIN TOOLBAR)
add_filter('show_admin_bar', '__return_false');

// DEFINES PATHS FOR EASE OF USE
define("THEME_DIR_URI", get_template_directory_uri());
define("THEME_IMAGES", THEME_DIR_URI . "/assets/img");


// INITIALIZES STYLES
function pfaltsioni_enqueue_assets() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], '5.3.0', 'all');

    // Hamburgers CSS
    wp_enqueue_style('hamburgers-css', get_template_directory_uri() . '/assets/css/hamburgers.css', array(), '1.0', 'all' );

    // FontAwesome CSS
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.min.css', [], '6.0.0', 'all');

    // Theme's Main CSS
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.css', [], false, 'all');

    // jQuery (WordPress includes a version; ensure it's enabled)
    wp_enqueue_script('jquery');

    // GSAP JS
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), '3.12.2', true );

    // Bootstrap JS
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', ['jquery'], '5.3.0', true);

    // Theme's Main JS
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/script.js', [], false, true);

    // Swiper CSS
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', [], '10.0.0', 'all');

    // Swiper JS
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', [], '10.0.0', true);
}
add_action('wp_enqueue_scripts', 'pfaltsioni_enqueue_assets');


// INITIALIZES MENUS
function register_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' )
       )
     );
   }
   add_action( 'init', 'register_menus' );

/**
 * YouTube Live Status Checker
 * 
 * Checks if a YouTube channel is currently streaming and displays appropriate status buttons.
 * Uses WordPress cron to schedule checks between 9:00 AM and 3:00 AM to conserve API quota.
 * Does NOT check between 3:00 AM and 9:00 AM.
 */

// Don't allow direct access
if (!defined('ABSPATH')) {
    exit;
}

// class YouTube_Live_Status {
//     // Configuration constants
//     const OPTION_NAME = 'youtube_live_status';
//     const CRON_HOOK = 'check_youtube_live_cron_event';
//     const CRON_INTERVAL = 'every_eleven_minutes';
//     const CRON_INTERVAL_SECONDS = 660; // 11 minutes
    
//     // Channel and status settings
//     private $channel_id;
//     private $api_key;
    
//     /**
//      * Constructor - Initialize hooks and settings
//      */
//     public function __construct() {
//         // Set these values in wp-config.php for security
      
//         $this->api_key = defined('YOUTUBE_API_KEY') ? YOUTUBE_API_KEY : '';
//         $this->channel_id = defined('YOUTUBE_CHANNEL_ID') ? YOUTUBE_CHANNEL_ID : 'UCreQJuAt9LpSXMsnRyrKAmA';
        
//         // Add custom cron interval
//         add_filter('cron_schedules', array($this, 'add_custom_cron_interval'));
        
//         // Schedule cron event
//         add_action('wp', array($this, 'schedule_cron'));
        
//         // Hook cron callback
//         add_action(self::CRON_HOOK, array($this, 'check_live_status'));
        
//         // Register shortcode
//         add_shortcode('youtube_live_button', array($this, 'live_button_shortcode'));
        
//         // Cleanup on deactivation
//         register_deactivation_hook(__FILE__, array($this, 'deactivate_cron'));
//     }
    
//     /**
//      * Add custom cron interval of 11 minutes
//      */
//     public function add_custom_cron_interval($schedules) {
//         $schedules[self::CRON_INTERVAL] = array(
//             'interval' => self::CRON_INTERVAL_SECONDS,
//             'display'  => __('Every 11 Minutes')
//         );
//         return $schedules;
//     }
    
//     /**
//      * Schedule the cron job if not already scheduled
//      */
//     public function schedule_cron() {
//         if (!wp_next_scheduled(self::CRON_HOOK)) {
//             wp_schedule_event(time(), self::CRON_INTERVAL, self::CRON_HOOK);
//         }
//     }
    
//     /**
//      * Cleanup scheduled events when plugin is deactivated
//      */
//     public function deactivate_cron() {
//         $timestamp = wp_next_scheduled(self::CRON_HOOK);
//         if ($timestamp) {
//             wp_unschedule_event($timestamp, self::CRON_HOOK);
//         }
//     }
    
//     /**
//      * Check if current time is within operation hours (9:00 AM to 3:00 AM)
//      * Returns TRUE if we should check (between 9AM and 3AM)
//      * Returns FALSE if we should NOT check (between 3AM and 9AM)
//      */
//     private function is_within_operating_hours() {
//         $current_hour = (int) current_time('H');
        
//         // If hour is between 3 and 8 (inclusive), we should NOT check
//         if ($current_hour >= 3 && $current_hour < 9) {
//             return false;
//         }
        
//         // Otherwise (9AM through midnight until 3AM), we should check
//         return true;
//     }
    
//     /**
//      * Get YouTube live status using API
//      */
//     private function get_youtube_live_status() {
//         // Verify API key exists
//         if (empty($this->api_key)) {
//             error_log('YouTube Live Status: Missing API key');
//             return false;
//         }
        
//         $url = add_query_arg(
//             array(
//                 'part' => 'snippet',
//                 'channelId' => $this->channel_id,
//                 'eventType' => 'live',
//                 'type' => 'video',
//                 'key' => $this->api_key
//             ),
//             'https://www.googleapis.com/youtube/v3/search'
//         );
        
//         $response = wp_remote_get($url);
        
//         // Handle errors
//         if (is_wp_error($response)) {
//             error_log('YouTube Live Status: API request error - ' . $response->get_error_message());
//             return false;
//         }
        
//         // Check for bad status code
//         $status_code = wp_remote_retrieve_response_code($response);
//         if ($status_code !== 200) {
//             error_log('YouTube Live Status: API returned status ' . $status_code);
//             return false;
//         }
        
//         // Parse response
//         $data = json_decode(wp_remote_retrieve_body($response), true);
        
//         // Check if there's a live stream
//         if (!empty($data['items'])) {
//             return $data['items'][0]['id']['videoId'];
//         }
        
//         return false;
//     }
    
//     /**
//      * Cron callback to check YouTube live status
//      */
//     public function check_live_status() {
//         // Only run during operating hours (9AM-3AM)
//         if (!$this->is_within_operating_hours()) {
//             return;
//         }
        
//         $live_video_id = $this->get_youtube_live_status();
        
//         // Store the live status as a transient with expiration matching cron interval
//         if ($live_video_id) {
//             set_transient(
//                 self::OPTION_NAME, 
//                 array(
//                     'live' => true, 
//                     'url' => "https://www.youtube.com/watch?v={$live_video_id}",
//                     'updated' => current_time('timestamp')
//                 ),
//                 self::CRON_INTERVAL_SECONDS + 60 // Add buffer
//             );
//         } else {
//             set_transient(
//                 self::OPTION_NAME, 
//                 array(
//                     'live' => false, 
//                     'url' => "https://www.youtube.com/@BOSslots",
//                     'updated' => current_time('timestamp')
//                 ),
//                 self::CRON_INTERVAL_SECONDS + 60 // Add buffer
//             );
//         }
//     }
    
//     /**
//      * Shortcode to display YouTube live button
//      */
//     public function live_button_shortcode() {
//         // Get the live status
//         $live_status = get_transient(self::OPTION_NAME);
        
//         // If transient expired, fallback to default
//         if (false === $live_status) {
//             $live_status = array(
//                 'live' => false,
//                 'url' => "https://www.youtube.com/@BOSslots",
//                 'updated' => 0
//             );
//         }
        
//         // Set button text and classes based on live status
//         if ($live_status['live']) {
//             $button_text = 'LIVE NOW';
//             $url = $live_status['url'];
//             $live_class = 'live-now blink';
//         } else {
//             $button_text = 'Offline';
//             $url = "https://www.youtube.com/@BOSslots";
//             $live_class = '';
//         }
        
//         // Generate button HTML
//         $button = sprintf(
//             '<a href="%s" class="youtube-live-button">
//                 <i class="fa fa-circle %s"></i> %s
//             </a>',
//             esc_url($url),
//             esc_attr($live_class),
//             esc_html($button_text)
//         );
        
//         return $button;
//     }
// }

// // Initialize the class
// new YouTube_Live_Status();
















// function get_youtube_live_status($channel_id) {
//   $api_key = 'AIzaSyACcPGYM7h3JuiVeJ39PiQrKzPzk_0ZmWo'; // Replace with your API key
//   $url = "https://www.googleapis.com/youtube/v3/search?part=snippet&channelId={$channel_id}&eventType=live&type=video&key={$api_key}";

//   $response = wp_remote_get($url);

//   if (is_wp_error($response)) {
//       return false; // Handle errors gracefully
//   }

//   $data = json_decode(wp_remote_retrieve_body($response), true);

//   // Check if there's a live stream
//   if (!empty($data['items'])) {
//       return $data['items'][0]['id']['videoId']; // Return live video ID
//   }

//   return false; // Not live
// }

// // Custom interval for the cron job (11 minutes = 660 seconds)
// function add_custom_cron_intervals($schedules) {
//   $schedules['every_eleven_minutes'] = array(
//       'interval' => 660, // 660 seconds = 11 minutes
//       'display'  => __('Every 11 Minutes')
//   );
//   return $schedules;
// }
// add_filter('cron_schedules', 'add_custom_cron_intervals');

// // Schedule the cron job to check live status only if it's not already scheduled
// function schedule_youtube_live_cron() {
//   if (!wp_next_scheduled('check_youtube_live_cron_event')) {
//       wp_schedule_event(time(), 'every_eleven_minutes', 'check_youtube_live_cron_event');
//   }
// }
// add_action('wp', 'schedule_youtube_live_cron');

// // Hook the function to the cron event
// add_action('check_youtube_live_cron_event', 'check_youtube_live_status_cron');

// function check_youtube_live_status_cron() {
//   $current_hour = (int) current_time('H'); // Get current hour in integer format

//   // Only run between 09:00 AM and 03:00 AM
//   if ($current_hour >= 9 || $current_hour < 3) {
//       $channel_id = 'UCreQJuAt9LpSXMsnRyrKAmA'; // Replace with your channel ID
//       $live_video_id = get_youtube_live_status($channel_id);

//       // Store the live status in an option (database)
//       if ($live_video_id) {
//           update_option('youtube_live_status', array('live' => true, 'url' => "https://www.youtube.com/watch?v={$live_video_id}"));
//       } else {
//           update_option('youtube_live_status', array('live' => false, 'url' => "https://www.youtube.com/@BOSslots"));
//       }
//   }
// }

// // Creates shortcode for YouTube live now button
// function youtube_live_button() {
//   $live_status = get_option('youtube_live_status');

//   if ($live_status && !empty($live_status['live'])) {
//       $button_text = 'LIVE NOW';
//       $url = $live_status['url'];
//       $live_class = 'live-now blink';
//   } else {
//       $button_text = 'Offline';
//       $url = "https://www.youtube.com/@BOSslots";
//       $live_class = '';
//   }

//   return '
//   <a href="' . esc_url($url) . '" class="youtube-live-button">
//       <i class="fa fa-circle ' . esc_attr($live_class) . '"></i> ' . esc_html($button_text) . '
//   </a>';
// }
// add_shortcode('youtube_live_button', 'youtube_live_button');

class YouTube_Live_Status {
  const OPTION_NAME = 'youtube_live_status';
  const API_CALLS_OPTION = 'youtube_api_call_count';
  const MAX_CALLS_PER_HOUR = 5;

  private $api_key = 'AIzaSyACcPGYM7h3JuiVeJ39PiQrKzPzk_0ZmWo';
  private $channel_id = 'UCcxxsujtPCx1myTOaPURPvQ';

  public function __construct() {
      // Register the endpoint for server cron to hit
      add_action('rest_api_init', array($this, 'register_cron_endpoint'));
      
      // Register shortcode
      add_shortcode('youtube_live_button', array($this, 'live_button_shortcode'));
  }

  /**
   * Register a REST API endpoint for the server cron to call
   */
  public function register_cron_endpoint() {
      register_rest_route('youtube-live/v1', '/check', array(
          'methods' => 'GET',
          'callback' => array($this, 'check_live_status_endpoint'),
          'permission_callback' => function() {
              // Secure the endpoint with a secret key
              $provided_key = isset($_GET['cron_key']) ? $_GET['cron_key'] : '';
              // Create a constant in wp-config.php: define('YOUTUBE_CRON_SECRET', 'your-secret-key');
              return $provided_key === defined('YOUTUBE_CRON_SECRET') ? YOUTUBE_CRON_SECRET : '';
          }
      ));
  }

  /**
   * REST API endpoint callback
   */
  public function check_live_status_endpoint() {
      $result = $this->check_live_status();
      return rest_ensure_response(array(
          'success' => true,
          'message' => 'Check completed',
          'is_live' => $result['live'],
          'api_call_made' => $result['api_call_made']
      ));
  }

  /**
   * Get YouTube live status using API
   */
  private function get_youtube_live_status() {
      // Check API request rate limit
      $hour_start = strtotime(date('Y-m-d H:00:00'));
      $api_calls = get_option(self::API_CALLS_OPTION, array());
      
      // Clean up old entries
      foreach ($api_calls as $timestamp => $count) {
          if ($timestamp < $hour_start) {
              unset($api_calls[$timestamp]);
          }
      }
      
      // Count calls in the current hour
      $current_hour_calls = isset($api_calls[$hour_start]) ? $api_calls[$hour_start] : 0;
      
      // Limit to MAX_CALLS_PER_HOUR
      if ($current_hour_calls >= self::MAX_CALLS_PER_HOUR) {
          error_log('[YouTube API] Rate limit reached. Skipping check.');
          return false;
      }
      
      if (empty($this->api_key)) {
          error_log('[YouTube API] Missing API key');
          return false;
      }

      $url = add_query_arg(
          array(
              'part' => 'snippet',
              'channelId' => $this->channel_id,
              'eventType' => 'live',
              'type' => 'video',
              'key' => $this->api_key
          ),
          'https://www.googleapis.com/youtube/v3/search'
      );

      // Increment and store API request count
      $api_calls[$hour_start] = $current_hour_calls + 1;
      update_option(self::API_CALLS_OPTION, $api_calls);

      $response = wp_remote_get($url, array('timeout' => 10));

      if (is_wp_error($response)) {
          error_log('[YouTube API] Request error: ' . $response->get_error_message());
          return false;
      }

      $status_code = wp_remote_retrieve_response_code($response);
      if ($status_code !== 200) {
          $response_body = wp_remote_retrieve_body($response);
          error_log("[YouTube API] Status: {$status_code}, Response: " . substr($response_body, 0, 500));
          return false;
      }

      $data = json_decode(wp_remote_retrieve_body($response), true);

      if (!empty($data['items'])) {
          return $data['items'][0]['id']['videoId'];
      }

      error_log('[YouTube API] No live video found');
      return false;
  }

  /**
   * Check YouTube live status and update the stored status
   */
  public function check_live_status() {
      error_log('[YouTube Cron] Running at: ' . current_time('mysql'));

      // Use a mutex lock with the database to prevent race conditions
      global $wpdb;
      $lock_result = $wpdb->query("
          INSERT INTO {$wpdb->options} (option_name, option_value, autoload)
          VALUES ('youtube_live_status_lock', '1', 'no')
          ON DUPLICATE KEY UPDATE
          option_value = IF(option_value + INTERVAL 30 SECOND < NOW(), '1', option_value)
      ");

      // If we couldn't acquire the lock, exit
      if (!$lock_result) {
          error_log('[YouTube Cron] Could not acquire lock. Another process is running.');
          return array('live' => false, 'api_call_made' => false);
      }

      $api_call_made = false;
      $live_video_id = $this->get_youtube_live_status();
      
      if ($live_video_id !== false) {
          $api_call_made = true;
      }

      update_option(
          self::OPTION_NAME, 
          array(
              'live' => (bool) $live_video_id, 
              'url' => $live_video_id ? "https://www.youtube.com/watch?v={$live_video_id}" : "https://www.youtube.com/@BOSslots",
              'updated' => current_time('timestamp')
          )
      );

      // Release the lock
      delete_option('youtube_live_status_lock');
      
      return array(
          'live' => (bool) $live_video_id,
          'api_call_made' => $api_call_made
      );
  }

  /**
   * Shortcode to display YouTube live button
   */
  public function live_button_shortcode() {
      $live_status = get_option(self::OPTION_NAME);

      if (false === $live_status) {
          // Default values if no status exists
          $live_status = array(
              'live' => false,
              'url' => "https://www.youtube.com/@BOSslots",
              'updated' => 0
          );
      }

      if ($live_status['live']) {
          $button_text = 'LIVE NOW';
          $url = $live_status['url'];
          $live_class = 'live-now blink';
      } else {
          $button_text = 'Offline';
          $url = "https://www.youtube.com/@BOSslots";
          $live_class = '';
      }

      return sprintf(
          '<a href="%s" class="youtube-live-button">
              <i class="fa fa-circle %s"></i> %s
          </a>',
          esc_url($url),
          esc_attr($live_class),
          esc_html($button_text)
      );
  }
}

// Initialize the class
new YouTube_Live_Status();

