

//숫자만입력되게하는 함수
function only_num(obj) {
    obj.value = obj.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');
}

//인젝션 실행함수
function injection() {
    $("input").on("propertychange change keyup paste input", function () {
        check_injection($(this));
    });
}


//인젝션 막기 js
function check_injection(obj) {
    var txt = obj.val();
    if (txt.length > 0) {
        //특수문자 제거
        var expText = /[%=><]/;
        if (expText.test(txt) == true) {
            alert("특수문자를 입력 할수 없습니다.");
            obj.focus();
            obj.val('');
            return false;
        }

        //특정문자열(sql예약어의 앞뒤공백포함) 제거
        var sqlArray = new Array(
            //sql 예약어
            "OR", "SELECT", "INSERT", "DELETE", "UPDATE", "CREATE", "DROP", "EXEC",
            "UNION", "FETCH", "DECLARE", "TRUNCATE"
        );

        var regex;
        for (var i = 0; i < sqlArray.length; i++) {
            regex = new RegExp(sqlArray[i], "gi");

            if (regex.test(txt)) {
                alert("잘못된 입력입니다.");
                obj.focus();
                obj.val('');
                return false;
            }
        }
    }
    return true;
}


function getFormData($form) {//폼데이터 json 형식배열로 바꾸기
    var unindexed_array = $form.serializeArray();
    var indexed_array = {};

    $.map(unindexed_array, function (n, i) {
        indexed_array[n['name']] = n['value'];
    });

    return indexed_array;
}



/* 공통 레이어팝업 함수 */
function popup_ui(page_num) {
    $('#mask').addClass('mask');
    $('.pop_area').load('/master/view/cp_master_franchisee_1.php', function () {

    });
}


function inputPhoneNumber(txt) {
    var phone = "";
    if (txt == '') {
        return phone;
    }
    var number = txt.replace(/[^0-9]/g, "");
    if (number.length < 4) {
        phone += number;
    } else if (number.length < 7) {
        phone += number.substr(0, 3);
        phone += "-";
        phone += number.substr(3);
    } else if (number.length == 10) {
        phone += number.substr(0, 3);
        phone += "-";
        phone += number.substr(3, 3);
        phone += "-";
        phone += number.substr(6);
    } else if (number.length == 11) {
        phone += number.substr(0, 3);
        phone += "-";
        phone += number.substr(3, 3);
        phone += "-";
        phone += number.substr(6);
    } else if (number.length == 13) {
        phone += number.substr(0, 6);
        phone += "-";
        phone += number.substr(6);
    } else {
        phone += number.substr(0, 3);
        phone += "-";
        phone += number.substr(3, 4);
        phone += "-";
        phone += number.substr(7);
    }
    return phone;
}

