
<!-------------------------- 네비게이션 -------------------------->



<nav class="navbar fixed-topxx navbar-expand-lg navbar-white bg-white">
<div class="d-block">
	<?php
		echo latest("basic", "free", 1, 30);
		?>
		<div class="container">
	
		<!-- <a class="navbar-brand" href="<?php echo G5_URL?>"><img src="<?php echo G5_THEME_URL?>/img/logo.png" class="logo"></a> -->
		<a class="navbar-brand" href="<?php echo G5_URL?>"><img src="https://www.waffleuniv.com/child/img/inc/h_logo.svg" class="logo"></a>
		<button class="navbar-toggler navbar-dark navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive" data-hover="dropdown" data-animations="fadeIn fadeIn fadeInUp fadeInRight">
			<ul class="navbar-nav ml-auto">
			<?php
			$sql = " select *
						from {$g5['menu_table']}
						where me_use = '1'
							and length(me_code) = '2'
						order by me_order, me_id ";
			$result = sql_query($sql, false);
			$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
			$menu_datas = array();
			for ($i=0; $row=sql_fetch_array($result); $i++) {
				$menu_datas[$i] = $row;
	
				$sql2 = " select *
							from {$g5['menu_table']}
							where me_use = '1'
								and length(me_code) = '4'
								and substring(me_code, 1, 2) = '{$row['me_code']}'
							order by me_order, me_id ";
				$result2 = sql_query($sql2);
				for ($k=0; $row2=sql_fetch_array($result2); $k++) {
					$menu_datas[$i]['sub'][$k] = $row2;
				}
			}
			$i = 0;
			foreach( $menu_datas as $row ){
				if( empty($row) ) continue;
			?>
				<?php if($row['sub']['0']) { ?>
					<li class="nav-item dropdown megamenu-li">
						<a class="nav-link dropdown-toggle ks4 f16" href="<?php echo $row['me_link']; ?>" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" target="_<?php echo $row['me_target']; ?>">
						<?php echo $row['me_name'] ?>
						</a>
							<!-- 서브 -->
							<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
								<?php
								// 하위 분류
								$k = 0;
								foreach( (array) $row['sub'] as $row2 ){
	
								if( empty($row2) ) continue;
	
								?>
								<a class="dropdown-item ks4 f15 fw4" href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a>
	
								<?php
								$k++;
								}   //end foreach $row2
	
								if($k > 0)
								echo '</ul>'.PHP_EOL;
								?>
				<?php }else{?>
					<li class="nav-item">
					<a class="nav-link ks4 f16" href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>"><?php echo $row['me_name'] ?></a>
					</li>
				<?php }?>
			</li>
	
			<?php
			$i++;
			}   //end foreach $row
	
			if ($i == 0) {  ?>
				<li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
			<?php } ?>
			<li class="nav-item dropdown login">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				LOGIN
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
	
				<?php if($is_admin) { ?><a class="dropdown-item" href="<?php echo G5_URL?>/adm">관리자</a><?php } ?>
				<a class="dropdown-item" href="<?php echo G5_URL?>/bbs/new.php">새글</a>
				<a class="dropdown-item" href="<?php echo G5_URL?>/bbs/qalist.php">1:1문의</a>
				<?php if($is_member) { ?>
				<a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a>
				<a class="dropdown-item" href="<?php echo G5_URL?>/bbs/logout.php">로그아웃</a>
				<?php }else{ ?>
				<a class="dropdown-item" href="<?php echo G5_URL?>/bbs/login.php">로그인</a>
				<a class="dropdown-item" href="<?php echo G5_URL?>/bbs/register.php">회원가입</a>
				<?php } ?>
				</div>
			</li>
			</ul>
		</div>
		</div>
		<ul>
						<?php if($is_member) { ?>
							<li><a href="<?php echo G5_URL?>/bbs/logout.php">로그아웃</a></li>
						<?php }else{ ?>
							<li><a href="<?php echo G5_URL?>/bbs/login.php"><i class="fas fa-sign-in-alt"></i> 로그인</a></li>
						<?php }?>
							<?php if($is_admin) { ?>
							<li><a href="<?php echo G5_URL?>/adm">관리자</a></li>
							<?php } ?>
						</ul>
</div>
</nav>

