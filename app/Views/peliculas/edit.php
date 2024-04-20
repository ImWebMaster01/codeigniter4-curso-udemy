<?= $this->extend('template/template')?>
<?= $this->section('contenido')?>
<form action="/pelicula/update/<?= $pelicula['id'] ?>" method="post">
<fieldset>
  <legend>Información de la película</legend>
<?php echo view('peliculas/_form',['op'=>'Actualizar']);?>

</fieldset>
</form>
<?= $this->endSection()?>