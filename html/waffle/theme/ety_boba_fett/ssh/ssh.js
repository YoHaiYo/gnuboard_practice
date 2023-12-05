// console.log("ssh")
/* $(document).ready(function(){
  $('body').addClass("ssh")

  $(window).on('scroll',function(){
    
    if($(window.scrollTop() > 0)) {
      $('body').addClass('blackmode')
    } else {
      $('body').removeClass('blackmode')
    }
  })
}) */

// 스크롤시 화면바꾸기
$(function() {
  var scrolltop = $(window).scrollTop(); // 화면 열렸을때 스크롤값  
  console.log(`화면이 열리자마자 스크롤 상단위치 알려줘 : ${scrolltop}`)

  $(window).scroll(function(){      
    scrolltop = $(window).scrollTop(); // 스크롤 도중의 스크롤값. 변수명을 같게해서 메모리 아끼기
    if(scrolltop > 0) {
      $('body').addClass("blackmode")
    } else {
      $('body').removeClass("blackmode")
    }
  })
})