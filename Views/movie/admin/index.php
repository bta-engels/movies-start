
<h3>Filmtitel</h3>
<!-- link button für neunen datensatz -->
<a class="btn btn-primary mb-3" href="/movies/edit">Neuer Movie</a>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Filmtitel</th>
        <th>Preis</th>
        <th colspan="2"></th>
    </tr>
    <?php foreach ($data as $item): ?>
        <tr>
            <td><?php echo $item['id'] ?></td>
            <td><a href="/movies/<?php echo $item['id']?>">
                    <?php echo $item['title']?></a></td>
            <td><a href="/movies/<?php echo $item['id']?>">
                    <?php echo $item['price'] ?></a></td>

            <td><a class="btn btn-primary" href="/movies/edit/<?php echo $item['id']; ?>">Edit</a></td>
            <td><a class="btn btn-danger delsoft" href="/movies/delete/<?php echo $item['id']; ?>">Delete</a></td>
        </tr>
    <?php endforeach ?>
</table>
