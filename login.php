<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $pass = $_POST["password"];

    if ($user == "admin" && $pass == "1234") {
        echo "<script>
                alert('Login successful!');
                window.location.href='login.html';
              </script>";
    } else {
        echo "<script>
                alert('Invalid username or password.');
                window.location.href='login.html';
              </script>";
    }
}
?>
