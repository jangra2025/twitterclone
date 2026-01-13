<?php
include "db.php";

$id = $_GET['id'];

if (isset($_POST['update'])) {
  $content = $_POST['content'];
  mysqli_query($conn, "UPDATE tweets SET content='$content' WHERE id=$id");
  header("Location: index.php");
}

$tweet = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tweets WHERE id=$id"));
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="container mt-5">

  <form method="POST">
    <textarea name="content" class="form-control"><?= $tweet['content'] ?></textarea>
    <button name="update" class="btn btn-success mt-2">Update Tweet</button>
  </form>

</body>

</html>