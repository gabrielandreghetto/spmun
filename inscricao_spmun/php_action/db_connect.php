<?php

  $servername = "localhost";
  $username = "root";
  $password = "root";
  $db_name = "mun_insc";

  $connect = mysqli_connect($servername, $username, $password, $db_name);
  mysqli_set_charset($connect, "utf8");

  if (mysqli_connect_error()) {
    echo "Falha - ".mysqli_connect_error();
  }

?>
