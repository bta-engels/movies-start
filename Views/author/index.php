
<h3>Autoren Liste</h3>

<table class="table table-striped">
    <thead>
       <tr>
            <th>ID</th>
            <th>Name</th>
       </tr>
    </thead>
    <tbody>
        <?php foreach($data as $item): ?>
        <tr>
           <td><?php echo $item['id'] ?></td>
           <td>
                <?php
                echo "<a href=\"/authors/$item[id]\">";
                echo $item['firstname'] . ' ' . $item['lastname'];
                echo '</a>';
                ?>
            </td>        
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
