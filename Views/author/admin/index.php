
<h3>Autoren Liste</h3>

<!--link button für neuen Datensatz -->
<a class="btn btn-primary mb-3" href="/authors/edit">Neuer Autor</a>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th colspan="2"></th>

    </tr>
    <?php foreach ($data as $item): ?>
        <tr>
            <td><?php echo $item['id'] ?></td>
            <td><?php
                echo "<a href=\"/authors/$item[id]\">";
                echo $item['firstname'] .' '. $item['lastname']
                ?>
                <td><a class="btn btn-primary mb-3" href="/authors/edit/<?php echo $item['id'];?>">Edit</a></td>
                <td><a class="btn btn-danger mb-3" href="/authors/delete/<?php echo $item['id'];?>">Delete</a></td>
            </td>
            <!-- Link definieren für Edit und Delete-->
        </tr>
    <?php endforeach ?>
</table>
