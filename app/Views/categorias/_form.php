
    <label for="titulo" class="form-label">Título</label>
    <input type="text" name="titulo" id="titulo" placeholder="Título" value="<?= $categoria['titulo'] ?>" class="form-control">

    <label for="descripcion" class="form-label">Descripción</label>
    <textarea name="descripcion" id="" cols="30" rows="10" placeholder="Descripción" class="form-control">
    <?= $categoria['descripcion'] ?>
    </textarea>

    <input type="submit" value="<?= $op ?>" class="btn btn-primary">
