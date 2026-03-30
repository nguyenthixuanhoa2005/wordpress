<?php
add_shortcode('danh_sach_sinh_vien', 'sm_display_student_list');

function sm_display_student_list() {
    $args = [
        'post_type'      => 'sinh_vien',
        'posts_per_page' => -1,
        'status'         => 'publish'
    ];
    $query = new WP_Query($args);

    if (!$query->have_posts()) return "Chưa có sinh viên nào trong danh sách.";

    $output = '<table class="sm-table" style="width:100%; border-collapse: collapse; margin-top: 20px;">
                <thead>
                    <tr style="background-color: #f2f2f2;">
                        <th style="border: 1px solid #ddd; padding: 8px;">STT</th>
                        <th style="border: 1px solid #ddd; padding: 8px;">MSSV</th>
                        <th style="border: 1px solid #ddd; padding: 8px;">Họ tên</th>
                        <th style="border: 1px solid #ddd; padding: 8px;">Lớp</th>
                        <th style="border: 1px solid #ddd; padding: 8px;">Ngày sinh</th>
                    </tr>
                </thead>
                <tbody>';
    
    $stt = 1;
    while ($query->have_posts()) {
        $query->the_post();
        $id = get_the_ID();
        
        // Lấy dữ liệu từ Meta Box
        $mssv = get_post_meta($id, '_sm_mssv', true);
        $lop = get_post_meta($id, '_sm_lop', true);
        $ngay_sinh = get_post_meta($id, '_sm_ngay_sinh', true);

        $output .= '<tr>
            <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">' . $stt++ . '</td>
            <td style="border: 1px solid #ddd; padding: 8px;">' . esc_html($mssv) . '</td>
            <td style="border: 1px solid #ddd; padding: 8px;">' . get_the_title() . '</td>
            <td style="border: 1px solid #ddd; padding: 8px;">' . esc_html($lop) . '</td>
            <td style="border: 1px solid #ddd; padding: 8px;">' . esc_html($ngay_sinh) . '</td>
        </tr>';
    }
    
    $output .= '</tbody></table>';
    wp_reset_postdata();
    
    return $output;
}