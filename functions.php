<?php

function myThmeStyles(){
    wp_enqueue_script('mtthmescript',get_theme_file_uri('/assets/js/main.js'),null,null,true );
    wp_enqueue_style('custom_theme_css_file', get_theme_file_uri('/assets/css/style.css'));
    wp_enqueue_style('dashicons'); // wordpress icons
    wp_enqueue_style('mythemestyle',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','myThmeStyles');

// Add Elementor support and register menu and title-tag support
function my_theme_features() {
    // Check if Elementor plugin is activated
    if (defined('ELEMENTOR_PATH')) {
        add_theme_support('elementor');
    }

    // Register Menu
    register_nav_menu('headerMenuLocation','Header Menu Location');
    register_nav_menu('footerMenuLocation','Footer Menu Location');

    // wordpress title support
    add_theme_support('title-tag');
     add_theme_support('post-thumbnails');



}
add_action('after_setup_theme', 'my_theme_features');

add_shortcode('dkmainvideoslider',"dkMainVidroSlider");

function dkMainVidroSlider(){
    $getmySlider = '  <section class="dk-video-main-silder" data-speed="6000">

        <div class="itembox">
            <div class="item active">
                <div class="video-container">
                    <div class="video-placeholder">Loading Video...</div>
                    <video class="lazy-video" data-src="'.get_theme_file_uri('/videos/v1.mp4').'" muted autoplay playsinline loop>
                    </video>
                </div>
                <div class="content-container">
                    <h2>CINCINNATI BREWERY,
PIZZA, EVENT </h2>

                    <a href="" class="thm-btn">Visit Us</a>
                </div>
            </div>
            <div class="item">
                <div class="video-container">
                    <div class="video-placeholder">Loading Video...</div>
                    <video class="lazy-video" data-src="'.get_theme_file_uri('/videos/v2.mp4').'" muted playsinline loop>
                    </video>
                </div>
                <div class="content-container">
                    <h2>DELICIOUS BRICK
OVEN PIZZAS </h2>

                    <a href="" class="thm-btn">Visit Us</a>
                </div>
            </div>
            <div class="item">
                <div class="video-container">
                    <div class="video-placeholder">Loading Video...</div>
                    <video class="lazy-video" data-src="'.get_theme_file_uri('/videos/v3.mp4').'" muted playsinline loop>
                    </video>
                </div>
                <div class="content-container">
                    <h2>FRESH SALADS AND
OVEN BAKED PRETZELS </h2>

                    <a href="" class="thm-btn">Visit Us</a>
                </div>
            </div>
            <div class="item">
                <div class="video-container">
                    <div class="video-placeholder">Loading Video...</div>
                    <video class="lazy-video" data-src="'.get_theme_file_uri('/videos/v4.mp4').'" muted playsinline loop>
                    </video>
                </div>
                <div class="content-container">
                    <h2>SMÅLL-BATCH CRAFT BEER
BREWED ON-SITE</h2>

                    <a href="" class="thm-btn">Visit Us</a>
                </div>
            </div>
            <div class="item">
                <div class="video-container">
                    <div class="video-placeholder">Loading Video...</div>
                    <video class="lazy-video" data-src="'.get_theme_file_uri('/videos/v5.mp4').'" muted playsinline loop>
                    </video>
                </div>
                <div class="content-container">
                    <h2>SCENIC VIEWS OF RIVER
ROM OUR PATIO</h2>

                    <a href="" class="thm-btn">Visit Us</a>
                </div>
            </div>
            <div class="item">
                <div class="video-container">
                    <div class="video-placeholder">Loading Video...</div>
                    <video class="lazy-video" data-src="'.get_theme_file_uri('/videos/v6.mp4').'" muted playsinline loop>
                    </video>
                </div>
                <div class="content-container">
                    <h2>WE SERVE BEER, WINE,
ND BARS </h2>

                    <a href="" class="thm-btn">Visit Us</a>
                </div>
            </div>
            <div class="item">
                <div class="video-container">
                    <div class="video-placeholder">Loading Video...</div>
                    <video class="lazy-video" data-src="'.get_theme_file_uri('/videos/v7.mp4').'" muted playsinline loop>
                    </video>
                </div>
                <div class="content-container">
                    <h2>ROOFTOP BAR WITH
DELICIOUS FOOD </h2>

                    <a href="" class="thm-btn">Visit Us</a>
                </div>
            </div>
            <div class="item">
                <div class="video-container">
                    <div class="video-placeholder">Loading Video...</div>
                    <video class="lazy-video" data-src="'.get_theme_file_uri('/videos/v8.mp4').'" muted playsinline loop>
                    </video>
                </div>
                <div class="content-container">
                    <h2>16 DIFFERENT BEERS TO WITH
SANDWICHES, SALADS, AND MORE </h2>

                    <a href="" class="thm-btn">Visit Us</a>
                </div>
            </div>
            <div class="item">
                <div class="video-container">
                    <div class="video-placeholder">Loading Video...</div>
                    <video class="lazy-video" data-src="'.get_theme_file_uri('/videos/v9.mp4').'" muted playsinline loop>
                    </video>
                </div>
                <div class="content-container">
                    <h2>LOCATED ON LITTLE MIAMI
RIVER BIKE TRAIL </h2>

                    <a href="" class="thm-btn">Visit Us</a>
                </div>
            </div>
        </div>
        <div class="controls">
            <div class="left" data-current="0"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
            <div class="right" data-current="1"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
        </div>

    </section>';

    return $getmySlider;
}

// Theme Setup
// Add a custom menu to the admin dashboard
function dk_setup_my_theme() {
    add_menu_page(
        'Dk Theme Option Setup',        // Page title
        'Dk Theme Setup',              // Menu title
        'manage_options',           // Capability required
        'dk-setup-my-theme',         // Menu slug
        'dk_setup_my_theme_page',      // Callback function for content
        'dashicons-admin-generic',  // Icon for the menu
        6                           // Menu position
    );
}
add_action('admin_menu', 'dk_setup_my_theme');

// Content for the custom menu page
function dk_setup_my_theme_page() {
    ?>
<div class="wrap">
<h1>Dk Theme Setup</h1>
<p>Theme Social Links, Address etc</p>

<?php
$mythemesetup = json_decode(file_get_contents(get_template_directory().'/mytheme.json'),true);
;?>

<form action="" method="post">
    <h2>
      <table>
        <tr>
            <td>Email 1</td>
            <td>:</td>
            <td><input type="email" name="myemail1" value="<?=$mythemesetup['email1']?>"></td>
        </tr>
        <tr>
            <td>Email 2</td>
            <td>:</td>
            <td><input type="email" name="myemail2" value="<?=$mythemesetup['email2']?>"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>:</td>
            <td><input type="text" name="myphone" value="<?=$mythemesetup['myphone']?>"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td>:</td>
            <td><input type="text" name="address" value="<?=$mythemesetup['address']?>"></td>
        </tr>
      </table>
    </h2>
    <h2>Social Links</h2>
    <table>
        <tr>
            <td>Location</td>
            <td>:</td>
            <td><input type="text" name="llocation" value="<?=$mythemesetup['llocation']?>"></td>
        </tr>
        <tr>
            <td>Facebook</td>
            <td>:</td>
            <td><input type="text"  name="facebook" value="<?=$mythemesetup['facebook']?>"></td>
        </tr>
        <tr>
            <td>Tweeter</td>
            <td>:</td>
            <td><input type="text" name="tweeter" value="<?=$mythemesetup['tweeter']?>"></td>
        </tr>
        <tr>
            <td>Instagram</td>
            <td>:</td>
            <td><input type="text" name="instagram" value="<?=$mythemesetup['instagram']?>"></td>
        </tr>
    </table>
    <input type="hidden" name="filetheme">
    <button class="button button-primary">Update</button>
</form>

</div>
    <?php
}

if(isset($_POST['filetheme'])){
   $thmsetup = [
    'email1' =>  $_POST['myemail1'],
    'email2' =>  $_POST['myemail2'],
    'myphone' =>  $_POST['myphone'],
    'address' =>  $_POST['address'],
    'llocation' =>  $_POST['llocation'],
    'facebook' =>  $_POST['facebook'],
    'tweeter' =>  $_POST['tweeter'],
    'instagram' =>  $_POST['instagram']
   ];

   file_put_contents(get_template_directory().'/mytheme.json',json_encode($thmsetup));

}