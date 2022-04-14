<?php require_once 'require/header.php' ?>
<?php
session_start();
if(isset($_SESSION['user'])){
    header('location: /');}
?>
    <title>Регистрация</title> 
<body class="text-center">
  <div class="mx-auto mt-5" style="width: 400;">
    <div class="card" style="width: 30rem;">
      <main class="form-signin">

        <form class="mt-5 ms-5 me-5" action="control/signup.php" method="post">
          <h1 class="h3 mb-3 fw-normal">Регистрация</h1>
      
          <div class="input-group mb-3">
                <span class="input-group-text col-5" id="inputGroup-sizing-default">Имя*</span>
                <input placeholder='Иван' name="name" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="name" required>
          </div>

          <div class="input-group mb-3">
                <span class="input-group-text col-5" id="inputGroup-sizing-default">Фамилия*</span>
                <input placeholder='Пушилин-Дружинин' name="surname" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="surname" required>
          </div>

          <div class="input-group mb-3">
                <span class="input-group-text col-5" id="inputGroup-sizing-default">Отчество</span>
                <input placeholder='Иванов' name="patronymic" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="patronymic">
          </div>

          <div class="input-group mb-3">
                <span class="input-group-text col-5" id="inputGroup-sizing-default">Логин*</span>
                <input placeholder='mega-ivan22' name="login" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="loginReg"required>
          </div>
          
          <div class="input-group mb-3">
                <span class="input-group-text col-5" id="inputGroup-sizing-default">Email*</span>
                <input placeholder='ivan22@gmail.com' name="email" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="email" required>
          </div>

          <div class="input-group mb-3">
                <span class="input-group-text col-5" id="inputGroup-sizing-default">Пароль*</span>
                <input placeholder='Не меньше 6 символов' name="password" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="passwordReg"required>
          </div>

          <div class="input-group mb-3">
                <span class="input-group-text col-5" id="inputGroup-sizing-default">Повторите пароль*</span>
                <input placeholder='Повторите пароль' name="password_repeat" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="password_repeat"required>
          </div>
          <label>Разрешить обработку персональных данных</lable>
          <input type="checkbox" class="check" required/><label for="agree-reg"> </lable>
          <div class="row mb-3"><div class="msg-reg" id = "msgReg"></div></div>


                        <?php
                        if(isset($_SESSION['message'])){
                        echo '    <p class="alert alert-danger"> ' . $_SESSION['message'] . '</p>';}
                        unset($_SESSION['message']);
                        ?>


          <button class="mt-3 w-100 btn btn-lg btn-info" type="submit">Зарегистрироваться</button>

                <p class="h5 mt-3 mb-3 fw-normal">Уже есть аккаунт?</p>
                <a href="log.php" class="h5 mt-3 mb-3 fw-normal text-decoration-none">Авторизация</a>
                <p class="mt-5 mb-3 text-muted">&copy; Copy Star 2022</p>
        </form>

      </main>
    </div> 
  </div>  
</body>
</html>