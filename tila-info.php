<?php
    $id = $_GET['id'];
    include("connect.php");
    $sql = "SELECT k.nimi AS kurssin_nimi, o.etunimi as o_etunimi, o.sukunimi as o_sukunimi, k.aloituspaiva, k.lopetuspaiva, t.nimi as tilan_nimi, COUNT(kk.opiskelija) AS ilmot
        FROM kurssikirjautumiset kk, kurssit k, tilat t, opettajat o
        WHERE k.id = kk.kurssi
        AND t.id = k.tila
        AND t.id = ?
        AND k.opettaja = o.id
        GROUP BY k.id;";
    $query = $conn->prepare($sql);
    $query->execute([$id]);
    $courses = $query->fetchall();

    $sql = "SELECT * FROM tilat WHERE id = ?";
    $query = $conn->prepare($sql);
    $query->execute([$id]);
    $room = $query->fetch();
    $tilan_nimi = htmlspecialchars($room['nimi']);
?>
<h2><?php echo "{$tilan_nimi}";?></h2>
<p>Kapasiteetti : <?php echo $room['kapasiteetti']; ?></p>
<h3>Kurssit:</h3>
<?php
    if (count($courses)) {
        echo "<table><thead><tr><th>Nimi</th><th>Vastaava opettaja</th><th>Aloituspäivä</th><th>Lopetuspäivä</th><th>Osallistujia</th></tr></thead><tbody>";
        foreach ($courses as $course) {
            echo "<tr class='" . ($course['ilmot'] > $room['kapasiteetti'] ? 'yli' : '') . "'>";
            echo "<td>" . htmlspecialchars($course['kurssin_nimi']) . "</td>";
            echo "<td>" . htmlspecialchars($course['o_etunimi']) . " " . htmlspecialchars($course['o_sukunimi']) . "</td>";
            echo "<td>" . date_format(date_create($course['aloituspaiva']), 'd.m.Y') . "</td>";
            echo "<td>" . date_format(date_create($course['lopetuspaiva']), 'd.m.Y') . "</td>";
            echo "<td>" . $course['ilmot'] . ($course['ilmot'] > $room['kapasiteetti'] ? ' &#9888;' : '') ."</td>";
            echo '</tr>';
        }
        echo "</ul>";
    } else {
        echo "<p>Ei kursseja</p>";
    }
?>
