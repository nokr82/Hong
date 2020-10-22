<?php
include_once('dbConn.php');
include_once('Common.php');
include_once('Header.php');

$pw = $_POST['pw'];
$name = $_POST['name'];

if ($name != '') {
    $sql = "SELECT * FROM member WHERE mb_name = '{$name}' and mb_pw = '{$pw}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    if ($row) {
        session_start();
        $_SESSION['name'] = $row['mb_name'];
        $_SESSION['profile_img'] = $row['profile_img'];
        move_to_url('main.php');
    } else {
        alert('존재하지않는 회원입니당!~~');
    }
}

?>


<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
        <header class="w3-container w3-center w3-deep-orange">
            <h1>회원가입</h1>
        </header>
        <div class="w3-center"><br>
            <span onclick="document.getElementById('id01').style.display='none'"
                  class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>

        </div>

        <form class="w3-container" action="/register.php" enctype="multipart/form-data" method="post" onsubmit="return register_ck()">
            <div class="w3-section">
                <label><b>이름</b></label>
                <input class="w3-input w3-border " type="text" placeholder="입력하시오." id="re_name"
                       name="name" required>
                <p class="w3-small w3-margin-bottom" id="name_in"></p>
                <label><b>비밀번호</b></label>
                <input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="입력하시오." id="re_pw"
                       name="pw"
                       required>

                <label><b>비밀번호확인</b></label>
                <input class="w3-input w3-border" type="password" placeholder="입력하시오." id="re_pw2" onkeyup="pw_ck()"
                       required>
                <p class="w3-small w3-margin-bottom" id="pw_in"></p>
                <div class="w3-center">
                    <img src="/img/basic.png"
                         class="w3-margin w3-circle w3-center" id="image_section" alt="이미지 올려주세요." style="width: 170px;height: 170px;">
                </div>
                <div class="filebox w3-center">
                    <label for="ex_file">프로필 이미지 업로드</label>
                    <input type="file" id="ex_file" name="ex_file">
                </div>

                <input class="w3-check" type="checkbox" name="check[]" value="Milk">
                <label>Milk</label>

                <input class="w3-check" type="checkbox" name="check[]" value="Sugar">
                <label>Sugar</label>

                <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">가입하기</button>


            </div>
        </form>

        <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
            <button onclick="document.getElementById('id01').style.display='none'" type="button"
                    class="w3-button w3-red">닫기
            </button>
        </div>

    </div>
</div>
