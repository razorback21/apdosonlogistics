<?php
class ApdosonTheme {

    private static $instance = null;

    public static function getInstance() {
        if (null == self::$instance) {
            self::$instance = new ApdosonTheme;
        }
        return self::$instance;
    }

    private function __construct() {
        add_action('wp_enqueue_scripts', [$this, 'apdoson_enqueue_scripts']);
        add_action('wp_ajax_contact_form', [$this, 'contact_form_handler']);
        add_action('wp_ajax_nopriv_contact_form', [$this, 'contact_form_handler']);
    }

    public function apdoson_enqueue_scripts() {
        // enqueue styles
        wp_enqueue_style('apdoson-style', get_template_directory_uri().'/style.css');
        // enqueue javascripts
        wp_enqueue_script('apdoson-alpine', 'https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js', [], null, true);
        wp_enqueue_script('apdoson-tailwind-config', get_template_directory_uri().'/js/tailwind.config.js', [], null, true);
        
        // Load jQuery and jQuery validate only on contact page
        if (is_page('contact')) {
            wp_enqueue_script('apdoson-jquery', get_template_directory_uri().'/js/jquery-3.7.1.js', [], null, true);
            wp_enqueue_script('apdoson-jquery-validate', get_template_directory_uri().'/js/jquery.validate.min.js', [], null, true);
            wp_enqueue_script('apdoson-contact', get_template_directory_uri().'/js/contact.js', [], null, true);
            wp_localize_script('apdoson-contact', 'ajax_object', [
                'ajax_url' => admin_url('admin-ajax.php'),
                'nonce'    => wp_create_nonce('my_ajax_nonce')
            ]);
        }
    }

    function contact_form_handler() {
        $status = 'failed';
        $message = 'Error!';

        // Verify nonce for security
        if(!check_ajax_referer('my_ajax_nonce', 'security')) {
            wp_send_json_success(['status'=>$status, 'message'=>$message]);
        }
       
        if (!isset($_POST['name']) && !isset($_POST['mobileno']) && !isset($_POST['service']) && !isset($_POST['message'])) {
            wp_send_json_error(array('status'=>$status, 'message' => 'Fill out required fields!'));
        } else {
           $status = 'success';
           $message = 'Form submitted successfully!!!';
           
            $body = "Name: {$_POST['name']}\n\n";
            $body .= "Email: {$_POST['email']}\n\n";
            $body .= "Service: {$_POST['service']}\n\n";
            $body .= "Message: {$_POST['message']}\n\n";
           
            mail('contact@apdosonlogistics.com.ph', 'APDOSON Website: Customer Inquiry', $body);
        }
        wp_send_json_success(['status'=>$status, 'message'=>$message]);
    }
    
}

ApdosonTheme::getInstance();

// ================= Custom Web Settings Section =================

add_action('admin_menu', function() {
    add_options_page(
        'Web Settings',          // Page title
        'Web Settings',          // Menu title
        'manage_options',        // Capability
        'web-settings',          // Menu slug
        'render_web_settings_page' // Function to display page content
    );
});

add_action('admin_init', function() {
    

    add_settings_section(
        'web_settings_section',          // ID
        '',                  // Title
        function() {                     // Callback for description
            echo '<p>Configure your website settings below.</p>';
        },
        'web-settings'                   // Page slug
    );

    register_setting('web_settings_group', 'office_address');
    add_settings_field(
        'office_address',                // ID
        'Office Address',                // Title
        function() {                     // Callback to render input
            $value = esc_html(get_option('office_address', ''));
            echo '<input name="office_address" value="'.$value.'" style="width:100%" type="text"/>';
        },
        'web-settings',                  // Page slug
        'web_settings_section'           // Section ID
    );

    register_setting('web_settings_group', 'warehouse_address');
    add_settings_field(
        'warehouse_address',                // ID
        'Warehouse Address',                // Title
        function() {                     // Callback to render input
            $value = esc_html(get_option('warehouse_address', ''));
            echo '<input name="warehouse_address" value="'.$value.'" style="width:100%" type="text"/>';
        },
        'web-settings',                  // Page slug
        'web_settings_section'           // Section ID
    );

    register_setting('web_settings_group', 'facebook');
    add_settings_field(
        'facebook',                // ID
        'Facebook',                // Title
        function() {                     // Callback to render input
            $value = esc_html(get_option('facebook', ''));
            echo '<input name="facebook" value="'.$value.'" style="width:100%" type="text"/>';
        },
        'web-settings',                  // Page slug
        'web_settings_section'           // Section ID
    );

    register_setting('web_settings_group', 'youtube');
    add_settings_field(
        'youtube',                // ID
        'Youtube',                // Title
        function() {                     // Callback to render input
            $value = esc_html(get_option('youtube', ''));
            echo '<input name="youtube" value="'.$value.'" style="width:100%" type="text"/>';
        },
        'web-settings',                  // Page slug
        'web_settings_section'           // Section ID
    );

    register_setting('web_settings_group', 'instagram');
    add_settings_field(
        'instagram',                // ID
        'Instagram',                // Title
        function() {                     // Callback to render input
            $value = esc_html(get_option('instagram', ''));
            echo '<input name="instagram" value="'.$value.'" style="width:100%" type="text"/>';
        },
        'web-settings',                  // Page slug
        'web_settings_section'           // Section ID
    );

    register_setting('web_settings_group', 'phone');
    add_settings_field(
        'phone',                // ID
        'Phone',                // Title
        function() {                     // Callback to render input
            $value = esc_html(get_option('phone', ''));
            echo '<input name="phone" value="'.$value.'" class="regular_text" type="text"/>';
        },
        'web-settings',                  // Page slug
        'web_settings_section'           // Section ID
    );

    register_setting('web_settings_group', 'email');
    add_settings_field(
        'email',                // ID
        'Email',                // Title
        function() {                     // Callback to render input
            $value = esc_html(get_option('email', ''));
            echo '<input name="email" value="'.$value.'" style="width:50%" type="text"/>';
        },
        'web-settings',                  // Page slug
        'web_settings_section'           // Section ID
    );

    register_setting('web_settings_group', 'smart');
    add_settings_field(
        'smart',                // ID
        'Smart No.',                // Title
        function() {                     // Callback to render input
            $value = esc_html(get_option('smart', ''));
            echo '<input name="smart" value="'.$value.'" style="width:50%" type="text"/>';
        },
        'web-settings',                  // Page slug
        'web_settings_section'           // Section ID
    );

    register_setting('web_settings_group', 'globe');
    add_settings_field(
        'globe',                // ID
        'Globe No.',                // Title
        function() {                     // Callback to render input
            $value = esc_html(get_option('globe', ''));
            echo '<input name="globe" value="'.$value.'" style="width:50%" type="text"/>';
        },
        'web-settings',                  // Page slug
        'web_settings_section'           // Section ID
    );

    register_setting('web_settings_group', 'whatsapp');
    add_settings_field(
        'whatsapp',                // ID
        'Whats App No.',                // Title
        function() {                     // Callback to render input
            $value = esc_html(get_option('whatsapp', ''));
            echo '<input name="whatsapp" value="'.$value.'" class="regular_text" type="text"/>';
        },
        'web-settings',                  // Page slug
        'web_settings_section'           // Section ID
    );

    register_setting('web_settings_group', 'viber');
    add_settings_field(
        'viber',                // ID
        'Viber No.',                // Title
        function() {                     // Callback to render input
            $value = esc_html(get_option('viber', ''));
            echo '<input name="viber" value="'.$value.'" style="width:50%" type="text"/>';
        },
        'web-settings',                  // Page slug
        'web_settings_section'           // Section ID
    );

    register_setting('web_settings_group', 'monday_friday');
    add_settings_field(
        'monday_friday',                // ID
        'Monday - Friday',                // Title
        function() {                     // Callback to render input
            $value = esc_html(get_option('monday_friday', ''));
            echo '<input name="monday_friday" value="'.$value.'" style="width:50%" type="text"/>';
        },
        'web-settings',                  // Page slug
        'web_settings_section'           // Section ID
    );

    register_setting('web_settings_group', 'saturday');
    add_settings_field(
        'saturday',                // ID
        'Saturday',                // Title
        function() {                     // Callback to render input
            $value = esc_html(get_option('saturday', ''));
            echo '<input name="saturday" value="'.$value.'" style="width:50%" type="text"/>';
        },
        'web-settings',                  // Page slug
        'web_settings_section'           // Section ID
    );
});

function render_web_settings_page() {
    ?>
    <div class="wrap">
        <h1>Web Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('web_settings_group');
            do_settings_sections('web-settings');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

 // ================= End Custom Web Settings Section =================

/**
 * Hero Section Meta Box for Pages
 */
function apdoson_add_hero_section_meta_box() {
    add_meta_box(
        'apdoson_hero_section',
        'Hero Section',
        'apdoson_render_hero_section_meta_box',
        'page',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'apdoson_add_hero_section_meta_box');

function apdoson_render_hero_section_meta_box($post) {
    // Add nonce for security
    wp_nonce_field('apdoson_save_hero_section', 'apdoson_hero_section_nonce');

    $hero_title = get_post_meta($post->ID, '_apdoson_hero_title', true);
    $hero_subdescription = get_post_meta($post->ID, '_apdoson_hero_subdescription', true);
    $hero_image = get_post_meta($post->ID, '_apdoson_hero_image', true);

    echo '<p><label for="apdoson_hero_title"><strong>Hero Title</strong></label></p>';
    echo '<input type="text" id="apdoson_hero_title" name="apdoson_hero_title" value="' . esc_attr($hero_title) . '" style="width:100%;" />';

    echo '<p><label for="apdoson_hero_subdescription"><strong>Hero Sub-description</strong></label></p>';
    echo '<textarea id="apdoson_hero_subdescription" name="apdoson_hero_subdescription" rows="4" style="width:100%;">' . esc_textarea($hero_subdescription) . '</textarea>';

    echo '<p><label><strong>Hero Image</strong></label></p>';
    echo '<div style="margin-bottom:10px;">';
    echo '<img id="apdoson-hero-image-preview" src="' . esc_url($hero_image) . '" style="max-width:100%; height:auto; display:' . ($hero_image ? 'block' : 'none') . ';" />';
    echo '</div>';
    echo '<input type="hidden" id="apdoson_hero_image" name="apdoson_hero_image" value="' . esc_attr($hero_image) . '" />';
    echo '<button type="button" class="button" id="apdoson-hero-image-upload">Select Image</button> ';
    echo '<button type="button" class="button" id="apdoson-hero-image-remove" style="display:' . ($hero_image ? 'inline-block' : 'none') . ';">Remove Image</button>';

    ?>
    <script>
    jQuery(document).ready(function($){
        var frame;
        $('#apdoson-hero-image-upload').on('click', function(e){
            e.preventDefault();
            if(frame){
                frame.open();
                return;
            }
            frame = wp.media({
                title: 'Select or Upload Hero Image',
                button: { text: 'Use this image' },
                multiple: false
            });
            frame.on('select', function(){
                var attachment = frame.state().get('selection').first().toJSON();
                $('#apdoson_hero_image').val(attachment.url);
                $('#apdoson-hero-image-preview').attr('src', attachment.url).show();
                $('#apdoson-hero-image-remove').show();
            });
            frame.open();
        });

        $('#apdoson-hero-image-remove').on('click', function(e){
            e.preventDefault();
            $('#apdoson_hero_image').val('');
            $('#apdoson-hero-image-preview').hide();
            $(this).hide();
        });
    });
    </script>
    <?php
}

function apdoson_save_hero_section_meta_box($post_id) {
    // Verify nonce
    if (!isset($_POST['apdoson_hero_section_nonce']) || !wp_verify_nonce($_POST['apdoson_hero_section_nonce'], 'apdoson_save_hero_section')) {
        return;
    }

    // Check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check permissions
    if (isset($_POST['post_type']) && 'page' === $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }
    } else {
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
    }

    // Save Hero Title
    if (isset($_POST['apdoson_hero_title'])) {
        update_post_meta($post_id, '_apdoson_hero_title', sanitize_text_field($_POST['apdoson_hero_title']));
    }

    // Save Hero Sub-description
    if (isset($_POST['apdoson_hero_subdescription'])) {
        update_post_meta($post_id, '_apdoson_hero_subdescription', sanitize_textarea_field($_POST['apdoson_hero_subdescription']));
    }

    // Save Hero Image
    if (isset($_POST['apdoson_hero_image'])) {
        update_post_meta($post_id, '_apdoson_hero_image', esc_url_raw($_POST['apdoson_hero_image']));
    }
}
add_action('save_post', 'apdoson_save_hero_section_meta_box');
