<?php
require_once 'classes/ApdosonHomepage.php';
require_once 'classes/ApdosonWebSettings.php';

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
        
        // Add theme support for title tag
        add_action('after_setup_theme', function() {
            add_theme_support('title-tag');
        });
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
ApdosonHomepage::getInstance();
ApdosonWebSettings::getInstance();

