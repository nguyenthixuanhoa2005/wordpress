<?php
/**
 * Xử lý truy vấn dữ liệu thống kê từ LearnPress
 */
if (!defined('ABSPATH')) {
    exit;
}

class LP_Stats_Data {
    public static function get_stats() {
        global $wpdb;
        $total_courses = wp_count_posts('lp_course')->publish;
        $total_students = $wpdb->get_var("
            SELECT COUNT(DISTINCT user_id)
            FROM {$wpdb->prefix}learnpress_user_items
            WHERE item_type = 'lp_course'
        ");
        $completed_courses = $wpdb->get_var("
            SELECT COUNT(*)
            FROM {$wpdb->prefix}learnpress_user_items
            WHERE item_type = 'lp_course' AND status = 'completed'
        ");
        return [
            'courses'   => $total_courses ? $total_courses : 0,
            'students'  => $total_students ? $total_students : 0,
            'completed' => $completed_courses ? $completed_courses : 0,
        ];
    }
}
