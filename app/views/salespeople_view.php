<link href="../../css/bootstrap.css" rel="stylesheet">

<div>
    <?
    $tmp = Model_Salespeople::vir();
    ?>
    <table class="table table-bordered">
        <tr>

            <th>Город</th>
            <th>Процент</th>
            <th>Покупатель</th>
            <th>Рейтинг</th>

        </tr>
        <?
        while ($row = $tmp->fetch()) {
            echo "<tr>

    <td>{$row['city']}</td>
    <td>{$row['comm']}</td>
    <td>{$row['sname']}</td>
    <td>{$row['snum']}</td>


                    </tr>";
        //die();
        }
        ?>
    </table>
</div>