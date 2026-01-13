<?php
$conn = mysqli_connect("localhost", "root", "", "db");

if (!$conn) {
  die("Connection failed");
}
