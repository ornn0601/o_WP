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

## contact form 7 ip 가져오기
```php
// ip 주소 가져오기
add_filter('wpcf7_form_hidden_fields','add_hidden_ip_field');
function add_hidden_ip_field($fields) {
  $fields['_wpcf7_ip'] = get_ip_address(); //get the remote IP
  return $fields;
}

function get_ip_address() {
	foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
		if (array_key_exists($key, $_SERVER) === true){
			foreach (explode(',', $_SERVER[$key]) as $ip){
				$ip = trim($ip); // just to be safe
				
				if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
					return $ip;
				}
			}
		}
	}
}
```
```js
// ip 주소 매핑하기
	function remoteIP() {
		let wpcf7_ip = $('input[name=_wpcf7_ip]').val();
		let remote_ip = $('input[name=remote_ip]');
		remote_ip.val(wpcf7_ip);
	}
```