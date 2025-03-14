<?php
/*
Template Name: Front Page
*/

get_header();
$page_id = get_the_ID();
$hero_title = get_field('hero_title', $page_id);
$hero_description = get_field('hero_description', $page_id);
$primary_button_text = get_field('primary_button_text', $page_id);
$primary_button_url = get_field('primary_button_url', $page_id);
$secondary_button_text = get_field('secondary_button_text', $page_id);
$secondary_button_url = get_field('secondary_button_url', $page_id);
$new_casino_url = get_field( 'new_casino_url', $page_id);
$hero_video_description = get_field( 'hero_video_description', $page_id);
$hero_video_url = get_field( 'hero_video_url', $page_id);
$featured_section_title = get_field( 'featured_section_title', $page_id);
$featured_section_description = get_field( 'featured_section_description', $page_id);
$giveaways_title = get_field( 'giveaways_title', $page_id);
$giveaways_description = get_field( 'giveaways_description', $page_id);
$giveaways_button_text = get_field( 'giveaways_button_text', $page_id);
$giveaways_button_link = get_field( 'giveaways_button_link', $page_id);
$casinos_section_title = get_field( 'casinos_section_title', $page_id);
$casinos_section_description = get_field( 'casinos_section_description', $page_id);
$team_section_title = get_field( 'team_section_title', $page_id);
$team_section_description = get_field( 'team_section_description', $page_id);
$big_text = get_field('big_text');
$second_video = get_field('second_video');

$m_monday = get_field('m_monday');
$m_tuesday = get_field('m_tuesday');
$m_wednesday = get_field('m_wednesday');
$m_thursday = get_field('m_thursday');
$m_friday = get_field('m_friday');
$m_saturday = get_field('m_saturday');
$m_sunday = get_field('m_sunday');


$a_monday = get_field('a_monday');
$a_tuesday = get_field('a_tuesday');
$a_wednesday = get_field('a_wednesday');
$a_thursday = get_field('a_thursday');
$a_friday = get_field('a_friday');
$a_saturday = get_field('a_saturday');
$a_sunday = get_field('a_sunday');

$n_monday = get_field('n_monday');
$n_tuesday = get_field('n_tuesday');
$n_wednesday = get_field('n_wednesday');
$n_thursday = get_field('n_thursday');
$n_friday = get_field('n_friday');
$n_saturday = get_field('n_saturday');
$n_sunday = get_field('n_sunday');

$facebook_link = get_field( 'facebook_link');
$instagram_link = get_field( 'instagram_link');
$youtube_link = get_field( 'youtube_link');
$twitch_link = get_field( 'twitch_link');
$discord_link = get_field( 'discord_link');


if (have_rows('featured_casino', $page_id)):
    while (have_rows('featured_casino', $page_id)): the_row();
        $featured_casino_title = get_sub_field('featured_casino_title');
endwhile; endif;
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Hero Section -->

<section class="bos-hero container-fluid">
    <div class="hero-overlay"></div>
    <div class="row hero-content text-light">
        <div class="hero-left-container col-md-6 col-12">

            <?php  if (!empty($hero_title)): ?>

            <h1 class="hero-content-title"><?php echo esc_html($hero_title); ?></h1>

            <?php endif; ?>
            <!-- video for tablet & mobile -->
            <div class="hero-video d-block d-md-none">
                <p class="video-title"></p>
                <div class="hero-video-container">
                
                    <?php if (!empty($hero_video_description)): ?>

                    <p class="hero-video-title"><?php echo esc_html__($hero_video_description) ?></p>

                    <?php endif;
                     if (!empty($hero_video_url)): ?>

                    <iframe width="560" height="315" src="<?php echo esc_url_raw($hero_video_url) ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    
                    <?php endif; ?>

                    </div>
            </div>
            <?php if (!empty($hero_description)): ?>

            <p class="hero-content-text"><?php echo esc_html($hero_description); ?></p>

            <?php endif; ?>

            <div class="hero-buttons">
                <a href="#casinos" class="primary-button"><span>Casinos</span></a>                
                <a href="#giveaways" class="secondary-button"><span>Διαγωνισμοί</span></a>
            </div>
        </div>
        <div class="hero-right-container col-md-6 col-12">
            <!-- video for desktop -->
            <div class="hero-video d-none d-md-block">
                <p class="video-title"></p>
                <div class="hero-video-container">
                
                    <?php if (!empty($hero_video_description)): ?>

                    <p class="hero-video-title"><?php echo esc_html__($hero_video_description) ?></p>

                    <?php endif;
                     if (!empty($hero_video_url)): ?>

                    <iframe width="560" height="315" src="<?php echo esc_url_raw($hero_video_url) ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    
                    <?php endif; ?>

                    </div>
            </div>

            <?php if (!empty($new_casino_url)): ?>

            <a href="<?php echo esc_url_raw($new_casino_url) ?>" class="new-casino-container">
                <svg width="200" height="200" viewBox="0 0 200 200">
                <defs>
                    <path id="circlePath" d="M 100, 100 m -80, 0 a 80,80 0 1,1 160,0 a 80,80 0 1,1 -160,0" />
                </defs>
                <g class="rotating-text">
                    <text font-size="24" font-weight="normal" letter-spacing="2px" fill="white">
                        <textPath href="#circlePath"> * new casino * new casino * new casino </textPath>
                    </text>
                </g>
                <text x="100" y="115" font-size="48" font-weight="bold" fill="white" text-anchor="middle">PLAY</text>
                </svg>
            </a>

            <?php endif; ?>

        </div>
    </div>
</section>

<!-- Featured Casino Section -->

<section class="container-fluid">
    <div id="featured-casino" class="row content-area text-light">
        <div class="section-header">
            <?php if(!empty($featured_section_title)): ?>
            <div class="section-title"><?php echo esc_html($featured_section_title) ?></div>
            <?php endif;
            
            if(!empty($featured_section_description)): ?>
            <div class="section-title-text"><?php echo esc_html($featured_section_description . ' το ' . $featured_casino_title); ?></div>
            <?php endif; ?>
        </div>

        <?php if (have_rows('featured_casino', $page_id)): ?>

        <div class="casino-container">

            <?php while (have_rows('featured_casino', $page_id)): the_row();
                $featured_casino_image = get_sub_field('featured_casino_image');
                $featured_casino_title = get_sub_field('featured_casino_title');
                $featured_casino_description = get_sub_field('featured_casino_description');
                $featured_casino_url = get_sub_field('featured_casino_url');
                $featured_casino_bonus = get_sub_field('featured_casino_bonus');
                $featured_casino_free_spins = get_sub_field('featured_casino_free_spins');
                $featured_casino_wager = get_sub_field('featured_casino_wager'); ?>

            <?php if (!empty($featured_casino_image)): ?>
            <div class="casino-image-container">
                <img class="img-fluid" src="<?php echo esc_url_raw($featured_casino_image); ?>" alt="bc-game-casino">
                
            </div>
            <?php endif; ?>
            <div class="casino-info-container">
                <div class="casino-deposit-details">
                    <?php if(!empty($featured_casino_bonus)): ?>
                    <div id="detail-1" class="detail"><?php echo esc_html($featured_casino_bonus); ?></div>
                    <?php endif;
                    if(!empty($featured_casino_free_spins)): ?>
                    <div id="detail-2" class="detail"><?php echo esc_html($featured_casino_free_spins); ?></div>
                    <?php endif; 
                    if (!empty($featured_casino_wager)):?>
                    <div id="detail-3" class="detail"><?php echo esc_html($featured_casino_wager); ?></div>
                    <?php endif; ?>
                </div>
                <div class="casino-titles">
                    <?php if(!empty($featured_casino_title)): ?>
                    <div class="casino-title"><?php echo esc_html($featured_casino_title);?></div>
                    <?php endif; 
                    if (!empty($featured_casino_description)):?>
                    <div class="casino-text"><?php echo esc_html($featured_casino_description) ?></div>
                    <?php endif; ?>
                </div>
                <?php if(!empty($featured_casino_url)): ?>
                <a href="<?php echo esc_url_raw($featured_casino_url) ?>" class="casino-button text-light">PLAY NOW</a>
                <?php endif; ?>
            </div>
        </div>
        <?php endwhile; endif; ?>
        <div class="vertical-image">
            <div class="test">
                <div class="vertical-image-overlay"></div>
            </div>
        </div>
    </div>
</section>

<!-- Our Team Section -->
<section class="container-fluid">
    <div id="our-team" class="row content-area text-light">
        <div class="section-header">
            <?php if (!empty($team_section_title)) :?>
                <div class="section-title"><?php echo esc_html($team_section_title) ?></div>
            <?php endif ?>
            <?php if (!empty($team_section_description)) :?>
                <div class="section-title-text"><?php echo esc_html($team_section_description) ?></div>
                <?php endif ?>
            </div>
        </div>
        
        <?php
        $team_members = get_field('team_members');
        if ($team_members): ?>
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php foreach ($team_members as $member): ?>
                    <div class="swiper-slide">
                        <div class="team-container">
                            <div class="team-member-card">
                                <div class="team-member-image">
                                    <img class="img-fluid" src="<?php echo esc_url($member['member_image']['url']); ?>" alt="<?php echo esc_attr($member['member_name']); ?>">
                                </div>
                                <div class="team-member-info">   
                                    <div class="team-member-title">
                                        <p><?php echo esc_html($member['member_name']); ?></p>
                                        <a href="<?php echo esc_url($member['big_win_link']); ?>">
                                            <img src="<?php echo THEME_IMAGES; ?>/big-win.png" alt="big-win"> BIG WIN
                                        </a>
                                    </div>
                                    <div class="team-member-social">
                                        <?php if (!empty($member['instagram_link'])): ?>
                                            <a href="<?php echo esc_url($member['instagram_link']); ?>">
                                                <img src="<?php echo THEME_IMAGES; ?>/instagram.png" alt="instagram-icon">
                                            </a>
                                        <?php endif; ?>
                                        <?php if (!empty($member['facebook_link'])): ?>
                                            <a href="<?php echo esc_url($member['facebook_link']); ?>">
                                                <img src="<?php echo THEME_IMAGES; ?>/facebook.png" alt="facebook-icon">
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div> 
            <div class="swiper-controls">
                <div class="swiper-button-prev">
                        <img class="" src="<?php echo THEME_IMAGES; ?>/arrow-prev.png" alt="prev">
                    </div>
                    <div class="swiper-button-next">
                        <img class="" src="<?php echo THEME_IMAGES; ?>/arrow-next.png" alt="next">
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <div class="marquee">
        <div class="track">
            <?php for ($i = 0; $i < 17; $i++){ ?>
            <span>* ΟΠΟΤΕ ΘΕΛΩ ΤΟ ΚΟΒΩ</span>
            <?php } ?>
        </div>
    </div>

</section>

<!-- Giveaways Section -->


<section id="giveaways" class="container-fluid">
    <div class="row content-area text-light">
        
        <div class="contest-area d-flex flex-row justify-content-between">
            <div class="contest-area-overlay"></div>
            <div class="contest-left">
                <div class="contest-main-title">
                    <?php if (!empty($giveaways_title)): ?>
                    <h2><?php echo esc_html($giveaways_title);?></h2>
                    <?php endif; 
                    if (!empty($giveaways_description)):?>
                    <p><?php echo esc_html($giveaways_description) ?></p>
                    <?php endif; ?>
                </div>
                <div class="contest-buttons d-flex flex-row justify-content-between">
                <?php if (!empty($giveaways_button_link) && !empty($giveaways_button_text)): ?>
                    <a id="diagonismoi-button" href="<?php echo esc_url_raw($giveaways_button_link) ?>"><?php echo esc_html($giveaways_button_text) ?></a>
                    <div class="contest-social d-flex flex-row gap-3 align-items-center">
                    <?php if (!empty($instagram_link)): ?>
                        <a href="<?php echo esc_url_raw($instagram_link) ?>"><img src="<?php echo THEME_IMAGES; ?>/instagram.png" alt="instagram-icon"></a>
                    <?php endif;
                    if (!empty($discord_link)): ?>
                        <a href="<?php echo esc_url_raw($discord_link) ;?>"><img src="<?php echo THEME_IMAGES; ?>/discord.png" alt="discord-icon"></a>
          <?php endif; ?>          
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php  
            $page_id = get_the_ID();

            if (have_rows('giveaway_items', $page_id)): ?>
                <div class="contest-right">
                    <?php while (have_rows('giveaway_items', $page_id)): the_row();
                        $item_title = get_sub_field('item_title');
                        $item_description = get_sub_field('item_description');
                        $item_icon = get_sub_field('item_icon');?>

                        <div class="contest-info">
                            <div class="d-flex flex-row justify-content-start gap-2 pb-2">
                                <?php if (!empty($item_icon)): 
                                    $icon_url = is_array($item_icon) ? $item_icon['url'] : $item_icon; ?>
                                    <img src="<?php echo esc_url($icon_url); ?>" alt="gift">
                                <?php endif; ?>
                                
                                <?php if (!empty($item_title)): ?>
                                    <h5><?php echo esc_html($item_title); ?></h5>
                                <?php endif; ?>
                            </div>
                            
                            <?php if (!empty($item_description)): ?>
                                <p><?php echo esc_html($item_description); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>

<!-- Casinos Section -->


<section id="casinos" class="container-fluid">
    <div class="row content-area text-light sticky-parent ">
        <div class="section-header sticky-child">
            <?php if (!empty($casinos_section_title)): ?>
            <div class="section-title"><?php echo esc_html($casinos_section_title) ?></div>
            <?php endif;
            if(!empty($casinos_section_description)): ?>
            <div class="section-title-text"><?php echo esc_html($casinos_section_description) ?></div>
            <?php endif; ?>
        </div>
        <?php

        if (have_rows('casinos', $page_id)): ?>
        <div class="casinos-container">
            <?php while (have_rows('casinos', $page_id)): the_row(); 
                $casino_image = get_sub_field('casino_image'); 
                $casino_image_alt = get_sub_field('casino_title');
                $casino_number = get_sub_field('casino_number');
                $casino_title = get_sub_field('casino_title') ?: 'No Title';
                $casino_description = get_sub_field('casino_description') ?: 'No Description';
                $link = get_sub_field('link') ?: '#';
                $bonus = get_sub_field('bonus') ?: 'N/A';
                $free_spins = get_sub_field('free_spins') ?: 'N/A';
                $wager = get_sub_field('wager') ?: 'N/A'; ?>
            <div class="casino-container">
                <div class="casino-image-container">
                    <?php if (!empty($casino_image['url'])): ?>
                    <img class="img-fluid" src="<?php echo esc_url($casino_image['url']); ?>" alt="<?php echo esc_attr($casino_image_alt); ?>">                    
                    <?php endif; ?>
                    <?php if (!empty($casino_number)): ?>
                    <div class="casino-number"><?php echo esc_html($casino_number); ?></div>
                    <?php endif; ?>    
                </div>
                <div class="casino-info-container">
                    <div class="casino-deposit-details">
                        <div id="detail-1" class="detail"><?php echo esc_html($bonus); ?></div>
                        <div id="detail-2" class="detail"><?php echo esc_html($free_spins); ?></div>
                        <div id="detail-3" class="detail"><?php echo esc_html($wager); ?></div>
                    </div>
                    <div class="casino-titles">
                        <div class="casino-title"><?php echo esc_html($casino_title); ?></div>
                        <div class="casino-text"><?php echo esc_html($casino_description); ?></div>
                    </div>
                    <a href="<?php echo esc_url($link); ?>" class="casino-button text-light">PLAY NOW</a>
                </div>
            </div>
            <div class="divider"></div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Marquee Providers Section -->


<section class="container-fluid">
    <div class="row marquee-area text-light">

    <div class="marquee-provider">
        <div class="track-provider">
        <?php 
        $providers = [
            "softbet.png" => "softbet",
            "3oaks.png" => "3oaks",
            "netent.png" => "netent",
            "playgo.png" => "playgo",
            "playson.png" => "playson",
            "playtech.png" => "playtech",
            "pragmaticplay.png" => "pragmaticplay",
            "hacksaw.png" => "hacksaw"
        ];

        for ($i = 0; $i < 6; $i++): ?>
            <?php foreach ($providers as $image => $alt): ?>
                <div class="provider">
                    <img class="img-fluid" src="<?php echo THEME_IMAGES . '/' . $image; ?>" alt="<?php echo esc_attr($alt); ?>">
                </div>
            <?php endforeach; ?>
        <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Second Video Section -->

<section class="container-fluid">
    <div class="row content-area text-light highlights-area">
        <div class="highlights-text">
            <?php if (!empty($big_text)): ?>
            <p><?php echo esc_html($big_text); ?></p>
            <?php endif; ?>
        </div>
        <div class="highlights-video">
            <p class="highlights-title">STREAM HIGHLIGHTS</p>
            <?php if (!empty($second_video)): ?>
            <iframe width="100%" height="100%" src="<?php echo esc_url_raw($second_video); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <?php endif; ?>
            </div>
    </div>
</section>

<!-- Schedule Section -->

<section id="schedule" class="container-fluid">
    <div class="row content-area text-light">
        <div class="section-header">
                <div class="section-title">Πρόγραμμα</div>
                <div class="section-title-text">Γνώρισε την ομάδα του καναλιού μας και πες μας ένα γειά στα social!</div>
        </div>
        <div class="table-area d-none d-lg-block">

            <?php
            // Desktop Schedule
            $schedule = [
                '12:00 - 15:00' => [
                    'Δευτέρα'   => esc_html($m_monday),
                    'Τρίτη'     => esc_html($m_tuesday),
                    'Τετάρτη'   => esc_html($m_wednesday),
                    'Πέμπτη'    => esc_html($m_thursday),
                    'Παρασκευή' => esc_html($m_friday),
                    'Σάββατο'   => esc_html($m_saturday),
                    'Κυριακή'   => esc_html($m_sunday),
                ],
                '18:00 - 22:00' => [
                    'Δευτέρα'   => esc_html($a_monday),
                    'Τρίτη'     => esc_html($a_tuesday),
                    'Τετάρτη'   => esc_html($a_wednesday),
                    'Πέμπτη'    => esc_html($a_thursday),
                    'Παρασκευή' => esc_html($a_friday),
                    'Σάββατο'   => esc_html($a_saturday),
                    'Κυριακή'   => esc_html($a_sunday),
                ],
                '22:00 - 02:00' => [
                    'Δευτέρα'   => esc_html($n_monday),
                    'Τρίτη'     => esc_html($n_tuesday),
                    'Τετάρτη'   => esc_html($n_wednesday),
                    'Πέμπτη'    => esc_html($n_thursday),
                    'Παρασκευή' => esc_html($n_friday),
                    'Σάββατο'   => esc_html($n_saturday),
                    'Κυριακή'   => esc_html($n_sunday),
                ],
            ];
            ?>

            <table>
                <thead>
                    <tr>
                        <th>Ώρα</th>
                        <?php
                        $days = array_keys(reset($schedule));
                        foreach ($days as $day) {
                            echo "<th>{$day}</th>";
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($schedule as $time => $daysData) {
                        echo "<tr>";
                        echo "<td class='table-time'>{$time}</td>";
                        foreach ($daysData as $data) {
                            echo "<td>{$data}</td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="table-area d-block d-lg-none">
            <?php
// Ορισμός των δεδομένων
            $schedule = [
                'Δευτέρα' => [
                    '12:00 - 15:00' => esc_html($m_monday),
                    '18:00 - 22:00' => esc_html($a_monday),
                    '22:00 - 02:00' => esc_html($n_monday),
                ],
                'Τρίτη' => [
                    '12:00 - 15:00' => esc_html($m_tuesday),
                    '18:00 - 22:00' => esc_html($a_tuesday),
                    '22:00 - 02:00' => esc_html($n_tuesday),
                ],
                'Τετάρτη' => [
                    '12:00 - 15:00' => esc_html($m_wednesday),
                    '18:00 - 22:00' => esc_html($a_wednesday),
                    '22:00 - 02:00' => esc_html($n_wednesday),
                ],
                'Πέμπτη' => [
                    '12:00 - 15:00' => esc_html($m_thursday),
                    '18:00 - 22:00' => esc_html($a_thursday),
                    '22:00 - 02:00' => esc_html($n_thursday),
                ],
                'Παρασκευή' => [
                    '12:00 - 15:00' => esc_html($m_friday),
                    '18:00 - 22:00' => esc_html($a_friday),
                    '22:00 - 02:00' => esc_html($n_friday),
                ],
                'Σάββατο' => [
                    '12:00 - 15:00' => esc_html($m_saturday),
                    '18:00 - 22:00' => esc_html($a_saturday),
                    '22:00 - 02:00' => esc_html($n_saturday),
                ],
                'Κυριακή' => [
                    '12:00 - 15:00' => esc_html($m_sunday),
                    '18:00 - 22:00' => esc_html($a_sunday),
                    '22:00 - 02:00' => esc_html($n_sunday),
                ],
            ];
            ?>
            <table>
                <thead>
                    <tr>
                        <th>Ημέρα</th>
                        <?php
                        // Λήψη των ωρών από τα κλειδιά του πρώτου υποπίνακα
                        $times = array_keys(reset($schedule));
                        foreach ($times as $time) {
                            echo "<th>{$time}</th>";
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Δημιουργία των γραμμών του πίνακα
                    foreach ($schedule as $day => $timesData) {
                        echo "<tr>";
                        echo "<td class='table-day'>{$day}</td>";
                        foreach ($timesData as $data) {
                            echo "<td>{$data}</td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Footer Section -->


<?php endwhile; endif; ?>
<?php get_footer(); ?>

