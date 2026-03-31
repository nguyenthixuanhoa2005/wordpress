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

        // Tổng số khóa học
        $total_courses = wp_count_posts('lp_course')->publish ?? 0;

        // Tổng số học viên (distinct user)
        $total_students = $wpdb->get_var("
            SELECT COUNT(DISTINCT user_id) 
            FROM {$wpdb->prefix}learnpress_user_items 
            WHERE item_type = 'lp_course'
        ");

        // Tổng lượt hoàn thành (fix đa version LearnPress)
        $completed_courses = $wpdb->get_var("
            SELECT COUNT(*) 
            FROM {$wpdb->prefix}learnpress_user_items 
            WHERE item_type = 'lp_course' 
            AND (
                status IN ('finished', 'completed') 
                OR graduation = 'passed'
            )
        ");

        return [
            'courses'   => (int) $total_courses,
            'students'  => (int) ($total_students ?? 0),
            'completed' => (int) ($completed_courses ?? 0),
        ];
    }
}