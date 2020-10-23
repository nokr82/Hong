<link rel="stylesheet" href="../css/login.css">
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<body class="login_bg">

<div>
    <h4 style="font-family: 'Agency FB';margin-top: 50px;">
        회원가입
    </h4>
    <form id="form_data" onsubmit="return join()">

        <img class="login_pf" onclick="pf_cng()" src="../images/profile.PNG"/>
        <input id="fin" type="file" style="display: none;">
        <div style="margin-top: 20px;">
            <input type="text" name="id" placeholder="아이디">
        </div>
        <div>
            <input type="password" name="pw" placeholder="패스워드">
        </div>
        <div>
            <input type="text" name="name" placeholder="이름">
        </div>
        <div>
            <input type="text" name="hp" oninput="only_num(this)" placeholder="핸드폰번호">
        </div>
        <div>
            <button type="submit" style="">가입하기</button>
        </div>
    </form>

</div>

</body>
<script src="../js/common.js"></script>
<script>

    function pf_cng() {
        $('#fin').click();
    }

    // 이벤트를 바인딩해서 input에 파일이 올라올때 위의 함수를 this context로 실행합니다.
    $("#fin").change(function () {
        readURL(this);
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.login_pf').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function join() {


        var $form = $("#form_data");
        var data = getFormData($form);
        console.log(data);

        $.ajax({
            type: 'post',
            url: '../ajax/join.php',
            data: {'data': data},
            dataType: 'json',
            error: function (xhr, status, error) {
                alert(error + xhr + status);
            },
            success: function (data) {
                console.log(data);
                if (data.success == 'ok') {

                }
            },
        });
        return false;

    }


</script>
