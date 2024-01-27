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
            <!-- Ovde dodaj kod za prikaz preporučenih knjiga -->
        </div>
        
        <div class="promotion">
            <h2>Trenutne Promocije</h2>
            <!-- Ovde dodaj kod za prikaz trenutnih promocija -->
        </div>
        
        <div class="promotion">
            <h2>Cene Na Snizenju</h2>
            <!-- Ovde dodaj kod za prikaz cena koje su na sniženju -->
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
