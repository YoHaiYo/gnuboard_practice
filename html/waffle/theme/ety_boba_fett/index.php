


<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>




<?php 
/**************************************************************************

GNUBOARD 5.4.22 / 5.5.x

테마메뉴얼주소 입니다. 아래 주소에 설치 및 셋팅법이 포함되어 있습니다.
http://ety.kr/board/free_theme_manual

오류내용은 질문게시판을 이용해주세요 (오픈카톡이나 유선상 문의를 받지 않습니다.)
http://ety.kr/board/qa

[라이선스]
자주 하는 질문이 있어서 문서내 포함시켰습니다.

1. 배포, 재배포는 에티테마만 가능하므로 사용만 하시고 다른쪽에 배포나 재배포 하지 말아주세요.
(라이선스 위반을 하시게 되면 그에 따른 책임이 따르게 됩니다.)

2. 유상 작업이 있을때 마다 다운로드 받으셔서 작업하셔도 됩니다.

3. 유상 작업에 대한 책임은 돈을 받는 제작자에게 있으며 에티테마와는 무관합니다.


**************************************************************************/ 
?>




<!-------------------------- 슬라이드 -------------------------->

<!-- 컨텐츠 관리자가 관리하기 -->
<?php echo latest('pic_block', 'adm_main_banner', 3, 100) ?>

<!-------------------------- ./슬라이드 -------------------------->






<!-------------------------- 아이콘박스 -------------------------->
<div class="margin-top-60"></div>
<div class="container">
	<div class="center-heading ks4">
		<h2>BOBA FETT</h2>
		<span class="center-line"></span>
	</div>

	<div class="row padding-top-20">
		<div class="col-lg-3 col-md-3 col-sm-12 col-6 p-r-5">
			<a href="#none"><!--링크-->
				<div class="box">							
					<div class="icon">
						<div class="info-pink">
							<span class="material-icons-outlined">travel_explore</span>
							<p class="ks4 f15 text-center">
								보바펫 소개
							</p>
						</div>
					</div>
					<div class="space"></div>
				</div> 
			</a>
		</div><!-- ./col -->
		<div class="col-lg-3 col-md-3 col-sm-12 col-6 p-l-5">
			<a href="#none"><!--링크-->
				<div class="box">							
					<div class="icon">
						<div class="info-pink-2">
							<span class="material-icons-outlined">movie</span>
							<p class="ks4 f15 text-center">
								보바펫 시즌정보 안내
							</p>
						</div>
					</div>
					<div class="space"></div>
				</div> 
			</a>
		</div><!-- ./col -->
		<div class="col-lg-3 col-md-3 col-sm-12 col-6 p-r-5">
			<a href="#none"><!--링크-->
				<div class="box">							
					<div class="icon">
						<div class="info">
							<span class="material-icons-outlined">live_tv</span>
							<p class="ks4 f15 text-center">
								보바펫 예고편 바로가기
							</p>
						</div>
					</div>
					<div class="space"></div>
				</div> 
			</a>
		</div><!-- ./col -->
		<div class="col-lg-3 col-md-3 col-sm-12 col-6 p-l-5">
			<div class="box">							
				<div class="icon">
					
					<div class="info">
						<span class="material-icons-outlined">collections</span>
						<p class="ks4 f15 text-center">
							갤러리
						</p>
					</div>
					
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- ./col -->
	</div><!-- /row -->


	<div class="d-none d-lg-block d-xl-block margin-bottom-20"></div>

	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-12 col-6 p-r-5">
			<div class="box">							
				<div class="icon">
					<div class="info">
						<span class="material-icons-outlined">travel_explore</span>
						<p class="ks4 f15 text-center">
							보바펫 소개
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- ./col -->
		<div class="col-lg-3 col-md-3 col-sm-12 col-6 p-l-5">
			<div class="box">							
				<div class="icon">
					<div class="info">
						<span class="material-icons-outlined">movie</span>
						<p class="ks4 f15 text-center">
							보바펫 시즌정보 안내
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- ./col -->
		<div class="col-lg-3 col-md-3 col-sm-12 col-6 p-r-5">
			<div class="box">							
				<div class="icon">
					<div class="info">
						<span class="material-icons-outlined">live_tv</span>
						<p class="ks4 f15 text-center">
							보바펫 예고편 바로가기
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- ./col -->
		<div class="col-lg-3 col-md-3 col-sm-12 col-6 p-l-5">
			<div class="box">							
				<div class="icon">
					
					<div class="info">
						<span class="material-icons-outlined">collections</span>
						<p class="ks4 f15 text-center">
							갤러리
						</p>
					</div>
					
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- ./col -->
	</div><!-- /row -->

</div><!-- /container -->








<div class="margin-top-60"></div>
<div class="container-fluid" style="padding:0;margin:0px;">

<div class="row" style="margin:0px;">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-padding">
			<img src="https://via.placeholder.com/1920x1080" style="max-width: 100%;">	

		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-padding bg-gray-2">
			<div class="a-box">
				<h2 class="ks4 margin-bottom-20">BOBA FETT</h2>
				<p class="ks4">
				보바펫 유료테마를 출시하였습니다.<br>
				유료버전과 무료버전은 작업의 차이가 많기 때문에 믹스하거나 섞어서 사용할 수 없습니다.
				</p>

				<div class="margin-top-20 margin-bottom-20">
					<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='https://sir.kr/cmall/1654181164'">유료테마 바로가기</button>
				</div>
			</div>
		</div><!-- /col -->
	</div><!-- /row -->
</div><!-- /container -->





<!-------------------------- 제품안내 갤러리 -------------------------->
<div class="container margin-top-60 margin-bottom-80">
	<div class="center-heading margin-top-40">
		<h2 class="ks4">보바펫 갤러리</h2>
		<span class="center-line"></span>
	</div>
	<!-- 
	LATEST : pic_basic_company 
	글자수 조정은 해당 스킨에서 해주세요~
	-->
	<?php echo latest('theme/pic_basic_company', 'gallery', 12, 24); ?>
</div>




<!-------------------------- pallax box -------------------------->
<style>
.para-box{
    height: 350px; display: grid; align-items: center;
}
</style>
<div class="parallax-window" data-parallax="scroll" data-image-src="https://via.placeholder.com/2560x1080"><!-- 이미지 주소 -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 para-box text-center">
				
				<div class="">
					<h2 class='text-light ks5'>에티테마 바로가기</h2>
					<br />
					<button type="button" class="btn btn-outline-light ks4" onclick='window.open("about:blank").location.href="http://ety.kr/board/theme_update"'>바로가기</button>

					<button type="button" class="btn btn-outline-light ks4" onclick='window.open("about:blank").location.href="http://ety.kr/shop/item/1623421493"'>7페이지</button>
				</div>
			</div>

		</div>
	</div>
</div><!-- /parallax -->




<!-------------------------- 게시판 -------------------------->
<div class="margin-top-60"></div>
<div class="container">
	<div class="center-heading ks4">
		<h2 class="ks4">공지사항</h2>
		<span class="center-line"></span>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<?php echo latest('theme/basic_main_one', 'notice', 5, 40);?>
		</div>
		<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<?php echo latest('theme/basic_main_one', 'free', 5, 40);?>
		</div>
	</div><!-- /row -->
</div><!-- /container -->



<!-------------------------- 배너 -------------------------->
<div class="container">
	<div class="row">
		<div class="col-md-2 col-sm-6 col-6"><img src="<?php echo G5_THEME_URL?>/img/item/1.png" class="img-fluid" alt=""></div>
		<div class="col-md-2 col-sm-6 col-6"><img src="<?php echo G5_THEME_URL?>/img/item/1.png" class="img-fluid" alt=""></div>
		<div class="col-md-2 col-sm-6 col-6"><img src="<?php echo G5_THEME_URL?>/img/item/3.png" class="img-fluid" alt=""></div>
		<div class="col-md-2 col-sm-6 col-6"><img src="<?php echo G5_THEME_URL?>/img/item/4.png" class="img-fluid" alt=""></div>
		<div class="col-md-2 col-sm-6 col-6"><img src="<?php echo G5_THEME_URL?>/img/item/5.png" class="img-fluid" alt=""></div>
		<div class="col-md-2 col-sm-6 col-6"><img src="<?php echo G5_THEME_URL?>/img/item/6.png" class="img-fluid" alt=""></div>
		<div class="col-md-2 col-sm-6 col-6"><img src="<?php echo G5_THEME_URL?>/img/item/7.png" class="img-fluid" alt=""></div>
		<div class="col-md-2 col-sm-6 col-6"><img src="<?php echo G5_THEME_URL?>/img/item/8.png" class="img-fluid" alt=""></div>
		<div class="col-md-2 col-sm-6 col-6"><img src="<?php echo G5_THEME_URL?>/img/item/9.png" class="img-fluid" alt=""></div>
		<div class="col-md-2 col-sm-6 col-6"><img src="<?php echo G5_THEME_URL?>/img/item/1.png" class="img-fluid" alt=""></div>
		<div class="col-md-2 col-sm-6 col-6"><img src="<?php echo G5_THEME_URL?>/img/item/2.png" class="img-fluid" alt=""></div>
		<div class="col-md-2 col-sm-6 col-6"><img src="<?php echo G5_THEME_URL?>/img/item/3.png" class="img-fluid" alt=""></div>
	</div>
</div>












<?php echo G5_THEME_URL?>
<?php
include_once(G5_THEME_PATH.'/tail.php');
