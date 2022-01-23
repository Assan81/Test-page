<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>index.php</title>
</head>
<body>
<div class="container d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">It Proger</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="#">Главная</a>
      <a class="p-2 text-dark" href="#">Контакты</a>
    </nav>
    <a class="btn btn-outline-primary" href="/auth.php">Войти</a>
  </div>  <div class="container mt-5">
    <h3 class="mb-5">Наши статьи</h3>
    <div class="d-flex flex-wrap">
    <?php
      for($i = 0; $i<5; $i++): ?>
      <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Free</h4>
      </div>
      <div class="card-body">
        <img src="img/<?php echo ($i+1) ?>.jpg" alt="" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li>10 users included</li>
          <li>2 GB of storage</li>
          <li>Email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block 
        btn-outline-primary">Подробнее</button>
      </div>
    </div>
    <?php endfor; ?>
    <div>
  </div>
  <div class="container mt-5" >
  <h3>Контактная информация</H3>
  <form action="check.php" method="post"> 
      <input type="email" name="email" placeholder="Введите email" class="form-control" > <br>
      <textarea name="message" id="" class="form-control" placeholder="Введите сообщение" ></textarea><br>
      <button class="btn btn-success"  type="submit" name="send" target="_blank">Отправить</button>
    </form>
</div> 
  <?php require "blocks/footer.php"?>
</body>
</html>