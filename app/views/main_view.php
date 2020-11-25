<link href="../../css/bootstrap.css" rel="stylesheet">

<div>
    <?
    $tmp = Model_Main::vir();
    ?>
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Продавец</th>
            <th>Город</th>
            <th>Рейтинг</th>
            <th>Индетификатор</th>
        </tr>
        <?
        while ($row = $tmp->fetch()) {
            echo "<tr>

    <td>{$row['cnum']}</td>
    <td>{$row['cname']}</td>
    <td>{$row['city']}</td>
    <td>{$row['rating']}</td>
    <td>{$row['snum']}</td>
    


                    </tr>";
        }
        ?>
    </table>
</div>