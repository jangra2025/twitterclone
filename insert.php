<?php
include "db.php";

$username = $_POST['username'];
$content  = $_POST['content'];

$query = "INSERT INTO tweets (username, content) VALUES ('$username', '$content')";
mysqli_query($conn, $query);

header("Location: index.php");
?>
