<?php
/**
 * Created by PhpStorm.
 * User: Hong_Dong_Woo
 * Date: 2020-10-22
 * Time: 오후 3:27
 * db연결
 */
$dbHost = "localhost";      // 호스트 주소(localhost, 120.0.0.1)
$dbName = "nokr82";      // 데이타 베이스(DataBase) 이름
$dbUser = "nokr82";          // DB 아이디
$dbPass = "zx1411510!";        // DB 패스워드

// PDO + MariaDB 연결하기
$pdo = new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUser, $dbPass);

