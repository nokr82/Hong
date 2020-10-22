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

<style>

    .filebox label {
        display: inline-block;
        padding: .5em .75em;
        color: #fff;
        font-size: inherit;
        line-height: normal;
        vertical-align: middle;
        background-color: #5cb85c;
        cursor: pointer;
        border: 1px solid #4cae4c;
        border-radius: .25em;
        -webkit-transition: background-color 0.2s;
        transition: background-color 0.2s;
    }

    .filebox label:hover {
        color: #fff;
    }

    .filebox label:active {
        color: red;
    }

    .filebox input[type="file"] {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0;
    }

</style>

<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<title>푸딩</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="./css/star.css">

<style>
    body {
        background-image: url("https://images.unsplash.com/photo-1486241975555-382b4ae9e12f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>


<body id="nc_main">
<div class="full-wh">

    <!-- STAR ANIMATION -->
    <div class="bg-animation">
        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>
        <div id='stars4'></div>
    </div><!-- / STAR ANIMATION -->

</div>
<header class="w3-container w3-center w3-black">
    <h1>푸딩 로그인 Made by 동우</h1>
</header>

<div class="w3-container w3-half w3-display-middle w3-margin-top">
        <form class="w3-container w3-card-4 w3-white" action="index.php" method="post">

            <p>
                <input class="w3-input" id="name" name="name" type="text" style="width:90%" required>
                <label>이름</label></p>
            <p>
                <input class="w3-input" id="pw" name="pw" type="password" style="width:90%" required>
                <label>비밀번호</label></p>


            <p>
                <button class="w3-button w3-section w3-ripple w3-deep-orange"> 로그인</button>
                <button type="button" class="w3-button w3-section w3-ripple w3-deep-orange"
                        onclick="join()"> 회원가입
                </button>
                <span class="w3-right w3-padding w3-hide-small"><a href="#">비밀번호</a> 까먹었당?</span>
            </p>

        </form>

</div>
<?php
include_once('./modal/join_modal.php');
?>

</body>
</html>

<script>


    function join() {
        $('#id01').css('display','block');
    }

    //이미지미리보여주기
    function readURL(input) {
        var file_kind = input.value.lastIndexOf('.');
        var file_name = input.value.substring(file_kind + 1, input.length);
        var file_type = file_name.toLowerCase();
        var check_file_type = ['jpg', 'gif', 'png', 'jpeg', 'bmp'];

        if (check_file_type.indexOf(file_type) == -1) {
            alert('이미지 파일만 선택할 수 있습니다.');
            var parent_Obj = input.parentNode;
            var node = parent_Obj.replaceChild(input.cloneNode(true), input);
            return false;
        }else {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#image_section').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

    }

    //이미지첨부시이벤트
    $("#ex_file").change(function () {
        readURL(this);
    });


    //포커스를 잃었을때
    $('#re_name').blur(function () {
        name_ck();
    });

    //이름체크
    function name_ck() {
        var name = $('#re_name').val();
        $.ajax({
            url: 'register.php', //request 보낼 서버의 경로
            type: 'post', // 메소드(get, post, put 등)
            dataType: "json",
            data: {'re_name': name}, //보낼 데이터
            success: function (data) {
                //서버로부터 정상적으로 응답이 왔을 때 실행
                if (data.result == '중복') {
                    $('#name_in').text('같은 이름이 존재한다옹!!!!').removeClass('w3-text-green').addClass('w3-text-red');
                } else {
                    $('#name_in').text('가능하다옹!!!').removeClass('w3-text-red').addClass('w3-text-green');
                }
            },
            error: function (err) {
                //서버로부터 응답이 정상적으로 처리되지 못햇을 때 실행
                console.log(err);
            }
        });

    }

    //비번확인체크
    function pw_ck() {
        var pw = $('#re_pw').val();
        var pw2 = $('#re_pw2').val();

        if (pw != '') {
            if (pw != pw2) {
                $('#pw_in').text('일치하지않는다옹!!!!').removeClass('w3-text-green').addClass('w3-text-red');
            } else {
                $('#pw_in').text('일치한다옹!!!').removeClass('w3-text-red').addClass('w3-text-green');
            }
        } else {
            $('#re_pw').focus();
            $('#pw_in').text('비밀번호부터 입력하자잇!!!!!!').removeClass('w3-text-green').addClass('w3-text-red');
        }


    }

    //가입가능여부
    function register_ck() {
        if ($('#name_in').hasClass('w3-text-green') && $('#pw_in').hasClass('w3-text-green')) {
            return true;
        } else {
            alert('정보가 잘못되었습니다.');
            return false;
        }
    }


</script>