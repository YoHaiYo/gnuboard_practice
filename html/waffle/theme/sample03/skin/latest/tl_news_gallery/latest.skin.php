<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);


$thumb_width = is_numeric($options['thumb_width']) ? $options['thumb_width'] : 200;
$thumb_height = 0;
$title =  $options['title'] ? $options['title'] : $bo_subject;
$content_len = is_numeric($options['content_len']) ? $options['content_len'] : 100; 
?>

<div class="inner clearfix">
  <h2 class="lat_title">
    <?php echo $title ?>
    <span><?php echo $options['sub_title'] ?></span>
  </h2>
  <ul>
  <?php
  for ($i=0; $i<count($list); $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);
    if($thumb['src']) {
      $img = $thumb['src'];
    } else {
      $img = $latest_skin_url.'/no_img.png';
    }
    //$img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'">';
    $bg_style = "background-image:url(".$img.");";
    ?>
    <li class="aos-init aos-animate" data-aos="fade-left" data-aos-delay="400">
      <a href="<?php echo $list[$i]['href'] ?>" class="one_box">
        <div style="overflow:hidden; width:100%">
        <div class="photo" title="<?php echo get_text($thumb['alt']); ?>" style="<?php echo $bg_style ?>"></div>
        </div>
        <dl>
          <dt>
            <?php 
            if ($list[$i]['is_notice'])
              echo "<strong>".$list[$i]['subject']."</strong>";
            else
              echo $list[$i]['subject']; ?>
          </dt>
          <dd> <?php 
          echo get_text(cut_str(strip_tags(str_replace('&nbsp;', ' ', $list[$i]['wr_content'])), $content_len,'…')); 
          ?></dd>
        </dl>
      </a>
    </li>
    <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
  </ul>
</div>