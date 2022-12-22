<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Welcome, user!</title>
  </head>
  <body> 
    <?php
      if (isset($_SESSION['login'])) {
    ?>
    <div class="container">
      <h1>Welcome, user!</h1>
      <img src="https://t3.ftcdn.net/jpg/02/20/14/38/360_F_220143804_fc4xRygvJ8bn8JPQumtHJieDN4ORNyjs.jpg" alt="">
      <br><a href="vendor/redirect.php">Выйти</a>
    </div>
    <?php
    } else {
    ?>
    <div class="contrainer">
      <p style="font-size: 96px;">Error</p>
    </div>
    <?php
    } ?>
    <script src="scripts/bootstrap.bundle.min.js"></script>
  </body>
</html>