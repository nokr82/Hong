<?php
$conn = mysqli_connect("localhost","nokr82","zx1411510!","nokr82");

/*//한행
echo "<h1>single row</h1>";
$sql = "SELECT * FROM member WHERE id = 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo '<h2>'.$row['mb_name'].'</h2>';
*/

/*
//여러행
echo "<h1>multi row</h1>";
$sql = "SELECT * FROM member";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {
    echo '<h2>'.$row['mb_name'].'</h2>';
}
*/

?>