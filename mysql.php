<?php

//모든에러 알려주는거
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

/**
 * mysql 연동
 *   $host = '호스트명';
 *   $user = '계정명';
 *   $pw = '비밀번호';
 *   $dbName = '데이터베이스명';
 *   $mysqli = new mysqli($host, $user, $pw, $dbName);
 */

$db_host = '127.0.0.1';
$user = 'alice';
$pw = '1234';
$dbName = 'practice2';
$mysqli = new mysqli($db_host, $user, $pw, $dbName);

if($mysqli){
    echo "MySQL 접속 성공";
}else{
    echo "MySQL 접속 실패";
}

//CREATE TABLE
// $sql = "CREATE TABLE myclass_tb (";
// $sql = $sql."id varchar(12) not null,";
// $sql = $sql."name varchar(8) not null,";
// $sql = $sql."sex char(2),";
// $sql = $sql."age int,";
// $sql = $sql."point int,";
// $sql = $sql."address varchar(7),";
// $sql = $sql."primary key(id));";

// if($mysqli->query($sql)){
//  echo '테이블 생성 완료';
// }else{
//  echo '테이블 생성 실패';
// }

//INSERT_TABLE
// $sql = "insert into myclass_tb values";
// $sql= $sql.'("1234","쩡","여","25","6842","korea")';
// $mysqli->query($sql);

// $sql="select * from myClass_tb";
// $res = $mysqli->query($sql);

// //레코드 수 세기
// echo 'count is'.$res->num_rows;

// //필드 수 세기
// echo 'count is '.$res->field_count;


$sql = "create table account_info (";
$sql = $sql."memberSeq int(11) NOT NULL AUTO_INCREMENT,";
$sql = $sql."id varchar(30) NOT NULL COMMENT '회원 아이디',";
$sql = $sql."pwd varchar(20) NOT NULL COMMENT '회원 비밀번호',";
$sql = $sql."name varchar(10) NOT NULL COMMENT '회원 이름',";
$sql = $sql."addr varchar(80) DEFAULT NULL COMMENT '회원 주소',";
$sql = $sql."sex varchar(3) NOT NULL COMMENT '회원 성별',";
$sql = $sql."birthDay int(8) DEFAULT NULL COMMENT '회원 생년월일',";
$sql = $sql."email varchar(20) DEFAULT NULL COMMENT '회원 메일 주소',";
$sql = $sql."PRIMARY KEY (memberSeq))";


if($mysqli->query($sql)){
 echo '테이블 생성 완료';
}else{
 echo '테이블 생성 실패';
}

?>
