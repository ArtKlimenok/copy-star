<?php require_once 'require/header.php' ?>
<title>О нас</title> 
<body>
<main>

<div class="container-sm mb-5">

<?php
 if(isset($_SESSION['message'])){
     echo '    <p class="msg"> ' . $_SESSION['message'] . '</p>';
 }
 unset($_SESSION['message']);
    ?>
    
  <div class="py-5 text-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
        <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
        <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
        </svg>
    <h1 class="display-5 fw-bold">Copy Star</h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Группа компаний "Copy Star", несмотря на высокую конкуренцию, практически сразу вошла в топ поставщиков печатного оборудования. Мы постарались сделать удобный и функциональный сайт, который помогает клиентам получить максимально полную информацию о товаре. Постоянно растущее количество покупателей — лучший показатель нашей работы.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <form action="log.php">
          <button class="btn btn-info btn-lg px-4 gap-3">Войти</button>
          </form>
        </div>
      </div>
    </div>
  
    <hr>
<h3 class="text-center mt-4 mb-4">Товары</h3>
    <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="assets/img/1.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Норм принтер</h5>
        <p class="card-text">Пример товара для сайта Copy Star - 1</p>
        <button type="button" class="btn btn-info">В корзину</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <img src="assets/img/2.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Хороший принтер</h5>
        <p class="card-text">Пример товара для сайта Copy Star - 2</p>
        <button type="button" class="btn btn-info">В корзину</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <img src="assets/img/3.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Отличный принтер</h5>
        <p class="card-text">Пример товара для сайта Copy Star - 3</p>
        <button type="button" class="btn btn-info">В корзину</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
    <img src="assets/img/4.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Мегапринтер</h5>
        <p class="card-text">Пример товара для сайта Copy Star - 4</p>
        <button type="button" class="btn btn-info">В корзину</button>
      </div>
    </div>
  </div>
</div>
  

</div>

</main>
</body>