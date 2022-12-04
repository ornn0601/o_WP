jQuery(document).ready(function() {

  // 블로그 제목 배경 이미지 넣기
  let backgroundItem = [ 
    $('#post-776'),
    $('#post-767'),
  ];
  const background1 = "url('/wp-content/uploads/o_blog_bg-1.png')";

  let target;

  $.each( backgroundItem, function() {
    target = $(this).find('.entry-title a');
    target.css("background-image", background1);
  });

});