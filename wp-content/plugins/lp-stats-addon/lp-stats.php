<?php
/**
 * Plugin Name: LearnPress Stats Addon
 * Description: Hiển thị thống kê tổng quan LearnPress (Dashboard & Shortcode) - tối giản, sang trọng.
 * Version: 1.1.0
 * Author: [Tên của bạn]
 * License: GPL2
 */

if (!defined('ABSPATH')) {
    exit;
}

// Load class xử lý thống kê
require_once plugin_dir_path(__FILE__) . 'includes/class-lp-stats-data.php';

// Nạp CSS cho cả admin & frontend
add_action('admin_enqueue_scripts', 'lp_stats_enqueue_assets');
add_action('wp_enqueue_scripts', 'lp_stats_enqueue_assets');
function lp_stats_enqueue_assets() {
    $url = plugin_dir_url(__FILE__) . 'assets/lp-stats.css';
    wp_enqueue_style('lp-stats-css', $url, [], '1.0.0');
}

// Hiển thị widget Dashboard
add_action('wp_dashboard_setup', function() {
    wp_add_dashboard_widget('lpsd_stats_widget', 'LearnPress Quick Stats', 'lp_stats_dashboard_widget_render');
});

function lp_stats_dashboard_widget_render() {
    $stats = LP_Stats_Data::get_stats();
    echo '<div class="lp-stats-container">';
    echo '<div class="lp-stats-title">Thống kê đào tạo</div>';
    echo '<ul class="lp-stats-list">';
    echo '<li class="lp-stats-item"><span class="lp-stats-label">Khóa học</span><span class="lp-stats-value">' . esc_html($stats['courses']) . '</span></li>';
    echo '<li class="lp-stats-item"><span class="lp-stats-label">Học viên</span><span class="lp-stats-value">' . esc_html($stats['students']) . '</span></li>';
    echo '<li class="lp-stats-item"><span class="lp-stats-label">Hoàn thành</span><span class="lp-stats-value">' . esc_html($stats['completed']) . '</span></li>';
    echo '</ul>';
    echo '</div>';
}

// Shortcode [lp_total_stats]
add_shortcode('lp_total_stats', function() {
    $stats = LP_Stats_Data::get_stats();
    ob_start();
    ?>
    <div class="lp-stats-container">
        <div class="lp-stats-title">Thống kê đào tạo</div>
        <ul class="lp-stats-list">
            <li class="lp-stats-item"><span class="lp-stats-label">Khóa học</span><span class="lp-stats-value"><?php echo esc_html($stats['courses']); ?></span></li>
            <li class="lp-stats-item"><span class="lp-stats-label">Học viên</span><span class="lp-stats-value"><?php echo esc_html($stats['students']); ?></span></li>
            <li class="lp-stats-item"><span class="lp-stats-label">Hoàn thành</span><span class="lp-stats-value"><?php echo esc_html($stats['completed']); ?></span></li>
        </ul>
    </div>
    <?php
    return ob_get_clean();
});