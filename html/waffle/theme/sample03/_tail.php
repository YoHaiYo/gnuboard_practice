<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if($bo_table) {
	include G5_THEME_PATH.'/html/bbs_tail.php';
}
?>

<script>
$(function() {	
	$('#mail_popup').bind('click', function(e) {
		e.preventDefault();
		// Triggering bPopup when click event is fired
		$('#mail_bpopup_form').bPopup();
		//alert('준비중비니다.');
	});
});

$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>
<?php
include_once(G5_THEME_PATH.'/html/tl_pop_mail.php');
include_once(G5_THEME_PATH.'/html/tl_pop_movie.php');
?>


</div> 
<!--wrap-->


             <footer>
                <div class="inner">
                    
                    <div class="footer_menu">
                        <div class="menu">
                            <a href="<?=G5_THEME_URL?>/html/company_info.php" title="회사소개">회사소개</a>
                            <a href="/bbs/content.php?co_id=privacy" title="개인정보처리방침"><strong>개인정보처리방침</strong></a>
                            <a id="mail_popup" href="#" title="이메일무단수집거부">이메일무단수집거부</a>
                        </div>
                    </div>
                    
                    <div class="footer_address">
                        <div class="add">
                            티로그<span class="bar">|</span>부산 수영구 광안동 145-28 창성빌딩4층<span class="bar">|</span>대표이사 : 홍길동<br>
                            사업자등록번호 : 617-86-10993<span class="bar">|</span>통신판매신고번호 : 제 2013-부산수영-0167 호<span class="bar">|</span>팩스 : 051) 325-5665<br>
                            <p class="copyright">COPYRIGHT © 2020 sample14 CO., LTD. ALL RIGHTS RESERVED. Creative by <span style="color:#09F">TLOG</span></p>
                        </div>
                    </div>

                    <div class="footer_right">
                        <div class="footer_sns">
                            <div class="icon_sns">
                                <a class="margin-right-20" target="_blank" href="https://open.kakao.com/o/sp0XD2O"><i class="xi-kakaotalk xi-2x"></i></a>
                                <a class="margin-right-20" target="_blank" href="https://www.twitter.com"><i class="xi-twitter xi-2x"></i></a>
                                <a class="margin-right-20" target="_blank" href="https://www.facebook.com"><i class="xi-facebook xi-2x"></i></a>
                                <a class="margin-right-20" target="_blank" href="https://www.instargram.com"><i class="xi-instagram xi-2x"></i></a>
                            </div>
                            
                           
                            
                            <div class="telephone">
                                <div class="con">
                                    <p>티로그 대표전화</p>
                                    <p class="tel"><span style="font-weight:100">051)</span> 325.6700</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
   
   
   
   
    <button type="button" id="top_btn"><i class="material-icons">arrow_upward</i><span class="sound_only">상단으로</span></button>
    <script>
	$(function() {
		$("#top_btn").on("click", function() {
			$("html, body").animate({scrollTop:0}, '500');
			return false;
		});
	});
	</script> 


<?php
include_once(G5_THEME_PATH."/tail.sub.php");

?>