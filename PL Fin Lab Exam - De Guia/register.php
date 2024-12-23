<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $errors = [];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $birthdate = $_POST['birthdate'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    if (empty($firstName) || empty($lastName) || empty($birthdate) || empty($username) || empty($password) || empty($confirmPassword) || empty($email) || empty($phone)) {
        $errors[] = "All fields are required.";
    }

    if ($password !== $confirmPassword) {
        $errors[] = "Password and Confirm Password do not match.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }

    if (empty($errors)) {
        $_SESSION['user'] = [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'birthdate' => $birthdate,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'email' => $email,
            'phone' => $phone
        ];

        echo "<div class='container'><h3>Registration Successful! <a href='index.html'>Go back</a></h3></div>";
    } else {
        echo "<div class='container'>";
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
        echo "</div>";
    }
} else {
    echo '
    <html>
    <body style="font-family: sans-serif;">
        <div class="homeBox">
            <h2>Register</h2>
            <form method="POST" action="">
                <label for="first_name">Name</label><br>
                <input type="text" id="first_name" name="first_name" placeholder="first name" required>
                <label for="last_name"></label>
                <input type="text" id="last_name" name="last_name" placeholder="last name" required><br><br>

                <label for="birthdate">Birthdate</label><br>
                <input type="date" id="birthdate" name="birthdate" required><br><br>

                <label for="username">Username</label><br>
                <input type="text" id="username" name="username" required><br><br>

                <label for="password">Password</label><br>
                <input type="password" id="password" name="password" required><br><br>

                <label for="confirm_password">Confirm Password</label><br>
                <input type="password" id="confirm_password" name="confirm_password" required><br><br>

                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" required><br><br>

                <label for="phone">Phone</label><br>
                <input type="text" id="phone" name="phone" required><br><br>

                <button type="submit">Register</button>
            </form>
        </div>
    </body>
    </html>
    ';
}
?>