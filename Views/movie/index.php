<h3>Filmen Liste</h3>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Titel</th>
        <th>Preis</th>
    </tr>
    <?php foreach ($data as $item): ?>
    <?php $val = '€';?>
        <tr>
            <td><?php echo $item['id'] ?></td>
            <td><a href="/movies/<?php echo $item['id']?>">
                    <?php echo $item['title'] ?></a></td>
            <td> <?php echo $item['price'],' ',$val ?></td>
        </tr>
    <?php endforeach ?>
</table>