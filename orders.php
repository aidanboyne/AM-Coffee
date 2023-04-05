<?php
    session_name("AM");
    session_start();

    if (isset($_POST['username'])) {
        header("Location: confirmation.php");
    }
    $db = new SQLite3('orders.db');
    $statement = 'CREATE TABLE IF NOT EXISTS orders(username TEXT, coffee TEXT, size TEXT, milk TEXT, sweetener TEXT, appt TEXT)';
    $db->exec($statement);

    if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $coffee = $_POST['coffee'];
    $size = $_POST['size'];
    $milk = $_POST['milk'];
    $sweetener = $_POST['sweetener'];
    $appt = $_POST['time'];
    $statement = "INSERT INTO orders (username, coffee, size, milk, sweetener, appt) VALUES ('$username', '$coffee', '$size', '$milk', '$sweetener', '$appt')";
    $db->exec($statement);

    $_SESSION['username'] = $username;
    }

    $db->close();
?>