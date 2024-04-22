<?= $this->extend('template/template')?>
<?= $this->section('contenido')?>
<form action="/dashboard/categoria/create" method="post">
    <fieldset>
        <legend>Crear categoría</legend>
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" placeholder="Título">

            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" id="" cols="30" rows="10" placeholder="Descripción"></textarea>

            <input type="submit" value="Guardar">
        </fieldset>
</form>

<?= $this->endSection()?>