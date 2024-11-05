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
    <h1>Kurssienhallinta: Opiskelijat</h1>
    <?php
        if (!isset($_GET['id'])) {
            include("opiskelijat-list.php");
        } else {
            echo '<a href="opiskelijat.php">Palaa listaan</a>';
            include("opiskelija-info.php");
        }
    ?>
    </main>
</body>
</html>