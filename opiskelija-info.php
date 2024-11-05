<?php
    $times = [8, 9, 10, 11, 12, 13, 14, 15, 16];
    $days = ["ma", "ti", "ke", "to", "pe", "la", "su"];
    $id = $_GET['id'];
    include("connect.php");

    $sql = "SELECT kk.*, k.nimi, k.aloituspaiva, k.lopetuspaiva 
        FROM kurssit k, kurssikirjautumiset kk 
        WHERE kk.opiskelija = ? 
        AND k.id = kk.kurssi;";
    $query = $conn->prepare($sql);
    $query->execute([$id]);
    $courses = $query->fetchall();

    $sql = "SELECT s.kurssi, s.viikonpaiva, s.aloitusaika, s.lopetusaika, k.nimi, os.etunimi
        from sessiot s, kurssikirjautumiset kk, kurssit k, opiskelijat os 
        WHERE s.kurssi = kk.kurssi 
        AND s.kurssi = k.id 
        AND kk.opiskelija = os.id 
        AND os.id = ? 
        GROUP BY s.id 
        ORDER BY s.kurssi, s.viikonpaiva;";
    $query = $conn->prepare($sql);
    $query->execute([$id]);
    $sessions = $query->fetchall();

    $sess_list = [];
    $list = [];
    foreach ($sessions as $key => $session) {
        if ($key == 0) {
            $list = [];
        } elseif ($sessions[$key]['kurssi'] != $sessions[$key - 1]['kurssi']) {
            array_push($sess_list, $list);
            $list = [];
        }
        array_push($list, $session);
    }
    array_push($sess_list, $list);

    $sql = "SELECT * FROM opiskelijat WHERE id = ?";
    $query = $conn->prepare($sql);
    $query->execute([$id]);
    $student = $query->fetch();
    $etunimi = htmlspecialchars($student['etunimi']);
    $sukunimi = htmlspecialchars($student['sukunimi']);
?>
<h2><?php echo "{$id} {$etunimi} {$sukunimi}";?></h2>
<p>Syntymäaika : <?php echo $student['syntymapaiva']; ?></p>
<h3>Kurssit</h3>
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
<h3>Aikataulu</h3>

<table class="calendar">
    <thead>
        <tr>
            <th></th>
            <th colspan="<?php echo count($sess_list) ?>">Ma</th>
            <th colspan="<?php echo count($sess_list) ?>">Ti</th>
            <th colspan="<?php echo count($sess_list) ?>">Ke</th>
            <th colspan="<?php echo count($sess_list) ?>">To</th>
            <th colspan="<?php echo count($sess_list) ?>">Pe</th>
            <th colspan="<?php echo count($sess_list) ?>">La</th>
            <th colspan="<?php echo count($sess_list) ?>">Su</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($times as $time) {
                echo "<tr><th>" . $time . "</th>";
                foreach ($days as $i => $day) {
                    foreach ($sess_list as $sess) {
                        echo "<td>";
                        foreach ($sess as $session) {
                            if ($session['viikonpaiva'] == $day and $session['aloitusaika'] <= $time and $session['lopetusaika'] >= $time) {
                                echo $session['nimi'];
                            }
                        }
                        echo "</td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </tbody>
</table>


