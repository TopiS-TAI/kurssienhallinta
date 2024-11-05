<table>
    <tbody>
        <thead>
            <tr>
                <th>Opettajan nimi</th>
                <th>Aine</th>
            </tr>
        </thead>
<?php
    include("connect.php");
    $sql = "SELECT * FROM opettajat";
    $query = $conn->prepare($sql);
    $query->execute();
    $opettajat = $query->fetchAll();

    foreach($opettajat as $ope) { ?>
        <tr>
            <td><a href="opettajat.php?id=<?php echo $ope['id']; ?>"><?php echo htmlspecialchars($ope['etunimi'] . " " . $ope['sukunimi']);?></a></td>
            <td><?php echo htmlspecialchars($ope['aine']);?></td>
        </tr>
    <?php }
?>
</tbody>
    </table>