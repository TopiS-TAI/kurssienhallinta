<section class="kurssit">
<?php
    include("connect.php");
    $sql = "SELECT k.id, k.nimi, k.kuvaus, k.aloituspaiva, k.lopetuspaiva, 
        oj.etunimi AS oj_etunimi, 
        oj.sukunimi AS oj_sukunimi,
        t.nimi AS t_nimi,
        GROUP_CONCAT(ok.etunimi, ' ', ok.sukunimi) as ok_nimet
        FROM kurssit k
        JOIN opettajat oj ON k.opettaja = oj.id
        JOIN kurssikirjautumiset kk ON kk.kurssi = k.id
        JOIN opiskelijat ok ON kk.opiskelija = ok.id
        JOIN tilat t ON k.tila = t.id
        GROUP BY k.id;";
    $query = $conn->prepare($sql);
    $query->execute();
    $kurssit = $query->fetchAll();

    foreach($kurssit as $kurssi) { ?>
        <div class="kurssi-info">
            <h2><?php echo htmlspecialchars($kurssi['nimi']);?></h2>
            <div class="kurssi-detaljit">
                <p><?php echo htmlspecialchars($kurssi['oj_etunimi'] . " " . $kurssi['oj_sukunimi']);?></p>
                <p><?php echo date_format(date_create($kurssi['aloituspaiva']), "d.m.Y");?>–<?php echo date_format(date_create($kurssi['lopetuspaiva']), "d.m.Y");?></p>
                <p><?php echo htmlspecialchars($kurssi['t_nimi']);?></p>
            </div>
            <p class="kurssi-kuvaus"><?php echo htmlspecialchars($kurssi['kuvaus']);?></p>
            <details class="kurssi-opiskelijat">
                <summary>Opiskelijat</summary>
                <ul>
                <?php 
                    $opiskelijat = explode(",", $kurssi['ok_nimet']);
                    foreach ($opiskelijat as $opiskelija) {
                        echo '<li>' . htmlspecialchars($opiskelija) . '</li>';
                    }?>
                </ul>
            </details>
        </div>
    <?php }
?>
</section>