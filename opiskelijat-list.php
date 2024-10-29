<table>
    <tbody>
        <thead>
            <tr>
                <th>Opiskelijan nimi</th>
                <th>Syntymäpäivä</th>
                <th>Vuosikurssi</th>
            </tr>
        </thead>
<?php
    include("connect.php");
    $sql = "SELECT * FROM opiskelijat ORDER BY vuosikurssi";
    $query = $conn->prepare($sql);
    $query->execute();
    $opiskelijat = $query->fetchAll();

    foreach($opiskelijat as $opiskelija) { ?>
        <tr>
            <td><?php echo htmlspecialchars($opiskelija['etunimi'] . " " . $opiskelija['sukunimi']);?></td>
            <td><?php echo date_format(date_create($opiskelija['syntymapaiva']), "d.m.Y");?></td>
            <td><?php echo htmlspecialchars($opiskelija['vuosikurssi']);?></td>
        </tr>
    <?php }
?>
</tbody>
    </table>