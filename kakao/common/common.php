<?php
/************************************************************************************
 ********************************만든이 : 홍동우 ****************************************
 *******************************만든시기 : 2020/02/05 **********************************
 ******************************내용: php 공용함수     **********************************
 ************************************************************************************/
//Error Msg
//==========================================================================================================================
// extract($_GET); 명령으로 인해 page.php?_POST[var1]=data1&_POST[var2]=data2 와 같은 코드가 _POST 변수로 사용되는 것을 막음
//--------------------------------------------------------------------------------------------------------------------------
$ext_arr = array('PHP_SELF', '_ENV', '_GET', '_POST', '_FILES', '_SERVER', '_COOKIE', '_SESSION', '_REQUEST',
    'HTTP_ENV_VARS', 'HTTP_GET_VARS', 'HTTP_POST_VARS', 'HTTP_POST_FILES', 'HTTP_SERVER_VARS',
    'HTTP_COOKIE_VARS', 'HTTP_SESSION_VARS', 'GLOBALS');
$ext_cnt = count($ext_arr);

for ($i = 0; $i < $ext_cnt; $i++) {
    // POST, GET 으로 선언된 전역변수가 있다면 unset() 시킴
    if (isset($_GET[$ext_arr[$i]])) unset($_GET[$ext_arr[$i]]);
    if (isset($_POST[$ext_arr[$i]])) unset($_POST[$ext_arr[$i]]);
}
function IS_SQLInjection($v)
{
    $UserInput = preg_replace("/[\r\n\s\t\’\;\”\=\-\-\#\/*]+/", "", $v);
    if (preg_match('/(union|select|from|where|update|delete|or|drop)/i', $UserInput)) {
        return TRUE;
    }

    return FALSE;
}


foreach ($_REQUEST as $s) {
    if (IS_SQLInjection($s)) {
        header("Location:http://nokr82.cafe24.com/kakao/");
        break;
    }
}
//SHA-256 엔코딩  비밀번호, 간편비밀번호만 만 사용
function encryptPass($str)
{
    // 암호화
    $encrypted = base64_encode(hash('sha256', $str, true));
    return $encrypted;
}

//==========================================================================================================================
@ini_set("session.use_trans_sid", 0);    // PHPSESSID를 자동으로 넘기지 않음
@ini_set("url_rewriter.tags", ""); // 링크에 PHPSESSID가 따라다니는것을 무력화함 (해뜰녘님께서 알려주셨습니다.)
// 세션 ID를 저장한 쿠키의 유효 시간 설정. 설정하지 않거나 0으로 설정하면 브라우저가 종료되면 쿠키는 파기. (초 단위)
ini_set('session.cookie_lifetime', 86400 * 30);
// 사용되지 않는 세션 파기 유효 시간 설정. (초단위)
ini_set('session.gc_maxlifetime', 86400 * 30);
// 서버에 저장된 세션 ID 활성화 시간. (분단위)
ini_set('session.cache_expire', 86400);

if (isset($SESSION_CACHE_LIMITER))
    @session_cache_limiter($SESSION_CACHE_LIMITER);
else
    @session_cache_limiter("no-cache, must-revalidate");

session_set_cookie_params(24 * 60 * 60 * 30, '/');
session_start();

$member = array();
$set_alram = array();


//자동로그인할시!!!
if (get_cookie("mb_no")) {
    $mb_no = get_cookie("mb_no");
} else {
    $mb_no = "";
}

if ($mb_no != "") {
    $member = get_member($mb_no);
    $_SESSION['ss_mb_id'] = $mb_no;
}

// 자동로그인 부분에서 첫로그인에 포인트 부여하던것을 로그인중일때로 변경하면서 코드도 대폭 수정하였습니다.
if ($_SESSION['ss_mb_id']) { // 로그인중이라면
    $member = get_member($_SESSION['ss_mb_id']);
}


//디바이스체크
if (strstr($_SERVER['HTTP_USER_AGENT'], 'iphone') ||
    stristr($_SERVER['HTTP_USER_AGENT'], 'iPad') ||
    stristr($_SERVER['HTTP_USER_AGENT'], 'Macintosh')) {
//    $device = "ios";
    $device = "iphone";
} else {
    $device = "etc";
}

//유튜브아이디 가져오기
function get_youtube_thumb($url)
{
    $video_id = str_replace("https://www.youtube.com/watch?v=", "", $url);
    return $video_id;
}


//pc인지 모바일인지 구분
function MobileCheck()
{
    global $HTTP_USER_AGENT;
    $HTTP_USER_AGENT = $_SERVER['HTTP_USER_AGENT'];

    $MobileArray = array("iphone", "lgtelecom", "skt", "mobile", "samsung", "nokia", "blackberry", "android", "android", "sony", "phone");

    $checkCount = 0;
    for ($i = 0, $iMax = sizeof($MobileArray); $i < $iMax; $i++) {
        if (preg_match("/$MobileArray[$i]/", strtolower($HTTP_USER_AGENT))) {
            $checkCount++;
            break;
        }
    }
    return ($checkCount >= 1) ? "Mobile" : "Computer";
}


//소수점계산함수
function numberFormatClean($iNumber, $iDecimals = 3)
{
    $sNumber = number_format($iNumber, $iDecimals);
    $sNumber = rtrim($sNumber, 0);
    $sNumber = rtrim($sNumber, '.');

    return $sNumber;
}


// 날짜 계산 함수
function passing_time($datetime)
{
    $time_lag = time() - strtotime($datetime);

    if ($time_lag < 60) {
        $posting_time = "방금";
    } elseif ($time_lag >= 60 and $time_lag < 3600) {
        $posting_time = floor($time_lag / 60) . "분 전";
    } elseif ($time_lag >= 3600 and $time_lag < 86400) {
        $posting_time = floor($time_lag / 3600) . "시간 전";
    } elseif ($time_lag >= 86400 and $time_lag < 2419200) {
        $posting_time = floor($time_lag / 86400) . "일 전";
    } else {
        $posting_time = date("y-m-d", strtotime($datetime));
    }

    return $posting_time;
}


// 쿠키변수 생성
function set_cookie($cookie_name, $value, $time)
{
    setcookie(md5($cookie_name), base64_encode($value), $time, '/');
}


// 쿠키변수값 얻음
function get_cookie($cookie_name)
{
    $cookie = md5($cookie_name);
    if (array_key_exists($cookie, $_COOKIE))
        return base64_decode($_COOKIE[$cookie]);
    else
        return "";
}


// 회원 정보를 얻는다.
function get_member($mb_id, $fields = '*')
{
    global $pdo;
    $sql = "select $fields from ka_member where mb_no = TRIM('$mb_id')";
    $statement = $pdo->query($sql);
    $member = $statement->fetch(PDO::FETCH_ASSOC);
    return $member;
}

function error_msg($str, $url = "/")
{
    echo "<script>";
    echo "alert('" . $str . "');";
    echo "location.replace('" . $url . "');";
    echo "</script>";
    exit;
}

//j경고창을 띄우고 페이지 이동
function alert($str, $url = "")
{
    echo "<script>";
    echo "alert( '$str' );";
    if ($str == "로그인후 이용해주세요") {
        echo "location.replace( 'https://www.play-kok.com/account/login.php' );";
    } else if ($url == "") {
        echo "history.back(-1);";
    } else {
        echo "location.replace( '$url' );";
    }
    echo "</script>";
    exit;
}

function msg($str = "입력된내용이 없습니다.")
{
    echo "<script>";
    echo "alert( '$str' );";
    echo "</script>";
}

//페이지 이동
function move_to_url($url)
{
    echo "<script>";
    echo "location.replace( '$url' );";
    echo "</script>";
    exit;
}

function P($var)
{
    ob_start();
    print_r($var);
    $str = ob_get_contents();
    ob_end_clean();
    $str = str_replace("&nbsp;", " ", $str);
    echo nl2br($str);
}

?>



