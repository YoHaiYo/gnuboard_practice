<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');


$thumb_width = 210;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;

?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<div class="swiper <?php echo $bo_table; ?> " >
   
    <div class="swiper-wrapper">
        <!-- for 구문 안쪽에 swiper-slide 나오게. -->
    <?php
    for ($i=0; $i<$list_count; $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['ori'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" class="img-fluid" alt="'.$thumb['alt'].'" >';
    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    ?>
        <div  class="swiper-slide">
          
            <?php
           

            echo "<a href=\"".$wr_href."\"> ";          
            echo  $img_content; 
            echo "</a>";

            ?>
            <div>
                 <?php echo $list[$i]['wr_datetime'] ?><br> 
                 <?php echo $list[$i]['wr_id'] ?><br> 
                 <?php echo $list[$i]['wr_subject'] ?><br>
                 <?php echo $list[$i]['wr_comment'] ?><br>  
                 <?php echo $list[$i]['wr_1'] ?><br> 
                 <?php echo $thumb['ori'] ?><br>    
                 <?php echo $thumb['src'] ?><br>  
                 <?php echo $list[$i]['wr_link1'] ?><br>     
                 <?php echo $list[$i]['wr_link2'] ?><br>                     
                 <?php echo $list[$i]['wr_name'] ?><br>                     
                 <?php echo $list[$i]['wr_hit'] ?><br>                     
            </div>

           
        </div>
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    게시물이 없습니다.
    <?php }  ?>
    </div>
     <div class="swiper-pagination"></div>
     <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
    
</div>
<script>
const swiper = new Swiper('.swiper.<?php echo $bo_table; ?>', {
  loop: true, 
  pagination: {
    el: '.swiper.<?php echo $bo_table; ?> .swiper-pagination',
  }, 
  navigation: {
    nextEl: '.swiper.<?php echo $bo_table; ?> .swiper-button-next',
    prevEl: '.swiper.<?php echo $bo_table; ?> .swiper-button-prev',
  }
});
</script>
