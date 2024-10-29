<table>
    <tbody>
        <thead>
            <tr>
                <th>Kurssin nimi</th>
                <th>Kuvaus</th>
                <th>Aloituspaiva</th>
                <th>Lopetuspaiva</th>
                <th>Opettaja</th>
                <th>Tila</th>
            </tr>
        </thead>
<?php
    include("connect.php");
    $sql = "SELECT kurssit.nimi, kurssit.kuvaus, kurssit.aloituspaiva, kurssit.lopetuspaiva, opettajat.etunimi, opettajat.sukunimi, tilat.nimi AS tilan_nimi FROM kurssit, opettajat, tilat WHERE kurssit.opettaja = opettajat.id AND kurssit.tila = tilat.id";
    $query = $conn->prepare($sql);
    $query->execute();
    $kurssit = $query->fetchAll();

    foreach($kurssit as $kurssi) { ?>
        <tr>
            <td><?php echo htmlspecialchars($kurssi['nimi']);?></td>
            <td><?php echo htmlspecialchars($kurssi['kuvaus']);?></td>
            <td><?php echo date_format(date_create($kurssi['aloituspaiva']), "d.m.Y");?></td>
            <td><?php echo date_format(date_create($kurssi['lopetuspaiva']), "d.m.Y");?></td>
            <td><?php echo htmlspecialchars($kurssi['etunimi'] . " " . $kurssi['sukunimi']);?></td>
            <td><?php echo htmlspecialchars($kurssi['tilan_nimi']);?></td>
        </tr>
    <?php }
?>
</tbody>
    </table>