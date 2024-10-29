<table>
    <tbody>
        <thead>
            <tr>
                <th>Kurssi</th>
                <th>Opiskelija</th>
                <th>Kirjautumisaika</th>
            </tr>
        </thead>
<?php
    include("connect.php");
    $sql = "SELECT kk.id, k.nimi as kurssin_nimi, o.etunimi, o.sukunimi, kk.kirjautumisaika
    FROM kurssikirjautumiset kk, opiskelijat o, kurssit k
    WHERE kk.opiskelija = o.id AND kk.kurssi = k.id
    ORDER BY kk.kurssi;";
    $query = $conn->prepare($sql);
    $query->execute();
    $kirjautumiset = $query->fetchAll();

    foreach($kirjautumiset as $key=>$kirjautuminen) { ?>
        <tr>
            <td><?php
                    if ($key == 0 or $kirjautumiset[$key - 1]['kurssin_nimi'] != $kirjautumiset[$key]['kurssin_nimi']) {
                        echo htmlspecialchars($kirjautuminen['kurssin_nimi']);
                    }
                ?></td>
            <td><?php echo htmlspecialchars($kirjautuminen['etunimi'] . " " . $kirjautuminen['sukunimi']);?></td>
            <td><?php echo date_format(new DateTime($kirjautuminen['kirjautumisaika']), "d.m.Y h:m");?></td>
        </tr>
    <?php }
?>
</tbody>
    </table>