<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = trim($_POST['username']);
  $password = $_POST['password'];
  
  $lines = file("users.txt", FILE_IGNORE_NEW_LINES);
  $userFound = false;

  foreach ($lines as $line) {
    list($storedUsername, $storedEmail, $storedHash) = explode('|', $line);
    if ($storedUsername === $username && password_verify($password, $storedHash)) {
      $userFound = true;
      break;
    }
  }

  if ($userFound) {
    header("Location: results.html");
    exit;
  } else {
    echo "Invalid username or password.";
  }
}
?>
