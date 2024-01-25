<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stranica Knjige</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container">
        <h1>Detalji o Knjizi</h1>
        
        <!-- Detalji o pojedinačnoj knjizi -->
        <div class="book-details">
            <h2>Naslov knjige</h2>
            <p>Autor: Autor knjige</p>
            <p>Datum izdavanja: Datum izdavanja knjige</p>
            <p>Opis knjige: Opis knjige</p>
        </div>
        
        <!-- Omogućavanje korisniku da ostavi komentar -->
        <div class="comment-section">
            <h2>Ostavi Komentar</h2>
            <textarea id="comment" name="comment" rows="4" cols="50"></textarea>
            <br>
            <button>Postavi Komentar</button>
        </div>
        
        <!-- Omogućavanje korisniku da lajkuje knjigu -->
        <div class="like-button">
            <button>Like</button>
        </div>
        
        <!-- Omogućavanje korisniku da oznaci knjigu kao omiljenu -->
        <div class="favorite-button">
            <button>Dodaj u Omiljene</button>
        </div>
        
        <!-- Sortiranje knjiga po naslovu, autoru i datumu izdavanja -->
        <div class="sort-section">
            <h2>Sortiranje Knjiga</h2>
            <!-- Forma za sortiranje knjiga -->
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
