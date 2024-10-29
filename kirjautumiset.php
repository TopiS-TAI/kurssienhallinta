<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurssienhallinta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <?php
            include("nav.html");
        ?>
    </header>
    <main>
    <h1>Kurssienhallinta: Kirjautumiset</h1>
    <?php
        include("kirjautumiset-list.php");
    ?>
    </main>
</body>
</html>