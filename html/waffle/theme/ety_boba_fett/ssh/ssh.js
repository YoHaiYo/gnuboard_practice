
// 스크롤시 화면바꾸기
$(function() {  
  // 스크롤이 몇 됬을때 적용될지 결정하는 변수
  var scrollunit = 10;

  $(window).on('scroll',function(){  
    scrolltop = $(window).scrollTop(); // 스크롤 도중의 스크롤값. 변수명을 같게해서 메모리 아끼기
    console.log(`현재스크롤 위치 : ${scrolltop}`)
    
    if(scrolltop > scrollunit) {
      // $(".navbar-brand img").attr("src", "http://www.jawsfood.co.kr/images/common/logo2.png")
      $('body').addClass("ssh--scroll")
    } else {
      // $(".navbar-brand img").attr("src", "http://www.jawsfood.co.kr/images/common/logo1.png")
      $('body').removeClass("ssh--scroll")
    }

  }) 

  /* $('#ssh--gnb').hover(
    function() {
      $('body').addClass("ssh--scroll");
    },
    function() {
      $('body').removeClass("ssh--scroll");
    })   */

  $('#ssh--gnb')
  .on('mouseenter', function () {
    $('body').addClass("ssh--scroll");
    // $('.megamenu-li').addClass("show");
  })
  .on('mouseleave', function () {
    // $('.megamenu-li').removeClass("show");
    if (scrolltop <= scrollunit) {
        $("body").removeClass("ssh--scroll");
    }
  })
})
