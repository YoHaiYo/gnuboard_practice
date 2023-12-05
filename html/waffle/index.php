<?php
include_once('./_common.php'); // 모든 변수상수함수가 선언된 파일.

define('_INDEX_', true); // 첫페이지만 구분하는 상수변수 선언
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>
<!-- 컨텐츠 관리자가 관리하기 -->
<?php echo latest('pic_block', 'adm_main_banner', 3, 100) ?>


<h2 class="sound_only">최신글</h2>
<ul> 
    <li>
        <?php echo latest("basic", "free", 5, 100); ?>
    </li>
    <li>
        <?php echo latest("pic_block", "qa", 5, 100); ?>
    </li>
    <li>
        <?php echo latest("pic_block", "gallery", 5, 100); ?>
    </li>
</ul>

<?php
include_once(G5_PATH.'/tail.php');