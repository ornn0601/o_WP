<?php

// 신규 관리자 메뉴 만들기
// add_menu_page()
function custom_admin_menu() {
        add_menu_page(
                '매물리스트',
                '매물리스트',
                'manage_options',
                'horuru-dashboard',
                '',
                'dashicons-admin-generic',
                5,
        );
}
add_action( 'admin_menu', 'custom_admin_menu' );


?>