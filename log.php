<?php require_once 'require/header.php' ?>
<title>Вход</title> 
<body class="text-center">
<main>
<div class="mx-auto mt-5" style="width: 400;">
<div class="card" style="width: 25rem;">
    <main class="form-signin">
      <form action="control/signin.php" class="mt-5 ms-5 me-5" method="post">
        <h1 class="h3 mb-3 fw-normal">Авторизация</h1>
    
        <div class="form-floating mb-3">
          <input name="login" type="login" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Логин</label>
        </div>

        <div class="form-floating">
          <input name="password" type="password" class="form-control" id="Password" placeholder="Password">
          <label for="Password">Пароль</label>
        </div>
        
        <button class="mt-3 w-100 btn btn-lg btn-info" type="submit">Войти</button>
        <p class="h5 mt-3 mb-3 fw-normal">Еще нету аккаунта?</p>
        <a href="reg.php" class="h5 mt-3 mb-3 fw-normal text-decoration-none">Регистрация</a>
        <p class="mt-5 mb-3 text-muted">&copy; Copy Star 2022</p>
      </form>
    </main>
</div> 
</div>  
    
        
      </body>