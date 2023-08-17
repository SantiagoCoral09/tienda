<?php echo $this->extend('index'); ?>


<?php echo $this->section('content'); ?>
<!-- Aqui va el contenido de la nueva vista -->
<div class="container">
    <br>
    <h1>Registro de categorías</h1><br>
    <form method="post" action="<?php echo base_url(); ?>categorias/registrar">
    <div class="mb-3">
        <label for="nom_categoria" class="form-label">Nombre Categoria</label>
        <input type="text" class="form-control" id="nom_categoria" name="nom_categoria" placeholder="Ingrese el nombre de la categoria">
    </div>
    <div class="mb-3">
        <label for="des_categoria" class="form-label">Desscripcion de la categoria</label>
        <textarea class="form-control" id="des_categoria" name="des_categoria" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Registrar</button>
    </form>
</div>

<?php echo $this->endSection(); ?>