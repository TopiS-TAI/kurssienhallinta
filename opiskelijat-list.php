<table>
    <tbody>
        <thead>
            <tr>
                <th>Vuosikurssi</th>
                <th>Opiskelijan nimi</th>
                <th>Syntymäpäivä</th>
            </tr>
        </thead>
<?php
    include("connect.php");
    $sql = "SELECT * FROM opiskelijat ORDER BY vuosikurssi";
    $query = $conn->prepare($sql);
    $query->execute();
    $opiskelijat = $query->fetchAll();

    foreach($opiskelijat as $key=>$opiskelija) { ?>
        <tr class="<?php echo ($key == 0 or $opiskelijat[$key - 1]['vuosikurssi'] != $opiskelijat[$key]['vuosikurssi']) ? 'otsake' : '' ?>">
            <td><?php if ($key == 0 or $opiskelijat[$key - 1]['vuosikurssi'] != $opiskelijat[$key]['vuosikurssi']) { echo htmlspecialchars($opiskelija['vuosikurssi']); }?></td>
            <td><?php echo htmlspecialchars($opiskelija['etunimi'] . " " . $opiskelija['sukunimi']);?></td>
            <td><?php echo date_format(date_create($opiskelija['syntymapaiva']), "d.m.Y");?></td>
        </tr>
    <?php }
?>
</tbody>
    </table>