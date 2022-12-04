<?php

// 신규 포스트 메뉴 생성
function create_post_type() {
    
    $args = array(
        
            'labels' => array(
                    'name' => 'offices', // 관리자 메뉴 이름
                    'singular_name' => 'office' // 포스트 1개의 이름
            ),
            'hierarchical' => true, // 계층구조
            'public' => true, // url 보기
            'has_archive' => true, // 아카이브
            'menu_icon' => 'dashicons-admin-post', // 관리자 메뉴 아이콘
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'revisions'), // 제목, 내용만 보이게 (추가 가능)
            'taxonmomies' => true, // 카테고리, 태그 사용
            'publicly_queryable' => true,
            'query_var' => true,
            'taxonomies' => array('category', 'post_tag'),
            'menu_position' => 5,
            'exclude_form_seach' => false,
            'show_in_nav_menus' => true, // 메뉴 보이게
            'show_ui' => true, // wp 관리자 메뉴 보이게
        );

        register_post_type('offices', $args);
}
add_action('init', 'create_post_type');

?>