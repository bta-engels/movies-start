
<h3>Filmliste</h3>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Filmtitel</th>
    </tr>
    <?php foreach ($data as $item): ?>
        <tr>
            <td><?php echo $item['id'] ?></td>
            <td><a href="/movies/<?php echo $item['id']?>">
                    <?php echo $item['title']?></a></td>
        </tr>
    <?php endforeach ?>
</table>
