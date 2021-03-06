<?php

// Add scripts and stylesheets
function bsadd_csebuet_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
    wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
    //wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array( ), '3.3.6', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
    wp_enqueue_script( 'blog', get_template_directory_uri() . '/js/blog.js', array( ), '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'bsadd_csebuet_scripts' );



// Add Google Fonts
function startwordpress_google_fonts() {
    wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
    wp_enqueue_style( 'OpenSans');
}

add_action('wp_print_styles', 'startwordpress_google_fonts');



// WordPress Titles
add_theme_support( 'title-tag' );


// Theme settings
function theme_settings_add_menu() {
    add_menu_page( 'BSADD Theme Settings', 'BSADD Theme Settings', 'manage_options', 'bsadd-theme-settings', 'theme_settings_page', null, 99 );
}
add_action( 'admin_menu', 'theme_settings_add_menu' );


// Create Theme Global Settings
function theme_settings_page() { ?>
    <div class="wrap">
        <h1>BSADD Theme Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields( 'section' );
            do_settings_sections( 'theme-options' );
            submit_button(); 
            ?>
        </form>
    </div>
<?php }

// Theme settings page setup
function theme_settings_page_setup() {
  add_settings_section( 'section', 'All Settings', null, 'theme-options' );

  add_settings_field( 'next_bsadd_event', 'Upcoming event URL', 'setting_next_bsadd_event', 'theme-options', 'section' );
  register_setting('section', 'next_bsadd_event');

  add_settings_field( 'google_analytics_id', 'Google analytics id', 'setting_google_analytics_id', 'theme-options', 'section' );
  register_setting('section', 'google_analytics_id');
}
add_action( 'admin_init', 'theme_settings_page_setup' );

function setting_next_bsadd_event() { ?>
  <input type="text" name="next_bsadd_event" id="next_bsadd_event" value="<?php echo get_option( 'next_bsadd_event' ); ?>" />
<?php }

function setting_google_analytics_id() { ?>
  <input type="text" name="google_analytics_id" id="google_analytics_id" value="<?php echo get_option( 'google_analytics_id' ); ?>" />
<?php }


// Support Featured Images
add_theme_support( 'post-thumbnails' );


//Navigation Menu
function register_my_menu() {
    register_nav_menus(
        array(
            'header-nav-menu' => __( 'Header Navigation Menu' ),
            'sidebar-nav-menu' => __( 'Sidebar Navigation Menu' )
        )
    );
}
add_action( 'init', 'register_my_menu' );



//Widget
function sidebar_widgets_init() {
    register_sidebar( array(
        'name'          => 'Sidebar Widget',
        'id'            => 'sidebar_widget',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

}
add_action( 'widgets_init', 'sidebar_widgets_init' );
