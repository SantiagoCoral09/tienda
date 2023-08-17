<?php echo $this->extend('index'); ?>


<?php echo $this->section('content'); ?>
<!-- Aqui va el contenido de la nueva vista -->
<div class="container">
    <br>
    <h1>Listado de categorías</h1><br>
    <a href="<?php echo base_url(); ?>categorias/registrar" type="button" class="btn btn-success">Agregar</a>

    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as  $categoria) :?>
            <tr>
                <th scope="row"><?php echo $categoria['id']; ?></th>
                <td><?php echo $categoria['nom_categoria']; ?></td>
                <td><?php echo $categoria['des_categoria']; ?></td>
                <td>
                    <a type="button" class="btn btn-primary" href="<?php echo base_url().'categorias/editar/'.$categoria['id'];?>">Editar</a>
                    <a type="button" class="btn btn-danger" href="<?php echo base_url().'categorias/eliminar/'.$categoria['id'];?>">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php echo $this->endSection(); ?>