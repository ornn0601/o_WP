<?php
// Meta Post Name
function post_add_name_box() {
    $screens = [ 'page' ];
    foreach ( $screens as $screen ) {
        add_meta_box(
            'page_name',                 // Unique ID
            '페이지 이름',                  // Box title
            'page_name_html',            // Content callback, must be of type callable
            $screen,                     // Post type
            'side',
            'high',
            array(
                '__block_editor_compatible_meta_box' => true,
            )
        );
    }
}
add_action( 'add_meta_boxes', 'post_add_name_box' );

// 관리자 페이지 구현
function page_name_html( $post ) {
    $value = get_post_meta( $post->ID, 'page_name', true );
    ?>
    <label for="page_name">페이지 이름
        <input type="text" name="page_name" class="postbox" placeholder="페이지 이름" value="<?php echo $value?>"></label>
    <?php
}

// 저장
function wporg_save_postdata( $post_id ) {
    $post = get_post($post_id);
    if($post -> post_type == 'page'){
        update_post_meta( $post_id, 'page_name', $_POST['page_name'] );
    }
}
add_action( 'save_post', 'wporg_save_postdata' );