<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/kakao/common/config.php';
include_once DBCONN;
include_once COMMON;
header("Content-Type: application/json");

$sql = "SELECT * FROM ka_member where mb_id = '{$_POST['data']['id']}' and mb_pw='{$_POST['data']['pw']}';";
$member = $pdo ->query($sql);
$member = $member -> fetch(PDO::FETCH_ASSOC);
$_SESSION['ss_mb_id'] = $member['id'];

if ($member){
    $result['member'] = $member;
    $result['success'] = 'ok';
}

echo json_encode($result);
