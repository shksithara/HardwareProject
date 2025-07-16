<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = trim($_POST['username']);
  $email = trim($_POST['email']);
  $password = $_POST['password'];
  $confirm = $_POST['confirm_password'];

  if ($password !== $confirm) {
    echo "Passwords do not match.";
    exit;
  }

  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  $userData = "$username|$email|$hashedPassword\n";

  file_put_contents("users.txt", $userData, FILE_APPEND);
  echo "Registration successful! <a href='index.html'>Go to login</a>";
}
?>
