# functions 명령어

## 1. 이미지 최대크기 자동조절 삭제  
- 워드프레스에서 이미지 최대크기를 자동 조절하는 기능을 off한다.   

```php
add_filter( 'big_image_size_threshold', '__return_false' );
```  

## 2. 404 - home으로 연결 코드  
- 404 페이지 접속 시 자동으로 페이지를 이동시킨다.  

```php
if( !function_exists('redirect_404_to_homepage') ){

  add_action( 'template_redirect', 'redirect_404_to_homepage' );

  function redirect_404_to_homepage(){
     if(is_404()):
          wp_safe_redirect( home_url('/') );
          exit;
      endif;
  }
}
```  
