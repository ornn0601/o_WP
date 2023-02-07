# wordpress
  
## 특정 페이지에 css js 파일 넣기
```php
function customName() {
  if (is_page('15678') ) {
    wp_enqueue_style( 'css-id-name', '파일 경로.css', array(), '1.1', 'all');

    wp_register_script( 'js-id-name', '파일 경로.js', array( 'jquery' ), '1.1', true );
    wp_enqueue_script( 'js-id-name' );
  }
}
add_action('wp_enqueue_scripts', 'customName');
```  
  
## 특정 페이지에 css js 파일 넣기
```php
function page_style_multiple() {
  if (is_page( array( '1370', '1371', '1372' )) ) {
    wp_enqueue_style( 'custom-page', '/o_code/css/o_custom.css' );
  }
}
add_action('wp_enqueue_scripts', 'page_style_multiple()');
```   
  
## function 도메인 변경  
```php
update_option('siteurl','https://abc.com');
update_option('home','https://abc.com');
```

## 관리자 로그인 페이지 로고 변경하기
- function.php
```php
function my_login_logo_one() {
        ?>
        <style type="text/css">
                #login {
                        padding: 10% 0 0 !important;
                }
                body.login #login h1 a {
                        background-image: url('media url');
                        background-size: 200px;
                        width: 200px;
                        padding-bottom: 10%;
                }
        </style>
        <?php
} add_action('login_enqueue_scripts', 'my_login_logo_one');

```