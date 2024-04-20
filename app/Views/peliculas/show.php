
<?= $this->extend('template/template')?>
<?= $this->section('contenido')?>


<label for="titulo"class="form-label">Título</label>
    <input type="text" name="titulo" id="titulo" placeholder="Título" value="<?= $pelicula['titulo'] ?>" class="form-control">

    <label for="descripcion" class="form-label">Descripción</label>
    <textarea name="descripcion" id="" cols="30" rows="10" placeholder="Descripción" class="form-control">
    <?= $pelicula['descripcion'] ?>
    </textarea>

<table>
<td>
    <a href='/pelicula/edit/<?=$pelicula['id']?>'>Editar</a>
</td>
<td>
    <form action='/pelicula/delete/<?=$pelicula['id']?>' method='post'>
        <input id='delete' type='submit' value='Eliminar'>
    </form>
</td>
</table>

<?= $this->endSection()?>