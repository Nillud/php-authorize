<?php
  session_start();
  require_once '../config/connection.php';

  if (!empty($_SESSION['login'])) {
    session_destroy();
  }
  
  header('Location: /');
?>