<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if (empty($username) || empty($password)) {
        echo "
        <script>
            alert('Please enter both username and password.');
            window.location.replace('http://localhost/my-e-diary/');
        </script>
        ";
        exit();
    }

    $hashedPassword = password_hash("admin", PASSWORD_DEFAULT); 
    
    if ($username === "admin" && password_verify($password, $hashedPassword)) {
        header("Location: http://localhost/my-e-diary/home.php");
        exit();
    } else {
        echo "
        <script>
            alert('Incorrect username or password. Login Again.');
            window.location.replace('http://localhost/my-e-diary/');
        </script>
        ";
        exit();
    }
}
?>
