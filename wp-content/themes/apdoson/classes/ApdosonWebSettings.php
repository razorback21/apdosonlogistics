<?php
class ApdosonWebSettings {

    private static $instance = null;

    public function __construct() {
        add_action('admin_init', [$this, 'apdoson_web_settings_fields']);
        add_action('admin_menu', function() {
            add_options_page(
                'Web Settings',          // Page title
                'Web Settings',          // Menu title
                'manage_options',        // Capability
                'web-settings',          // Menu slug
                [$this,'render_web_settings_page'] // Function to display page content
            );
        });
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function render_web_settings_page() {
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

    public function apdoson_web_settings_fields() {
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
 
    }

    
} 