<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
$imgwidth = "279"; //표시할 이미지의 가로사이즈
$imgheight = "355"; //표시할 이미지의 세로사이즈

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨

add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/assets/owl.theme.default.min.css">',0);
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 1);

?>
<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->
<div class="lt"> 
    <strong class="lt_title"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>"><?php echo $bo_subject; ?></a></strong>
    <div class="owl-carousel owl-theme latest-carousel">
        <?php for ($i=0; $i<count($list); $i++) {  ?>
        <div class="a-item" class="aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
            <?php
			$thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $imgwidth, $imgheight, false, true);
			$img_content = 'NO IMAGE';
			if($thumb['src']) {
           		$img_content = '<img src="'.$thumb['src'].'" alt="'.$list[$i]['subject'].'">';
        	}
			echo '<div class="img-box">';
         	echo $img_content;		
			echo '</div>';
			?>
            
            
            <div class="txt_box clearfix" style="padding:30px">
			<a href="<?=$list[$i]['href']?>" class="info">
            <div class="subject">
			<?php //제목
			if ($list[$i]['is_notice'])
                echo "<strong>".$list[$i]['subject']."</strong>";
            else
                echo $list[$i]['subject'];
			?>
            <?php //댓글수
            if ($list[$i]['comment_cnt'])
                echo $list[$i]['comment_cnt'];
			?>
            </div>
            
            
            <div class="substance">	
			<?php //내용	
			if(!$options['content_length']) $options['content_length'];
			echo cut_str(strip_tags($list[$i]['wr_content']),$options['content_length']);
			?>
            </div>
            
  
            </a>
            
            <input type="button" class="more" value="자세히 보기" onClick="location.href='<?php echo $list[$i]['href'] ?>'">
			</div>
            <?php
            // echo $list[$i]['icon_reply']." ";
            // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
            // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

            //if (isset($list[$i]['icon_new'])) echo " " . $list[$i]['icon_new'];
            //if (isset($list[$i]['icon_hot'])) echo " " . $list[$i]['icon_hot'];
            //if (isset($list[$i]['icon_file'])) echo " " . $list[$i]['icon_file'];
            //if (isset($list[$i]['icon_link'])) echo " " . $list[$i]['icon_link'];
            //if (isset($list[$i]['icon_secret'])) echo " " . $list[$i]['icon_secret'];
             ?>
        </div>
        <?php }  ?>
        <?php if (count($list) == 0) { //게시물이 없을 때  ?>
        <div>게시물이 없습니다.</div>
        <?php }  ?>
    </div>
    <div class="lt_more"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>"><span class="sound_only"><?php echo $bo_subject ?></span>더보기</a></div>
</div>
<script>
$('.latest-carousel').owlCarousel({
    loop:true,
    margin:28,
    nav:true,
	dots:true,
	navSpeed:700,
	navText:['<i class="xi-angle-left"></i> ', '<i class="xi-angle-right"></i> '],
    responsive:{
        0:{
            items:1
        },
        640:{
            items:2
        },
        1000:{
            items:4
        },
		1200:{
            items:4
        }
    }
})
</script>
<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->