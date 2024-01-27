<?php
session_start();

// Provera da li je korisnik uspešno registrovan i da li su podaci iz forme poslati
if (isset($_SESSION['registered']) && isset($_POST['username']) && isset($_POST['password'])) {
    // Obriši sesiju nakon što se prikaže poruka korisniku
    unset($_SESSION['registered']);
    echo '<script>alert("Successfully logged in!");</script>';
    // Pretpostavljamo da je prijava uspešna, pa preusmeravamo korisnika na index.php
    header('Location: index.php');
    exit;
}
 else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ako forma nije ispunjena ili korisnik nije registrovan, prikaži odgovarajuću poruku
    echo '<script>alert("Users does not exist");</script>';
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
        <h1>Login </h1>
        <form action="" method="post">
            <input placeholder="Enter your username" type="text" id="username" name="username" required><br>
            <input placeholder="Enter your password" type="password" id="password" name="password" required><br>
            <button type="submit">Login</button>
        </form>
    </div>

    <?php include 'footer.php'; ?>
    <button onclick="scrollToTop()" id="scrollToTopBtn" title="Go to top">Scroll to the top</button>

    <script>
        function scrollToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0; 
        }
    </script>
</body>
</html>
