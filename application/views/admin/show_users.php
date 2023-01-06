
<?php if($msg = $this->session->flashdata('msg')):?>
<div class="alert alert-success text-center" role="alert">
  <?= $msg?>
</div>
<?php endif ; ?>
<h1 class="text-center">Tabla de lista de usuarios registrados</h1>


<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Usuario</th>
            <th scope="col">Correo</th>
            <th scope="col">Status</th>
            <th scope="col">Rango</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $item) : ?>
            <tr>
                <th scope="row"><?= $item->id_usuario ?></th>
                <td><?= $item->nombre_usuario ?></td>
                <td><?= $item->correo ?></td>
                <td><?= $item->status == 1 ? 'activo' : 'inactivo'; ?></td>
                <td><?= $item->range ?></td>
                <td><a href="<?= base_url('users/edit/'.$item->id_usuario)?>" class="btn btn-outline-success">Editar</a> / <a href="#" id="delete" data-id="<?= $item->id_usuario?>" class="btn btn-outline-danger">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->pagination->create_links();?>