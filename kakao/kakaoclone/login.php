<link rel="stylesheet" href="../css/login.css">
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<body class="login_bg">

<div>
    <h4 style="font-family: 'Agency FB';margin-top: 50px;">
        카카오톡 로그인
    </h4>
    <img class="login_pf" src="../images/profile.PNG"/>
    <form id="form_data" onsubmit="return false;">
        <div style="margin-top: 20px;">
            <input type="text" name="id" placeholder="아이디">

        </div>
        <div>
            <input type="password" name="pw" placeholder="패스워드">
        </div>

        <div>
            <button type="submit" onclick="login()" style="">로그인</button>
        </div>
    </form>

    <button type="button" style="margin-top: 50px;" onclick="location.href='join.php'">회원가입</button>
</div>

</body>
<script src="../js/common.js"></script>
<script>
    function login() {
        var $form = $("#form_data");
        var data = getFormData($form);
        console.log(data);
        $.ajax({
            type: 'post',
            url: '../ajax/login.php',
            data: {'data': data},
            dataType: 'json',
            error: function (xhr, status, error) {
                alert(error + xhr + status);
            },
            success: function (data) {
                console.log(data);
                if (data.success == 'ok') {
                    location.href= './';
                }
            },
        });
        return false;

    }

</script>
