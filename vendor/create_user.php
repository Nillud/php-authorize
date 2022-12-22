<?php
  require_once ("../config/connection.php");

  if (isset($_POST['login'])) { 
    $login = $_POST['login']; 
    
    if ($login == '') { 
      unset($login);
    } 
  }

  if (isset($_POST['password'])) { 
    $password = $_POST['password']; 
    
    if ($password =='') { 
      unset($password);
    } 
  }

  if (empty($login) or empty($password)) {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
  }

  $login = stripslashes($login);
  $login = htmlspecialchars($login);

  $password = stripslashes($password);
  $password = htmlspecialchars($password);

  $login = trim($login);
  $password = trim($password);

  $result = mysqli_query($connection, "SELECT `id` FROM users WHERE `login`='$login'");
  $myrow = mysqli_fetch_array($result);

  if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
  }

  $result2 = mysqli_query($connection, "INSERT INTO `users` (`id`,`login`,`password`) VALUES(NULL,'$login','$password')");

  if ($result2 == true)
  {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='../index.php'>Главная страница</a>";
  } else {
    echo "Ошибка! Вы не зарегистрированы.";
  }
?>