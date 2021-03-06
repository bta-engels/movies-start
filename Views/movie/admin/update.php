
<?php if(isset($error)): ?>
    <h3 class="text-danger"><?php echo $error; ?></h3>
<?php endif; ?>

<form method="post" enctype="multipart/form-data" action="/movies/store/<?php echo $id ?>">
    <div class="form-group row">
        <label for="author_id" class="col-md-2 col-form-label">Autor</label>
        <div class="col-md-10">
            <select id="author_id" name="author_id" class="form-control col-sm-12 col-md-6 px-1" required>
                <option value="">Bitte wählen</option>
                <?php foreach($authors as $item):
                    $selecetd = ($item['id'] === $data['author_id']) ? 'selected' : '';
                    ?>
                    <option value="<?php echo $item['id']?>" <?php echo $selecetd ?>><?php echo $item['firstname'].' '.$item['lastname'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="title" class="col-md-2 col-form-label">Titel</label>
        <div class="col-md-10">
            <input type="text" value="<?php echo $data['title']; ?>" id="title" name="title" class="form-control col-sm-12 col-md-6 px-1" required />
        </div>
    </div>

    <div class="form-group row">
        <label for="price" class="col-md-2 col-form-label">Preis in €</label>
        <div class="col-md-10">
            <input type="number" value="<?php echo $data['price']; ?>" min="0" step="0.01" id="price" name="price" class="form-control col-sm-12 col-md-6 px-1" required />
        </div>
    </div>

    <div class="form-group row">
        <label for="image" class="col-md-2 col-form-label">Bild <?php echo $data['image']; ?></label>
        <div class="col-md-10">
            <input type="file" id="image" name="image" class="form-control-file col-sm-12 col-md-6 px-1" />
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-auto float-right">
            <button class="btn btn-primary col-md-auto px-5">senden</button>
        </div>
    </div>
</form>

