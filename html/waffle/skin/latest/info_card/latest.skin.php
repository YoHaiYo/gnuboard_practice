<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="lat">
    <h2 class="text-center mb-5">
        <!-- <a href="<?php echo get_pretty_url($bo_table); ?>"> -->
        <?php echo $bo_subject ?>
        <!-- </a> -->
    </h2>
    <ul class="row d-flex justify-content-center ">
    <?php for ($i=0; $i<$list_count; $i++) {  ?>

        <li class="col-3 border p-5 <?php echo $list[$i]['subject'] ?> ">
             

            <?php
            echo "<a href=\"".get_pretty_url($bo_table, $list[$i]['wr_id'])."\"> ";    
            echo $list[$i]['wr_content'];
            echo "</a>";			
            echo $list[$i]['icon_reply']." ";
            ?>

             <div>
                <?php echo $thumb['src'];  ?>
            </div>
            
        </li>

    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>

    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?> 
    </ul>
   
    <!-- <a href="<?php echo get_pretty_url($bo_table); ?>" class="lt_more"><span class="sound_only"><?php echo $bo_subject ?></span>더보기</a> -->

</div>
