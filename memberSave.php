<?php

//모든에러 알려주는거
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

$db_host = '127.0.0.1';
$user = 'alice';
$pw = '1234';
$dbName = 'practice2';
$mysqli = new mysqli($db_host, $user, $pw, $dbName);

$id=$_POST['id'];
 $password=md5($_POST['pwd']);
 $password2=$_POST['pwd2'];
 $name=$_POST['name'];
 $address=$_POST['addr'];
 $sex=$_POST['sex'];
 $birthDay=$_POST['birthDay'];
 $email=$_POST['email'];
 
 $sql = "insert into account_info (id, pwd, name, addr, sex, birthDay, email)";
 $sql = $sql. "values('$id','$password','$name','$address','$sex','$birthDay','$email')";

 if($mysqli->query($sql)){
  echo 'success inserting';
 }else{
  echo 'fail to insert sql';
 }

?>