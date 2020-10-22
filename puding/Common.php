<?
//Error Msg
function error_msg( $str  , $url="/"){
    echo "<script>";
    echo "alert('".$str."');";
    echo "location.replace('".$url."');";
    echo "</script>";
    exit;
}
//j경고창을 띄우고 페이지 이동
function alert($str , $url=""){
    echo "<script>";
    echo "alert( '$str' );";
    if($url ==""){
        echo "history.back(-1);";
    }else{
        echo "location.replace( '$url' );";
    }
    echo "</script>";
    exit;
}
function msg($str ="입력된내용이 없습니다."){
    echo "<script>";
    echo "alert( '$str' );";
    echo "</script>";
}
//페이지 이동
function move_to_url( $url ){
    echo "<script>";
    echo "location.replace( '$url' );";
    echo "</script>";
    exit;
}



?>



