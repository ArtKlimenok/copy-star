<?php session_start();?>

<html>
<head>
<script src="assets/js/jquery/jquery-3.6.0.min.js" defer></script>
<script src="assets/js/main.js" defer></script>
<script src="assets/bs/js/bootstrap.min.js" defer></script>
<link rel="stylesheet" href="assets/bs/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>


<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">О нас</h4>
          <p class="text-muted">Занимаемся копировальным оборудованием</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white mb-3">Добро пожаловать!</h4>
          <ul class="list-unstyled">

                <?
          if(isset($_SESSION['user'])){
                    ?>
                                 <li><a href="user.php" class="text-white text-decoration-none">Личный кабинет</a></li>
                                  <li><a class="link-danger text-decoration-none" name="ExitOnClick" href="require/exit.php">Выйти</a></li>

                    <?php
                }
                else{
                    ?>
           <li><a href="log.php" class="text-green text-decoration-none">Авторизация</a></li>
                    <?php
                }
                ?>

            <li><a href="#" class="text-white text-decoration-none">Товары</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="index.php" class="navbar-brand d-flex align-items-center">
        <strong>Copy Star</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>


</body>
