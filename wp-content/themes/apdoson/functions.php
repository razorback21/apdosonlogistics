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
        }
        
    }
}

ApdosonTheme::getInstance();

