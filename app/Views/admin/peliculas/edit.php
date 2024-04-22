<?= $this->extend('template/template')?>
<?= $this->section('contenido')?>
<form action="/dashboard/pelicula/update/<?= $pelicula['id'] ?>" method="post">
<fieldset>
  <legend>Información de la película</legend>
<?php echo view('admin/peliculas/_form',['op'=>'Actualizar']);?>

</fieldset>
</form>
<?= $this->endSection()?>