<?php include_once("./_common.php"); ?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>와플대학 만들기</title>
</head>
<body>
  <h1><a href="http://ohao.dothome.co.kr/waffle/">메인사이트-바로가기</a></h1>  
  <?php echo 'G5_URL : '.G5_URL?><br>
  <?php echo 'G5_PATH : '.G5_PATH?><br>

<?php 
define('SSH', true);
if ( !defined('SSH') ) {
	echo "나가";	
} else {
	echo "드루와";
}; 

define('_REACT', '어렵다');
$nodejs = '노드';
?>
<br>
<?php 
echo _REACT;
?>
<br>
<?php 
echo $nodejs;
?>

<br>
<?php 
echo G5_CSS_URL;
?>

<br>
<?php
if (!defined('G5_THEME_CSS_URL')) {  
  echo "테마가 적용안됬습니다 ㅎㅎ;";
} else {
  echo G5_THEME_CSS_URL;
}
?>
</body>
</html>
