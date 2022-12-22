<?php
  $connection = mysqli_connect('localhost', 'root', '', 'authorize');

  if (!$connection) {
    die('Connection error');
  }
?>