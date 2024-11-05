<table>
    <tbody>
        <thead>
            <tr>
                <th>Tilan nimi</th>
            </tr>
        </thead>
<?php
    include("connect.php");
    $sql = "SELECT * FROM tilat";
    $query = $conn->prepare($sql);
    $query->execute();
    $tilat = $query->fetchAll();

    foreach($tilat as $tila) { ?>
        <tr>
            <td><a href="tilat.php?id=<?php echo $tila['id'] ?>"><?php echo htmlspecialchars($tila['nimi']);?></a></td>
        </tr>
    <?php }
?>
</tbody>
    </table>