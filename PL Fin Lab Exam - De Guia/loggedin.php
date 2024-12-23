<?php
session_start();

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    ?>
    <!DOCTYPE html>
    <html>
    <body style="font-family: sans-serif;">
        <div>
            <h2>Welcome <?php echo $user['first_name'] . " " . $user['last_name']; ?></h2>
            <p>Birthdate: <b><?php echo $user['birthdate']; ?></b></p>
            <p>Email Address: <b><?php echo $user['email']; ?></b></p>
            <p>Phone Number: <b><?php echo $user['phone']; ?></b></p>
            <a href="index.html" style="text-decoration:none;"><div style="width: 100px;
                                                                           color: white;
                                                                           padding: 10px;
                                                                           text-align: center;
                                                                           background:rgb(170, 0, 0);
                                                                           border-radius: 5px;">Log Out</div></a>
            
        </div>
    </body>
    </html>
    <?php
} else {
    header('Location: index.html');
    exit;
}
?>