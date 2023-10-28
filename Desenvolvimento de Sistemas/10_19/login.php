<?php
  session_start();
  include("config.php");

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $senha = $_POST["senha"];
  }
?>
