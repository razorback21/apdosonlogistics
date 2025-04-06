<?php
class ApdosonHomepage {

    private static $instance = null;

    public function __construct() {
        add_action('save_post', [$this, 'apdoson_save_hero_section_meta_box']);
        add_action('add_meta_boxes', [$this,'apdoson_add_hero_section_meta_box']);
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function apdoson_add_hero_section_meta_box() {
        add_meta_box(
            'apdoson_hero_section',
            'Hero Section',
            [$this,'apdoson_render_hero_section_meta_box'],
            'page',
            'normal',
            'high'
        );
    }
    
    public function apdoson_render_hero_section_meta_box($post) {
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
    
    public function apdoson_save_hero_section_meta_box($post_id) {
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
    
}
