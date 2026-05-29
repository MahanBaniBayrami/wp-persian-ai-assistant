<?php

if (!defined('ABSPATH')) {
    exit;
}

function persian_ai_admin_page_content() {
    ?>
    <div class="wrap">
        <h1>WP Persian AI Assistant</h1>

        <p>
            AI-powered Persian content tools for WordPress.
        </p>

        <textarea
            style="width:100%;height:220px;"
            placeholder="Write Persian content here..."
        ></textarea>

        <br><br>

        <button class="button button-primary">
            Generate SEO Meta
        </button>
    </div>
    <?php
}
