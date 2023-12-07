<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 148;
$thumb_height = 63;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

    <?php
    for ($i=0; $i<$list_count; $i++) {
        
        $img_link_html = '';
        
        $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);

        if( $i === 0 ) {
            $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

            if($thumb['src']) {
                // $img = $thumb['src'];
                $img = $thumb['ori'];
            } else {
                $img = G5_IMG_URL.'/no_img.png';
                $thumb['alt'] = '이미지가 없습니다.';
            }
            // 이미지만 있음
            $img_content = '<img src="'.$img.'" alt="'.$list[$i]['subject'].'" >';
            // a 태그가 끼어진 이미지
            // $img_link_html = '<a href="'.$wr_href.'" class="lt_img" >'.run_replace('thumb_image_tag', $img_content, $thumb).'</a>';
            $img_link_html = '<a href="'.$list[$i]['wr_link1'].'" class="lt_img" >'.run_replace('thumb_image_tag', $img_content, $thumb).'</a>';
            // $img_link_html = '<a href="https://gnustudy.com/" class="lt_img" >'.run_replace('thumb_image_tag', $img_content, $thumb).'</a>';
        }
    ?>
            <!-- 이미지만 나오게하기 -->
            <!-- <?php echo $img_content; ?> -->
            <!-- 링크도 나오게 하기 -->
            <?php echo $img_link_html; ?>

            <span><?php echo $wr_link1; ?></span>
            

            <!-- <?php
            echo "<a href=\"".$wr_href."\" class=\"pic_li_tit\"> ";    
            echo "</a>";
            ?> -->

    <?php }  ?>


 