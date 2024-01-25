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

    <div class="container">
        <h1>Login</h1>
        <form action="" method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br>
            <button type="submit">Login</button>
        </form>
        <p>You do not have an account? <a href="register.php">Click to register</a></p>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
