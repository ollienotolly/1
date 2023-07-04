<?php
session_start();
$mysqli = mysqli_connect("localhost", "oqpnhpwx_bd-1", "arolp", "oqpnhpwx_bd-1");

if ($mysqli == false) {
  print("error");
} else {

  $email = trim(mb_strtolower($_POST["email"]));
  $pass = trim($_POST["pass"]);
/*   $pass = password_hash($pass, PASSWORD_DEFAULT); */

  $result = $mysqli->query("SELECT * FROM `basa1` WHERE `email`='$email'");
  $result = $result->fetch_assoc();
  $pass_hash = $result["pass"];
/*   var_dump($result); */

  if (password_verify($pass, $pass_hash)) {
    echo "sucsess";
    $_SESSION["id"] = $result["id"];
    $_SESSION["name"] = $result["name"];
    $_SESSION["lastname"] = $result["lastname"];
    $_SESSION["email"] = $result["email"];
  } else {
    echo "rejected";
    
  }
}

?>