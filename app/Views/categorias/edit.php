<?= $this->extend('template/template')?>
<?= $this->section('contenido')?>
<form action="/categoria/update/<?= $categoria['id'] ?>" method="post">
<fieldset>
  <legend>Información de la categoria</legend>
<?php echo view('categorias/_form',['op'=>'Actualizar']);?>

</fieldset>
</form>
<?= $this->endSection()?>