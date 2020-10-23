<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/kakao/common/config.php';
include_once DBCONN;


$imageKind = array('image/pjpeg', 'image/gif', 'image/jpeg', 'image/JPG', 'image/X-PNG', 'image/PNG', 'image/png', 'image/x-png');


$sql = "INSERT INTO `ka_member` (`mb_id`, `mb_pw`, `mb_name`
, `mb_phone`) VALUES 
( '{$_POST['id']}', '{$_POST['pw']}', '{$_POST['name']}'
, '{$_POST['hp']}');
";
$pdo->query($sql);
$last_id = $pdo->lastInsertId();
$dir = BASE_PATH . '/storage/profile/';
if (isset($_FILES['file']) && !$_FILES['file']['error']) {
    if (in_array($_FILES['file']['type'], $imageKind)) {
        $image_file = time() . '_' . $last_id . "." . str_replace('image/', '', $_FILES['file']['type']);
        if (move_uploaded_file($_FILES['file']['tmp_name'], $dir . $image_file)) {
            $sql = "UPDATE `nokr82`.`ka_member` SET `profile_img` = '{$image_file}' WHERE (`id` = '{$last_id}');";
            $pdo->query($sql);
        }
    }
}
echo "성공";
