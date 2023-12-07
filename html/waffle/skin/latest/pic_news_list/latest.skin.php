<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// SLICK SLIDER
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/slick/slick.css">', 0);
add_javascript('<script src="'.$latest_skin_url.'/slick/slick.min.js"></script>', 0);

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);

$thumb_width = 500;
$thumb_height = 350;
$list_count = (is_array($list) && $list) ? count($list) : 0;

$bg_red = array("bg-red", "bg-darkred", "bg-green", "bg-blue", "bg-violet", "bg-yellow", "bg-navy");
?>

<div class="pic-news">
	<div class="pic-news-row">
		<div class="pic-news-list">
			<div class="featured-slider">
				<div class="featured-slider-items">

					<?php

					for ($i=0; $i<$list_count; $i++) {
					$thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

					if($thumb['src']) {
						$img = $thumb['src'];
					} else {
						$img = G5_IMG_URL.'/no_img.png';
						$thumb['alt'] = '이미지가 없습니다.';
					}
					$img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
					$wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);

					$list[$i]['subject'] = ($list[$i]['is_notice'])?'<strong>'.$list[$i]['subject'].'</strong>':$list[$i]['subject'];

					$secret = '';
					if ($list[$i]['icon_secret']) $secret .= "<i class=\"fa fa-lock\" aria-hidden=\"true\"></i><span class=\"sound_only\">비밀글</span> ";

					$icon = '';
					if ($list[$i]['icon_new']) $icon .= "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";
					if ($list[$i]['icon_hot']) $icon .= "<span class=\"hot_icon\">H<span class=\"sound_only\">인기글</span></span>";

					?>
					<div class="slider-single">
                        <div class="pic-news-row">
                            <div class="pic-news-tow align-center-vertical">
                                <div class="slider-caption">
									<div class="entry-meta meta-0 mb-25">
										<a href="<?php echo $wr_href;?>"><span class="post-in <?php echo $bg_red[rand(0, 6)];?> color-white font-12"><?php echo ($list[$i]['ca_name'])?$list[$i]['ca_name']:'CATEGORY';?></span></a>
									</div>
									<h2 class="post-title font-16"><?php echo $secret;?><a href="<?php echo $wr_href;?>"><?php echo $list[$i]['subject'];?></a> <?php echo $icon;?></h2>
									<div class="entry-meta meta-1 font-13 color-grey mt-15 mb-15">
										<span class="comm-count"><i class="fa fa-commenting-o"></i><?php echo $list[$i]['wr_comment'];?></span>
										<span class="hit-count"><i class="fa fa-eye"></i><?php echo $list[$i]['wr_hit'];?>회</span>
										<span class="time-reading"><i class="fa fa-clock-o"></i><?php echo $list[$i]['datetime'] ?></span>
									</div>
									<p class="excerpt font-14 mt-15 mb-20"><?php echo cut_str(strip_tags($list[$i]['wr_content']), 120);?></p>
									<div class="entry-meta meta-2">
										<a class="author-img" href="<?php echo $wr_href;?>"><?php echo get_member_profile_img($list[$i]['mb_id']); ?></a>
										<a href="<?php echo $wr_href;?>"><span class="author-name"><?php echo $list[$i]['name'] ?></span></a>
										<div class="author-add color-grey"><?php echo $list[$i]['mb_id'];?></div>
									</div>
                                </div>
                            </div>
                            <div class="slider-img pic-news-tow">
                                <div class="img-hover-scale">
									<span class="top-right-icon <?php echo $bg_red[rand(0, 6)];?>"><i class="fa fa-heart"></i></span>
									<a href="<?php echo $wr_href;?>">
										<?php echo run_replace('thumb_image_tag', $img_content, $thumb); ?>
									</a>
                                </div>
                            </div>
                        </div>
					</div>
					<?php } ?>
					<?php if ($list_count == 0) { //게시물이 없을 때  ?>
					<div class="slider-single" style="line-height:145px;color:#666;text-align:center;padding:0">
                        게시물이 없습니다.
					</div>
					<?php } ?>
				</div>
				<div class="pic-news-row">
					<div class="pic-news-tow">
						<div class="arrow-cover"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
    // Slick slider
    var customSlickSlider = function () {
        // Featured slider 1
        $('.featured-slider-items').slick({
            dots: false,
            infinite: true,
            speed: 500,
            arrows: true,
            slidesToShow: 1,
            autoplay: true,
            loop: true,
            adaptiveHeight: true,
            fade: true,
            cssEase: 'linear',
            prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-arrow-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fa fa-arrow-right"></i></button>',
            appendArrows: '.arrow-cover',
        });
    };

    //Load functions
    $(document).ready(function () {
        customSlickSlider();
    });
</script>