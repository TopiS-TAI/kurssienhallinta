<?php
    $times = [8, 9, 10, 11, 12, 13, 14, 15, 16];
    $days = ["ma", "ti", "ke", "to", "pe", "la", "su"];
    $id = $_GET['id'];
    $year = $_GET['year'];
    $week = $_GET['week'];
    include("connect.php");

    $sql = "SELECT kk.*, k.nimi, k.aloituspaiva, k.lopetuspaiva 
        FROM kurssit k, kurssikirjautumiset kk 
        WHERE kk.opiskelija = ? 
        AND k.id = kk.kurssi;";
    $query = $conn->prepare($sql);
    $query->execute([$id]);
    $courses = $query->fetchall();

    foreach ($courses as $course) {
        if (!isset($earliest) or $course['aloituspaiva'] < $earliest) { $earliest = $course['aloituspaiva'];}
        if (!isset($latest) or $course['lopetuspaiva'] > $latest) { $latest = $course['lopetuspaiva'];}
    }
    
    $start_week = date_create($earliest)->format('W');
    $start_year = date_create($earliest)->format('o');
    $end_week = date_create($latest)->format('W');
    $end_year = date_create($latest)->format('o');

    $sql = "SELECT s.kurssi, s.viikonpaiva, s.aloitusaika, s.lopetusaika, k.nimi, k.aloituspaiva, k.lopetuspaiva, os.etunimi
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
<p><?php echo $earliest . ' - ' . $latest?></p>
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

<?php
    if (!isset($week)) {$week = $start_week;}
    if (!isset($year)) {$year = $start_year;}
    $cal_start = new DateTime('midnight');
    $cal_start->setISODate($year, $week);
    $cal_start_immutable = DateTimeImmutable::createFromMutable($cal_start);
?>
<table class="calendar">
    <caption>
        <a href="opiskelijat.php?id=<?php echo $id; ?>&year=<?php echo $year; ?>&week=<?php echo $week - 1; ?>">&#10094;</a>
        <span>Viikko <?php echo $week . " " . $cal_start->format("d.m.Y");?></span>
        <a href="opiskelijat.php?id=<?php echo $id; ?>&year=<?php echo $year; ?>&week=<?php echo $week + 1; ?>">&#10095;</a>
    </caption>
    <thead>
        <tr>
            <th></th>
            <th colspan="<?php echo count($sess_list) ?>">Ma<br><?php echo $cal_start_immutable->modify("+0 day")->format("d.m.Y") ?></th>
            <th colspan="<?php echo count($sess_list) ?>">Ti<br><?php echo $cal_start_immutable->modify("+1 day")->format("d.m.Y") ?></th>
            <th colspan="<?php echo count($sess_list) ?>">Ke<br><?php echo $cal_start_immutable->modify("+2 day")->format("d.m.Y") ?></th>
            <th colspan="<?php echo count($sess_list) ?>">To<br><?php echo $cal_start_immutable->modify("+3 day")->format("d.m.Y") ?></th>
            <th colspan="<?php echo count($sess_list) ?>">Pe<br><?php echo $cal_start_immutable->modify("+4 day")->format("d.m.Y") ?></th>
            <th colspan="<?php echo count($sess_list) ?>">La<br><?php echo $cal_start_immutable->modify("+5 day")->format("d.m.Y") ?></th>
            <th colspan="<?php echo count($sess_list) ?>">Su<br><?php echo $cal_start_immutable->modify("+6 day")->format("d.m.Y") ?></th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($times as $time) {
                echo "<tr><th>" . $time . "</th>";
                foreach ($days as $i => $day) {
                    foreach ($sess_list as $sess) {
                        // echo "<td>";
                        $found_session = false;
                        foreach ($sess as $j=>$session) {
                            if (
                                $session['viikonpaiva'] == $day
                                and $session['aloitusaika'] <= $time
                                and $session['lopetusaika'] >= $time
                                and date_create($session['aloituspaiva']) <= $cal_start_immutable->modify("+{$i} day")
                                and date_create($session['lopetuspaiva']) >= $cal_start_immutable->modify("+{$i} day")
                                ) {
                                echo "<td class='course-{$session['kurssi']}'>" . $session['nimi'] . "</td>";
                                $found_session = true;
                            }
                        }
                        if (!$found_session) { echo "<td></td>";}
                        // echo "</td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </tbody>
</table>


