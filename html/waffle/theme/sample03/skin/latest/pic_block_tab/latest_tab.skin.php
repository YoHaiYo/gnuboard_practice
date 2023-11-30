<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH . '/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="' . $latest_skin_url . '/style.css">', 0);
$thumb_width = 410;
$thumb_height = 300;

?>
<script>
$(function() {
  var bo_table = '<?php echo $bo_table; ?>'; // 같은페이지에 중복으로 사용시 에러 회피
  var $tab_btns = $('.' + bo_table + '.tl_latest_tab a');
  var $tab_show_box = $('.' + bo_table + '.pic_tab_lt');
  $tab_btns.click(function (e) { 
    e.preventDefault();
    var $a = $(this);
    var idx = $(this).data('idx');
    $tab_btns.removeClass('on');
    $a.addClass('on');
    $tab_show_box.hide();
    $tab_show_box.each(function (index, element) {
      // element == this
      var $el = $(element);
      if($el.data('idx') == idx) {
        $el.show(0,function() {$el.addClass('on');});
      } else {
        $el.hide(0,function() {$el.removeClass('on');});
      }
    });
  });
});
</script>

<!--<h2 class="lat_title"><a href="<?php echo get_pretty_url($bo_table); ?>"><?php echo $bo_subject ?></a></h2>-->
<nav class="<?php echo $bo_table; ?> tl_latest_tab ts<?php echo count($bo_categories); ?>" class="aos-init aos-animate" data-aos="fade-right" data-aos-delay="400">
  <ul>
    <?php foreach($bo_categories as $ck => $cv) { ?>
    <li><a href="#" class="<?php echo ($ck == 0 ? ' on':'')?>" data-idx="<?php echo $ck ?>"><?php echo get_text($cv);?></a></li>
    <?php } ?>
  </ul>
</nav>
<?php
foreach ($bo_categories as $ck => $cv) {
  $list_count = (is_array($list[$ck]) && $list[$ck]) ? count($list[$ck]) : 0;
?>

  <div class="<?php echo $bo_table; ?> pic_tab_lt<?php echo ($ck == 0 ? ' on':'')?>" data-idx="<?php echo $ck; ?>">
    
    <ul>
      <?php
      for ($i = 0; $i < $list_count; $i++) {
        $thumb = get_list_thumbnail($bo_table, $list[$ck][$i]['wr_id'], $thumb_width, $thumb_height, false, true);

        if ($thumb['src']) {
          $img = $thumb['src'];
        } else {
          $img = G5_IMG_URL . '/no_img.png';
          $thumb['alt'] = '이미지가 없습니다.';
        }
        $img_content = '<img src="' . $img . '" alt="' . $thumb['alt'] . '" >';
      ?>
        <li class="galley_li aos-init aos-animate" data-aos="fade-right" data-aos-delay="600">

          <a href="<?php echo $list[$ck][$i]['href'].'?sca='.urlencode($cv); ?>" class="lt_img"><?php echo $img_content; ?></a>
          <?php
          if ($list[$ck][$i]['icon_secret']) echo "<i class=\"fa fa-lock\" aria-hidden=\"true\"></i><span class=\"sound_only\">비밀글</span> ";

          echo "<a href=\"" . $list[$ck][$i]['href'].'?sca='.urlencode($cv) . "\"> ";
          if ($list[$ck][$i]['is_notice'])
            echo "<strong>" . $list[$ck][$i]['subject'] . "</strong>";
          else
            echo $list[$ck][$i]['subject'];
          echo "</a>";

          if ($list[$ck][$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";
          if ($list[$ck][$i]['icon_hot']) echo "<span class=\"hot_icon\">H<span class=\"sound_only\">인기글</span></span>";

          // if ($list[$ck][$i]['link']['count']) { echo "[{$list[$ck][$i]['link']['count']}]"; }
          // if ($list[$ck][$i]['file']['count']) { echo "<{$list[$ck][$i]['file']['count']}>"; }

          // echo $list[$ck][$i]['icon_reply']." ";
          // if ($list[$ck][$i]['icon_file']) echo " <i class=\"fa fa-download\" aria-hidden=\"true\"></i>" ;
          // if ($list[$ck][$i]['icon_link']) echo " <i class=\"fa fa-link\" aria-hidden=\"true\"></i>" ;

          if ($list[$ck][$i]['comment_cnt'])  echo "
            <span class=\"lt_cmt\">" . $list[$ck][$i]['wr_comment'] . "</span>";

          ?>
          <div class="lt_content"><?php echo get_text(cut_str(str_replace(array('&nbsp;'),array(' '),strip_tags($list[$ck][$i]['wr_content'])), 60)); ?></div>
          <div class="lt_info">
            <span class="lt_nick"><?php echo $list[$ck][$i]['name'] ?></span>
            <span class="lt_date"><?php echo $list[$ck][$i]['datetime2'] ?></span>
          </div>
        </li>
      <?php }  ?>
      <?php if ($list_count == 0) { //게시물이 없을 때  
      ?>
        <li class="empty_li">게시물이 없습니다.</li>
      <?php }  ?>
    </ul>
    <a href="<?php echo get_pretty_url($bo_table); ?>?sca=<?php echo urlencode($cv); ?>" class="lt_more"><span class="sound_only"><?php echo $bo_subject ?></span>더보기</a>

  </div>
<?php
}
?>