
<?= $this->extend('template/template')?>
<?= $this->section('contenido')?>


<label for="titulo"class="form-label">Título</label>
    <input type="text" name="titulo" id="titulo" placeholder="Título" value="<?= $categoria['titulo'] ?>" class="form-control">

    <label for="descripcion" class="form-label">Descripción</label>
    <textarea name="descripcion" id="" cols="30" rows="10" placeholder="Descripción" class="form-control">
    <?= $categoria['descripcion'] ?>
    </textarea>

<table>
<td>
    <a href='/dashboard/categoria/edit/<?=$categoria['id']?>'>Editar</a>
</td>
<td>
    <form action='/dashboard/categoria/delete/<?=$categoria['id']?>' method='post'>
        <input id='delete' type='submit' value='Eliminar'>
    </form>
</td>
</table>

<?= $this->endSection()?>