<?php
include_once "config.php";

  // Get the username and password from the POST request
  $name = $_POST["nama_pekerja"];
  $nokp = $_POST["no_kp"];

  // Check if the username and password are valid
  $sql = "SELECT * FROM pekerja WHERE nama_pekerja = '$name' AND no_kp = '$nokp'";
  $result = mysqli_query($db, $sql);

  // Close the database connection
  mysqli_close($db);

  // If the username and password are valid
  if ($result->num_rows == 1) {
    // The user is logged in
    session_start();
    $_SESSION["nama_pekerja"] = $name;
    header("location: index.php");
  } else {
    // The username and password are not valid
    echo "The username or password is incorrect.";
  }
?>