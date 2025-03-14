<?php
// Load WordPress
require_once('wp-load.php');

// Verify the cron secret
$provided_key = isset($_GET['cron_key']) ? $_GET['cron_key'] : '';
if (!defined('YOUTUBE_CRON_SECRET') || $provided_key !== YOUTUBE_CRON_SECRET) {
    die('Unauthorized access');
}

// Get the YouTube Live Status class instance
global $youtube_live_status;
if (isset($youtube_live_status)) {
    $result = $youtube_live_status->check_live_status();
    echo "Check completed. Is live: " . ($result['live'] ? 'yes' : 'no') . 
         ", API call made: " . ($result['api_call_made'] ? 'yes' : 'no');
} else {
    echo "YouTube Live Status class not found";
}