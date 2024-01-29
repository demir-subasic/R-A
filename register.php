<?php
session_start();

// Provera da li je korisnik već registrovan, ako jeste, preusmeri ga na login stranicu
if (isset($_SESSION['registered'])) {
    header('Location: login.php');
    exit;
}

// Provera da li je forma za registraciju submitovana
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Provera da li su sva polja popunjena
    $required_fields = ['first_name', 'last_name', 'username', 'birth_place', 'birth_country', 'birth_date', 'jmbg', 'mobile', 'email', 'password_reg', 'confirm_password'];
    $error = false;

    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            $error = true;
            break;
        }
    }

    if ($error) {
        echo '<script>alert("Fill in all fields");</script>';
    } else {
        // Učitavanje i konfiguracija baze
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

        // Priprema i izvršavanje upita za unos podataka u bazu
        $sql = "INSERT INTO korisnici (first_name, last_name, username, birth_place, birth_country, birth_date, jmbg, mobile, email, password_reg)
        VALUES ('".$_POST["first_name"]."', '".$_POST["last_name"]."', '".$_POST["username"]."', '".$_POST["birth_place"]."', '".$_POST["birth_country"]."', '".$_POST["birth_date"]."', '".$_POST["jmbg"]."', '".$_POST["mobile"]."', '".$_POST["email"]."', '".$_POST["password_reg"]."')";

        if ($conn->query($sql) === TRUE) {
            // Postavljanje sesije kao registrovanog korisnika
            $_SESSION['registered'] = true;

            // Preusmeravanje korisnika na login stranicu nakon registracije
            header('Location: login.php');
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Stranica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container register">
        <div class="transfer">
            <a href="login.php"><button class="loginTransfer">Login Form</button></a>
            <a href="register.php"><button class="loginTransfer">Register Form</button></a>
        </div>
        <h1>Register</h1>
        <form action="" method="post">
            <label for="first_name">First Name:</label><br>
            <input type="text" id="first_name" name="first_name" required><br>
            <label for="last_name">Last Name:</label><br>
            <input type="text" id="last_name" name="last_name" required><br>
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="birth_place">Place of Birth:</label><br>
            <input type="text" id="birth_place" name="birth_place" required><br>
            <label for="birth_country">Country of Birth:</label><br>
            <input type="text" id="birth_country" name="birth_country" required><br>
            <label for="birth_date">Date of Birth:</label><br>
            <input type="date" id="birth_date" name="birth_date" required><br>
            <label for="jmbg">JMBG:</label><br>
            <input type="text" id="jmbg" name="jmbg" required><br>
            <label for="mobile">Mobile:</label><br>
            <input type="text" id="mobile" name="mobile" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="password_reg">Password:</label><br>
            <input type="password" id="password_reg" name="password_reg" pattern="^(?=.*[A-Z])(?=.*\d).{6,}$" required><br>
            <small>Password must contain at least one uppercase letter and one digit, and be at least 6 characters long.</small><br>
            <label for="confirm_password">Confirm Password:</label><br>
            <input type="password" id="confirm_password" name="confirm_password" required><br>
            <button type="submit">Register</button>
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
