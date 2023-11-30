<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>



    </div>
  </div>
</section>


<!-- } 하단 시작 -->
   <div id="footer">
    <div class="footer_in"> 
     <span class="menu"> 
     <a href="<?=G5_THEME_URL?>/html/ceo_message.php">회사소개</a> 
     <a href="/bbs/content.php?co_id=privacy"><strong>개인정보처리방침</strong></a>  
     <a href="<?=G5_THEME_URL?>/html/location.php">오시는 길</a> </span>
        
        <address>
        <span class="adr"><strong>주소</strong> : 부산광역시 수영구 광안동 145-28</span> 
        <span class="adr"><strong>사무실 대표전화</strong> : 051) 123-4567, <strong>팩스</strong> : 051) 123-4568</span>
        <span class="copyright">COPYRIGHT © 2018 tlog High School Alumni Association  CO., LTD. ALL RIGHTS RESERVED. Creative by <a href="http://tlog.kr" target="_blank"><span style="color:#0CF">TLOG</span></a></span> 
        </address>
   </div>
   
   
   
   
    <button type="button" id="top_btn"><i class="material-icons">arrow_upward</i><span class="sound_only">상단으로</span></button>
    <script>
	$(function() {
		$("#top_btn").on("click", function() {
			$("html, body").animate({scrollTop:0}, '500');
			return false;
		});
	});
	</script> 
</div>
<!-- } 하단 끝 -->



<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { 
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>
<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("wrap", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>
<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>
