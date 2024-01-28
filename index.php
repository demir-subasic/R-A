<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Početna Stranica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container">
        <h1>Dobrodošli u Online Knjižaru</h1>
        
        <div class="featured-books">
            <h2>Preporučene Knjige</h2>
            <?php
                // PHP kod za prikaz preporučenih knjiga
                // Ovo može biti PHP kod koji iz baze podataka dohvata informacije o knjigama i prikazuje ih
                echo '<div class="book">Naziv knjige 1</div>';
                echo '<div class="book">Naziv knjige 2</div>';
                echo '<div class="book">Naziv knjige 3</div>';
            ?>
        </div>
        
        <div class="promotion">
            <h2>Trenutne Promocije</h2>
            <?php
                // Ovo može biti PHP kod koji iz baze podataka dohvata informacije o knjigama i prikazuje ih
                echo '<div class="book">Naziv knjige 1</div>';
                echo '<div class="book">Naziv knjige 2</div>';
                echo '<div class="book">Naziv knjige 3</div>';
            ?>
        </div>
        
        <div class="promotion">
            <h2>Cene Na Snizenju</h2>
            <?php
                // Ovo može biti PHP kod koji iz baze podataka dohvata informacije o knjigama i prikazuje ih
                echo '<div class="book">Naziv knjige 1</div>';
                echo '<div class="book">Naziv knjige 2</div>';
                echo '<div class="book">Naziv knjige 3</div>';
            ?>
        </div>
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
