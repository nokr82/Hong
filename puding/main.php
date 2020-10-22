<?php
include_once('dbConn.php');
include_once('Common.php');
include_once('Header.php');

?>

<!DOCTYPE html>
<html>
<title>푸딩</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<body>
<div class=" w3-bar w3-theme w3-card-2 w3-deep-orange w3-animate-left">
    <a class="w3-bar-item w3-button barex w3-hover-white w3-padding-16"><i
                class="w3-container material-icons">menu</i></a>
    <a class="w3-bar-item w3-button barex w3-hover-white w3-padding-16 w3-large">Made in Dong U</a>
    <div class="w3-right">
        <?= $ss_member['name'] ?>
        <img src="<?php
        if (!$ss_member['profile_img']) {
            echo 'http://수목그리고.com/app/dubu_board/docs/imgs/m/m15185224585554_%EC%9D%B4%EB%AF%B8%EC%A7%80_%EC%A4%80%EB%B9%84%EC%A4%912.jpg';
        } else {
            echo $ss_member['profile_img'];
        } ?>" class="w3-margin w3-circle w3-hover-sepia" alt="Person" style="width: 30px">
    </div>
</div>

<div class="w3-row-padding w3-margin-top">
    <div class="w3-third">
        <div class="w3-card">
            <div class="w3-container">
                <h4>5 Terre</h4>
            </div>
        </div>

    </div>
    <div class="w3-third">
        <div class="w3-card">
            <div class="w3-container">
                <h4>Monterosso</h4>
            </div>
        </div>
    </div>
</div>

</body>
</html>
