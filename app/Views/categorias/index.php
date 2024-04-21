<?= $this->extend('template/template')?>
<?= $this->section('titulo')?>  Página de inicio  <?php echo $this->endSection()?>
<?= $this->section('contenido')?>
<style type='text/css'>
*{margin:0px;padding:0px;}
table{border-collapse:collapse;width:100%;}
table td{border:solid 1px #CCC;padding:1em 0px;}
table caption{font-family:Arial, Helvetica, sans-serif;font-size:0.9em;font-weight:bold;color:#999;background-color:#CCC;padding:0px 0px 20px;border:solid 1px #999;}
table tbody{font-family:"Courier New", Courier, monospace;border-collapse:collapse;font-size:0.9em;}
table thead{background-color:#999;background:url(/images/fondo.png) repeat-x;}
table #delete{padding: 0px 0.5em;text-align: center;height: 2em;}
</style>

    <div>
    <a href="/dashboard/categoria/new">Crear Categoría</a>

        <table>
         <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th colspan="3">Opciones</th>
            </tr>
        </thead>
            <?php
            foreach($categoria as $key=> $c):
                echo
                "<tr>".
                "<td>".$c['titulo']."</td>
                <td>".$c['descripcion']."</td>
                 <td>
                    <a href='/dashboard/categoria/show/".$c['id']."'>Ver</a>
                </td>
                <td>
                    <a href='/dashboard/categoria/edit/".$c['id']."'>Editar</a>
                </td>
                <td>

                    <form action='/dashboard/categoria/delete/".$c['id']."' method='post'>
                        <input id='delete' type='submit' value='Eliminar'>
                    </form>

                </td>
                </tr>";
            endforeach;
            ?>
        </table>
    </div>
    <?= $this->endSection()?>