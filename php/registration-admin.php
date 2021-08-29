<?php

session_start();

$con = mysqli_connect('localhost','root','','admin');
$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from admin where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Username Already Taken";
    
}else{
    $reg = " insert into admin(name , password) values ('$name','$pass')";
    mysqli_query($con, $reg);
    echo" Registration Successful";
}

?>