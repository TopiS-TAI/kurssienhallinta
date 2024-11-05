<?php
    $id = $_GET['id'];
    include("connect.php");
    $sql = "SELECT kk.*, k.nimi, k.aloituspaiva, k.lopetuspaiva FROM kurssit k, kurssikirjautumiset kk WHERE kk.opiskelija = ? AND k.id = kk.kurssi;";
    $query = $conn->prepare($sql);
    $query->execute([$id]);
    $courses = $query->fetchall();

    $sql = "SELECT * FROM opiskelijat WHERE id = ?";
    $query = $conn->prepare($sql);
    $query->execute([$id]);
    $student = $query->fetch();
    $etunimi = htmlspecialchars($student['etunimi']);
    $sukunimi = htmlspecialchars($student['sukunimi']);
?>
<h2><?php echo "{$id} {$etunimi} {$sukunimi}";?></h2>
<p>Syntymäaika : <?php echo $student['syntymapaiva']; ?></p>
<h3>Kurssit:</h3>
<?php
    if (count($courses)) {
        echo "<ul>";
        foreach ($courses as $course) {
            echo "<li>";
            echo htmlspecialchars($course['nimi']);
            echo ' ';
            echo date_format(date_create($course['aloituspaiva']), 'd.m.Y');
            echo ' - ';
            echo date_format(date_create($course['lopetuspaiva']), 'd.m.Y');
            echo '</li>';
        }
        echo "</ul>";
    } else {
        echo "<p>Ei kursseja</p>";
    }
?>
