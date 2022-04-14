<?php require_once 'require/header.php' ?>
<?php
session_start(); 
require_once 'require/connect.php';
if(!$_SESSION['user']){
    header('location: user.php');
   
}
?>
    <title>Личный кабинет</title> 
    <body>
        <main>

<div class="container-sm mt-3">
    <div class="row align-items-start">

    <h4>Добро пожаловать, <?= $_SESSION['user']['name']?>! Ваш личный кабинет пока в разработке...</h4>

    </div>
</div>

        </main>
    </body>
</html