<?php
session_start();
require_once '../require/connect.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$patronymic=$_POST['patronymic'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_repeat = $_POST['password_repeat'];

if (empty($name && $surname && $login && $email && $password && $password_repeat)) {
    $_SESSION['message']="Не заполнено(ы) поле(я)!";
    header('location: ../reg.php');
}

if (preg_match("/^[a-zA-Z]+$/i", $name) ){
    $_SESSION['message']="Для ФИО разрешена только кириллица!";
    header('location: ../reg.php');
}

if (preg_match("/^[a-zA-Z]+$/i", $surname) ){
    $_SESSION['message']="Для ФИО разрешена только кириллица!";
    header('location: ../reg.php');
}

if (preg_match("/^[a-zA-Z]+$/i",$patronymic) ){
    $_SESSION['message']="Для ФИО разрешена только кириллица!";
    header('location: ../reg.php');
}
 
if (preg_match("/^[а-яА-Я]+$/u", $login) ){
    echo "В логине можно использовать только латиницу и цифры!";
    header('location: ../reg.php');
}

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['message']="Проверьте правильность написания Email!";
    header('location: ../reg.php');
}

if (preg_match("/[А-Яа-яЁё_ -]/u", $password) ){
    $_SESSION['message']="Проверьте правильность написания пароля!";
    header('location: ../reg.php');
}

if (preg_match("/[А-Яа-яЁё_ -]/iu", $password_repeat) ){
    $_SESSION['message']="Проверьте правильность написания пароля!";
    header('location: ../reg.php');
}

if ($password!==$password_confirm){
    $_SESSION['message']="Пароли не совпадают!";
    header('location: ../reg.php');
}

else {
    $sql = "INSERT INTO users (`id_user`, `login`, `password`, `name`, `surname`, `patronymic`, `email`, `id_role`) VALUES (NULL, '$login', '$password', '$name', '$surname', '$patronymic', '$email', '2')";
    $res = mysqli_query($connect, $sql) or die ("Ошибка". mysqli_error($connect));
    $_SESSION['message']="Вы успешно зарегистрировались! Пожалуйста, авторизуйтесь.";
     header('location: ../index.php');
}
?>
