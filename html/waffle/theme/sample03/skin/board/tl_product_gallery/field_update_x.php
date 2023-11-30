<?php
include './_common.php';
$data = array('error'=>'');
if($is_admin != 'super') {
  $data['error'] = '관리자만 접근할 수 있습니다.';
  echo json_encode($data,JSON_UNESCAPED_UNICODE);
  exit;
}
if($bo_table == '') {
  $data['error'] = '게시판코드 정보가 누락되었습니다.';
  echo json_encode($data,JSON_UNESCAPED_UNICODE);
  exit;
}
if($board['bo_table'] == '') {
  $data['error'] = '존재하지 않는 게시판입니다.';
  echo json_encode($data,JSON_UNESCAPED_UNICODE);
  exit;
}
if(!isset($board['bo_fieldm'])) {
  $sql =  "ALTER TABLE {$g5['board_table']} ADD `bo_fieldm` TEXT NOT NULL AFTER `bo_10`";
  sql_query($sql);
}

$cfg = array();
if(trim($wr_1_name) != '') $cfg['wr_1']['name'] = stripslashes(trim($wr_1_name));
if(trim($wr_2_name) != '') $cfg['wr_2']['name'] = stripslashes(trim($wr_2_name));
if(trim($wr_3_name) != '') $cfg['wr_3']['name'] = stripslashes(trim($wr_3_name));
if(trim($wr_4_name) != '') $cfg['wr_4']['name'] = stripslashes(trim($wr_4_name));
if(trim($wr_5_name) != '') $cfg['wr_5']['name'] = stripslashes(trim($wr_5_name));
if(trim($wr_6_name) != '') $cfg['wr_6']['name'] = stripslashes(trim($wr_6_name));
if(trim($wr_7_name) != '') $cfg['wr_7']['name'] = stripslashes(trim($wr_7_name));
if(trim($wr_8_name) != '') $cfg['wr_8']['name'] = stripslashes(trim($wr_8_name));
if(trim($wr_9_name) != '') $cfg['wr_9']['name'] = stripslashes(trim($wr_9_name));
if(trim($wr_10_name) != '') $cfg['wr_10']['name'] = stripslashes(trim($wr_10_name));
$bo_fieldm = json_encode($cfg, JSON_UNESCAPED_UNICODE);

sql_query(" update {$g5['board_table']} set bo_fieldm='".sql_real_escape_string($bo_fieldm)."' where bo_table = '{$bo_table}' ");
echo json_encode($data,JSON_UNESCAPED_UNICODE);
?>