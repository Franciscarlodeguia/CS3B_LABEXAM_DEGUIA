<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($_SESSION['user'])) {
        $storedUser = $_SESSION['user'];

        if ($storedUser['username'] == $username && password_verify($password, $storedUser['password'])) {
           
            header('Location: loggedin.php');
            exit;
        } else {
            
            echo "<p style='color: red;'>Invalid username or password. <a href='index.html'>Try again</a></p>";
        }
    } else {
        echo "<p style='color: red;'>No registered user found. <a href='index.html'>Register first</a></p>";
    }
} else {
    echo '
    <html>
    </head>
    <body style="font-family: Arial, sans-serif;">
        <form method="POST" action="">
            <h2>Log In</h2>
            Username: <br><input type="text" name="username" required><br><br>
            Password: <br><input type="password" name="password" required><br><br>
            <button type="submit">Log In</button>
        </form>
    </body>
    </html>
    ';
}
?>