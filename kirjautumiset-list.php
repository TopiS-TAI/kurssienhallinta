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
    $sql = "SELECT kurssikirjautumiset.kirjautumisaika, opiskelijat.etunimi, opiskelijat.sukunimi, kurssit.nimi FROM kurssikirjautumiset, opiskelijat, kurssit WHERE kurssikirjautumiset.kurssi = kurssit.id AND kurssikirjautumiset.opiskelija = opiskelijat.id ORDER BY kurssit.nimi;";
    $query = $conn->prepare($sql);
    $query->execute();
    $kirjautumiset = $query->fetchAll();

    foreach($kirjautumiset as $key=>$kirjautuminen) { ?>
        <tr>
            <td><?php
                    if ($key == 0 or $kirjautumiset[$key - 1]['nimi'] != $kirjautumiset[$key]['nimi']) {
                        echo htmlspecialchars($kirjautuminen['nimi']);
                    }
                ?></td>
            <td><?php echo htmlspecialchars($kirjautuminen['etunimi'] . " " . $kirjautuminen['sukunimi']);?></td>
            <td><?php echo date_format(new DateTime($kirjautuminen['kirjautumisaika']), "d.m.Y h:m");?></td>
        </tr>
    <?php }
?>
</tbody>
    </table>