<?php
/**
 * Plugin Name: WP Persian AI Assistant
 * Plugin URI: https://github.com/YOUR_USERNAME/wp-persian-ai-assistant
 * Description: AI-powered Persian writing assistant for WordPress.
 * Version: 0.1.0
 * Author: YOUR NAME
 * License: MIT
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('admin_menu', function () {
    add_menu_page(
        'Persian AI Assistant',
        'Persian AI',
        'manage_options',
        'persian-ai-assistant',
        'persian_ai_admin_page'
    );
});

function persian_ai_admin_page() {
    ?>
    <div class="wrap">
        <h1>WP Persian AI Assistant</h1>
        <p>AI tools for Persian WordPress creators.</p>

        <textarea style="width:100%;height:200px;"></textarea>

        <br><br>

        <button class="button button-primary">
            Generate SEO Meta
        </button>
    </div>
    <?php
}
