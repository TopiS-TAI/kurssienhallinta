<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurssienhallinta</title>
</head>
<body>
    <header>
        <?php
            include("nav.html");
        ?>
    </header>
    <main>
    <h1>Kurssienhallinta: Opiskelijat</h1>
    <?php
        include("opiskelijat-list.php");
    ?>
    </main>
</body>
</html>