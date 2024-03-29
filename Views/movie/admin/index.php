
<h3>Movie Liste</h3>
<!-- link button für neunen datensatz -->
<a class="btn btn-primary mb-3" href="/movies/edit">Neues Movie</a>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Autor</th>
        <th>Titel</th>
        <th>Preis</th>
        <th colspan="2"></th>
    </tr>
    <?php foreach($data as $item): ?>
    <tr>
        <td><?php echo $item['id']; ?></td>
        <td><?php echo $item['author']; ?></td>
        <td><a href="http://movies-start.loc/movies/<?php echo $item['id']; ?>"><?php echo $item['title']; ?></a></td>
        <td><?php echo $item['price']; ?> €</td>
        
        <td><a class="btn btn-primary" href="/movies/edit/<?php echo $item['id']; ?>">Edit</a></td>
        <td><a class="btn btn-danger delsoft" href="/movies/delete/<?php echo $item['id']; ?>">Delete</a></td>
    </tr>
    <?php endforeach; ?>
</table>
