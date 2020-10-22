<?php
include_once('dbConn.php');
include_once('Common.php');

$re_name = $_POST['re_name'];
$pw = $_POST['pw'];
$name = $_POST['name'];
$check = $_POST['check'];//체크박스 배열형태로갖고옴
$ex_file = $_FILES['ex_file'];


$target_file = '';
//파일업로드
if (isset($ex_file['name'])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($ex_file["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    $check = getimagesize($ex_file["tmp_name"]);
    if ($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        alert("File is not an image.");
        $uploadOk = 0;
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        alert("Sorry, file already exists.");
        $uploadOk = 0;
    }

// Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        alert("Sorry, your file was not uploaded.");
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($ex_file["tmp_name"], $target_file)) {
            //echo "The file " . basename($ex_file["name"]) . " has been uploaded.";

        } else {
            alert("Sorry, there was an error uploading your file.");
        }
    }

}
//////////////////////


if ($re_name != '') {//이름중복체크
    $sql = "SELECT count(*) FROM member WHERE mb_name = '{$re_name}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);
    if ($row[0] > 0) {
        $data['result'] = '중복';
    } else {
        $data['result'] = '가능';
    }
    echo json_encode($data);
} else {//회원가입
    $sql = "INSERT INTO member(mb_name, mb_pw,profile_img) VALUES ('{$name}','{$pw}','{$target_file}')";//중복오류가 발생되면 업데이트문으로 바꾸기
    $result = mysqli_query($conn, $sql);
    if ($result) {
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['profile_img'] = $target_file;
        alert('가입성공', 'main.php');
    } else {
        alert('가입실패');
    }
}


?>
