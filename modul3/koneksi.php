<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "sch";

  $koneksi = new mysqli($servername, $username, $password, $db);

  if ($koneksi->connect_error) {
    die("connection failed: " . $koneksi->connect_error);
  }
?>