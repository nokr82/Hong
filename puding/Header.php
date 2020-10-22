<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php
session_start();
$ss_member = $_SESSION;
$request_uri = $_SERVER['REQUEST_URI'];
if ($request_uri !='/index.php' && $request_uri != '/'){
    if ($ss_member['name']==''){
        alert('로그인부터 해주세요.','/index.php');
    }
}
?>
