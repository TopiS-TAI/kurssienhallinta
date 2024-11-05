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
        echo "<table><thead><tr><th>Kurssi</th><th>Aloituspäivä</th><th>Lopetuspäivä</th><th>Tila</th></tr></thead></tbody>";
        foreach ($courses as $course) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($course['nimi']) . "</td>";
            echo "<td>" . date_format(date_create($course['aloituspaiva']), 'd.m.Y') . "</td>";
            echo "<td>" . date_format(date_create($course['lopetuspaiva']), 'd.m.Y') . "</td>";
            echo "<td>" . htmlspecialchars($course['tilan_nimi']) . "</td>";
            echo '</tr>';
        }
        echo "</tbody></table>";
    } else {
        echo "<p>Ei kursseja</p>";
    }
?>
