<?php
session_start();
require_once '../require/connect.php';

$login = $_POST['login'];
$password=$_POST['password'];



$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login`='$login' and `password`='$password'");
if(mysqli_num_rows($check_user)>0){
    
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['id_user'] = $user['id_user'];
    $_SESSION['user'] = [
    "id" => $user['id_user'],
    "name" => $user['name'],
    "id_role" => $user['id_role']
    ];
    if($_SESSION['user']['id_role']==1)
{
        header('location: ../admin.php');
    } else{
    header('location: ../user.php');
    }
}
else{
    $_SESSION['message']="Ошибка данных!";
    header('location: ../log.php');
    }
?>