<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurssienhallinta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Kukrssienhallinta</h2>
    <header>
        <?php
            include("nav.html");
        ?>
    </header>
    <main>
    <h1>Kurssienhallinta: Kurssit</h1>
    <?php
        include("kurssit-list.php");
    ?>
    </main>
</body>
</html>