<?php

$mysqli = mysqli_connect("localhost", "oqpnhpwx_basa2", "123456", "oqpnhpwx_basa2");

if ($mysqli == false) {
  print("error");
} else {
/* print("Соединение установлено успешно"); */

  $name = $_POST["name"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $pass = $_POST["pass"];

  $result = $mysqli->query("SELECT * FROM `basa2` WHERE `email`='$email'");
  //var_dump($result->num_rows);
  if ($result->num_rows != 0) {
    print("exist"); //Такой пользователь существует
  } else {
    print("ok"); //Такого пользователя не существует, можно регистрировать
    $mysqli->query("INSERT INTO `basa2`(`name`, `lastname`, `email`, `pass`) VALUES ('$name', '$lastname', '$email', '$pass')");
  }
}

?>