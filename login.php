<?php
session_start();

// Provera da li je korisnik već registrovan i da li su podaci iz forme poslati
if (isset($_SESSION['registered']) && isset($_POST['username']) && isset($_POST['password'])) {
    // Povezivanje s bazom podataka
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "knjizara_registracija";

    // Kreiranje konekcije
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Provera konekcije
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Provera korisničkih podataka u bazi
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM korisnici WHERE username='$username' AND password_reg='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Prijavljivanje uspešno, preusmeravanje korisnika na index.php
        unset($_SESSION['registered']);
        header('Location: index.php');
        exit;
    } else {
        // Prijavljivanje neuspešno, prikaz poruke korisniku
        echo '<script>alert("Please register first");</script>';
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Stranica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container login">
        <div class="transfer">
            <button class="loginTransfer"><a href="login.php">Login Form</a></button>
            <a href="register.php"><button class="loginTransfer">Register Form</button></a>
        </div>
        <h1>Login</h1>
        <form action="" method="post">
            <input placeholder="Enter your username" type="text" id="username" name="username" required><br>
            <input placeholder="Enter your password" type="password" id="password" name="password" required><br>
            <button type="submit">Login</button>
        </form>
    </div>

    <?php include 'footer.php'; ?>
    
</body>
</html>
