<?php
/**
 * Oregon Accident Chiro — functions.php
 */

// ── Theme Setup ──────────────────────────────────────────────
function oac_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );
    add_theme_support( 'menus' );

    register_nav_menus( [
        'primary' => __( 'Primary Menu', 'oac' ),
        'footer'  => __( 'Footer Menu', 'oac' ),
    ] );
}
add_action( 'after_setup_theme', 'oac_setup' );

// ── Enqueue Styles & Scripts ─────────────────────────────────
function oac_enqueue() {
    wp_enqueue_style( 'google-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600;700&display=swap',
        [], null );

    wp_enqueue_style( 'oac-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [ 'google-fonts' ], '1.0.0' );

    wp_enqueue_script( 'oac-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [], '1.0.0', true );

    // Pass PHP data to JS
    wp_localize_script( 'oac-main', 'OAC', [
        'phone'     => get_option( 'oac_phone', '(503) 555-0100' ),
        'phone_raw' => get_option( 'oac_phone_raw', '+15035550100' ),
        'email'     => get_option( 'oac_email', 'info@oregonaccidentchiro.com' ),
        'ajaxurl'   => admin_url( 'admin-ajax.php' ),
        'nonce'     => wp_create_nonce( 'oac_lead' ),
    ] );
}
add_action( 'wp_enqueue_scripts', 'oac_enqueue' );

// ── Custom Post Types ─────────────────────────────────────────
function oac_register_post_types() {
    // City Pages
    register_post_type( 'oac_city', [
        'labels'  => [
            'name'          => 'City Pages',
            'singular_name' => 'City Page',
            'add_new_item'  => 'Add New City',
            'edit_item'     => 'Edit City Page',
        ],
        'public'       => true,
        'has_archive'  => false,
        'rewrite'      => [ 'slug' => 'areas' ],
        'supports'     => [ 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt' ],
        'show_in_menu' => true,
        'menu_icon'    => 'dashicons-location',
        'show_in_rest' => true,
    ] );

    // Service Pages
    register_post_type( 'oac_service', [
        'labels'  => [
            'name'          => 'Services',
            'singular_name' => 'Service',
            'add_new_item'  => 'Add New Service',
            'edit_item'     => 'Edit Service',
        ],
        'public'       => true,
        'has_archive'  => false,
        'rewrite'      => [ 'slug' => 'services' ],
        'supports'     => [ 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt' ],
        'show_in_menu' => true,
        'menu_icon'    => 'dashicons-heart',
        'show_in_rest' => true,
    ] );
}
add_action( 'init', 'oac_register_post_types' );

// ── Theme Options Page (Settings) ────────────────────────────
function oac_settings_menu() {
    add_menu_page(
        'Site Settings',
        '⚙️ OAC Settings',
        'manage_options',
        'oac-settings',
        'oac_settings_page',
        'dashicons-admin-settings',
        3
    );
}
add_action( 'admin_menu', 'oac_settings_menu' );

function oac_settings_page() {
    if ( isset( $_POST['oac_save'] ) && check_admin_referer( 'oac_settings_nonce' ) ) {
        $fields = [ 'oac_phone', 'oac_phone_raw', 'oac_email', 'oac_business_name', 'oac_address', 'oac_callrail_number' ];
        foreach ( $fields as $field ) {
            if ( isset( $_POST[ $field ] ) ) {
                update_option( $field, sanitize_text_field( $_POST[ $field ] ) );
            }
        }
        echo '<div class="notice notice-success"><p>✅ Settings saved!</p></div>';
    }
    ?>
    <div class="wrap">
        <h1>🦴 Oregon Accident Chiro — Site Settings</h1>
        <p style="color:#666;">Change these settings once and they update everywhere on the site.</p>
        <form method="post" style="max-width:600px;background:white;padding:30px;border-radius:8px;margin-top:20px;box-shadow:0 2px 8px rgba(0,0,0,0.08);">
            <?php wp_nonce_field( 'oac_settings_nonce' ); ?>
            <table class="form-table">
                <tr><th>Display Phone Number</th><td><input type="text" name="oac_phone" value="<?php echo esc_attr(get_option('oac_phone','(503) 555-0100')); ?>" class="regular-text" placeholder="(503) 555-0100"/><p class="description">Shown to visitors e.g. (503) 555-0100</p></td></tr>
                <tr><th>Phone (tel: link)</th><td><input type="text" name="oac_phone_raw" value="<?php echo esc_attr(get_option('oac_phone_raw','+15035550100')); ?>" class="regular-text" placeholder="+15035550100"/><p class="description">For href="tel:" — e.g. +15035550100</p></td></tr>
                <tr><th>CallRail Number</th><td><input type="text" name="oac_callrail_number" value="<?php echo esc_attr(get_option('oac_callrail_number','')); ?>" class="regular-text" placeholder="CallRail tracking number"/><p class="description">If using CallRail, enter tracking number here. Leave empty to use display phone.</p></td></tr>
                <tr><th>Email Address</th><td><input type="email" name="oac_email" value="<?php echo esc_attr(get_option('oac_email','info@oregonaccidentchiro.com')); ?>" class="regular-text"/></td></tr>
                <tr><th>Business Name</th><td><input type="text" name="oac_business_name" value="<?php echo esc_attr(get_option('oac_business_name','Oregon Accident Chiro')); ?>" class="regular-text"/></td></tr>
                <tr><th>Address</th><td><input type="text" name="oac_address" value="<?php echo esc_attr(get_option('oac_address','Portland, Oregon')); ?>" class="regular-text"/></td></tr>
            </table>
            <p><input type="submit" name="oac_save" class="button button-primary button-large" value="💾 Save Settings"/></p>
        </form>
    </div>
    <?php
}

// ── Helper Functions ─────────────────────────────────────────
function oac_phone() {
    $cr = get_option( 'oac_callrail_number', '' );
    return $cr ? $cr : get_option( 'oac_phone', '(503) 555-0100' );
}
function oac_phone_raw() {
    $cr = get_option( 'oac_callrail_number', '' );
    if ( $cr ) return preg_replace( '/[^0-9+]/', '', $cr );
    return get_option( 'oac_phone_raw', '+15035550100' );
}
function oac_email() { return get_option( 'oac_email', 'info@oregonaccidentchiro.com' ); }
function oac_name()  { return get_option( 'oac_business_name', 'Oregon Accident Chiro' ); }

// ── AJAX Lead Form Handler ────────────────────────────────────
function oac_handle_lead() {
    check_ajax_referer( 'oac_lead', 'nonce' );
    $data = [
        'fname' => sanitize_text_field( $_POST['fname'] ?? '' ),
        'lname' => sanitize_text_field( $_POST['lname'] ?? '' ),
        'phone' => sanitize_text_field( $_POST['phone'] ?? '' ),
        'email' => sanitize_email( $_POST['email'] ?? '' ),
        'city'  => sanitize_text_field( $_POST['city'] ?? '' ),
        'date'  => sanitize_text_field( $_POST['date'] ?? '' ),
        'msg'   => sanitize_textarea_field( $_POST['msg'] ?? '' ),
    ];
    if ( empty( $data['fname'] ) || empty( $data['phone'] ) ) {
        wp_send_json_error( 'Missing required fields' );
    }
    // Email notification to admin
    $to      = get_option( 'admin_email' );
    $subject = '🚗 New Lead: ' . $data['fname'] . ' ' . $data['lname'] . ' — ' . $data['city'];
    $body    = "New accident chiro lead:\n\nName: {$data['fname']} {$data['lname']}\nPhone: {$data['phone']}\nEmail: {$data['email']}\nCity: {$data['city']}\nAccident Date: {$data['date']}\nSymptoms: {$data['msg']}";
    wp_mail( $to, $subject, $body );

    // Also save as comment/post for record keeping (optional)
    wp_send_json_success( 'Lead received' );
}
add_action( 'wp_ajax_oac_lead', 'oac_handle_lead' );
add_action( 'wp_ajax_nopriv_oac_lead', 'oac_handle_lead' );

// ── Schema.org JSON-LD ────────────────────────────────────────
function oac_schema() {
    $schema = [
        '@context' => 'https://schema.org',
        '@type'    => 'MedicalBusiness',
        'name'     => oac_name(),
        'url'      => home_url(),
        'telephone' => oac_phone_raw(),
        'address'  => [
            '@type'           => 'PostalAddress',
            'addressLocality' => 'Portland',
            'addressRegion'   => 'OR',
            'addressCountry'  => 'US',
        ],
        'areaServed'       => [ 'Portland', 'Hillsboro', 'Beaverton', 'Sherwood', 'Salem', 'Lake Oswego' ],
        'medicalSpecialty' => 'Chiropractic',
        'aggregateRating'  => [
            '@type'       => 'AggregateRating',
            'ratingValue' => '4.9',
            'reviewCount' => '127',
        ],
    ];
    echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
}
add_action( 'wp_head', 'oac_schema' );

// ── Flush rewrite on theme activate ──────────────────────────
function oac_rewrite_flush() { flush_rewrite_rules(); }
add_action( 'after_switch_theme', 'oac_rewrite_flush' );

// ── Excerpt length ───────────────────────────────────────────
add_filter( 'excerpt_length', fn() => 25 );
add_filter( 'excerpt_more',   fn() => '…' );
