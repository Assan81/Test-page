<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>about.php</title>
</head>
<body>
<?php require "blocks/header.php"?>
<div class="container mt-5" >
  <h3>Контактная информация</H3>
  <form action="check.php" method="post"> 
      <input type="email" name="email" placeholder="Введите email" class="form-control" > <br>
      <textarea name="message" id="" class="form-control" placeholder="Введите Сообщение" ></textarea><br>
      <button class="btn btn-success"  type="submit" name="send" target="_blank">Отправить</button>
    </form>
</div> 
<?php require "blocks/footer.php"?>
</body>
</html>