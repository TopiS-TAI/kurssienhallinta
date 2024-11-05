<?php
    $id = $_GET['id'];
    include("connect.php");
    $sql = "SELECT o.*, k.nimi, k.aloituspaiva, k.lopetuspaiva, t.nimi AS tilan_nimi
    FROM kurssit k, opettajat o, tilat t
    WHERE k.opettaja = ?
    AND k.opettaja = o.id
    AND k.tila = t.id;";
    $query = $conn->prepare($sql);
    $query->execute([$id]);
    $courses = $query->fetchall();

    $sql = "SELECT * FROM opettajat WHERE id = ?";
    $query = $conn->prepare($sql);
    $query->execute([$id]);
    $teacher = $query->fetch();
    $etunimi = htmlspecialchars($teacher['etunimi']);
    $sukunimi = htmlspecialchars($teacher['sukunimi']);
    $aine = htmlspecialchars($teacher['aine']);
?>
<h2><?php echo "{$id} {$etunimi} {$sukunimi}";?></h2>
<p>Aine: <?php echo $aine; ?></p>
<h3>Kurssit:</h3>
<?php
    if (count($courses)) {
        echo "<ul>";
        foreach ($courses as $course) {
            echo "<li>";
            echo htmlspecialchars($course['nimi']);
            echo ' ';
            echo date_format(date_create($course['aloituspaiva']), 'd.y.Y');
            echo ' - ';
            echo date_format(date_create($course['lopetuspaiva']), 'd.y.Y');
            echo ' Tila: ';
            echo htmlspecialchars($course['tilan_nimi']);
            echo '</li>';
        }
        echo "</ul>";
    } else {
        echo "<p>Ei kursseja</p>";
    }
?>
