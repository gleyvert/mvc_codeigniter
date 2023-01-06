<h1>Editando usuario</h1>

<?php echo $user['correo'];?>

<form action="<?=base_url('users/update')?>" method="POST">
    <h3>Datos de la cuenta</h3>
    <hr>
    <div class="form-group">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="">Nombre Usuario</label>
                <input type="text" name="username" value="<?= set_value('username', isset($user['nombre_usuario']) ? $user['nombre_usuario'] : '' ); ?>" class="form-control" placeholder="" readonly>
                <input type="hidden" value="<?= set_value('id_usuario',isset($user['id_usuario']) ? $user['id_usuario'] : '' ) ?>" name="id_usuario">
                <p><?= form_error('user')?></p>
            </div>
            <div class="form-group col-md-4">
                <label for="">Correo</label>
                <input type="text" name="correo" value="<?= set_value('correo', isset($user['correo']) ? $user['correo'] : '')?>" class="form-control" placeholder="" readonly>
                <p><?=form_error('correo')?></p>
            </div>
            <div class="form-group col-md-4">
                <label for="">Status</label>
                <input type="text" name="status" value="<?= set_value('status', isset($user['status']) ? $user['status'] : '')?>" class="form-control" placeholder="" readonly>
            </div>
           <!-- <div class="col">
                <label for="">Rango de usuario</label>
                <select name="range" id="" class="custom-select">
                    <option selected value="">Seleccione el rango</option>
                    <option <?= set_value('range', isset($user['range']) ? $user['range'] : '') == 'admin' ? 'selected' : ''; ?> value="admin">Administrador</option>
                    <option <?= set_value('range', isset($user['range']) ? $user['range'] : '') == 'user' ? 'selected' : ''; ?> value="user">Usuario</option>
                </select>
                <p><?= form_error('range','<p class="text-danger">','</p>')?></p>
            </div>-->
        </div>
        <br>
        <h3>Informacion del usuario</h3>
        <hr>
        <div class="form-row">
            <div class="col-7">
                <label for="">Nombre(s)</label>
                <input type="text" name="nombre" value="<?= set_value('nombre', isset($user['nombre']) ? $user['nombre'] : '') ?>" class="form-control" placeholder="Inserte nombre">
                <?= form_error('nombre', '<p class="text-danger">','</p>')?>
            </div>
            <div class="col">
                <label for="">Apellidos</label>
                <input type="text" name="apellidos" value="<?= set_value('apellidos', isset($user['apellido']) ? $user['apellido'] : ''); ?>" class="form-control" placeholder="Inserte apellido">
                <p><?= form_error('apellidos','<p class="text-danger">','</p>')?></p>
            </div>
            <div class="col">
                <label for="">Area</label>
                <select name="area" class="custom-select" id="">
                    <option selected value="">Seleccione el Area</option>
                    <option <?= set_value('area', isset($user['area']) ? $user['area'] : '') == 'admin' ? 'selected' : ''; ?> value="admin">Medicina general</option>
                    <option <?= set_value('area', isset($user['area']) ? $user['area'] : '') == 'user' ? 'selected' : ''; ?> value="user">Genetica</option>
                    <option <?= set_value('area', isset($user['area']) ? $user['area'] : '') == 'user' ? 'selected' : ''; ?> value="user">Clinica del higado</option>
                </select>
                <p><?= form_error('area','<p class="text-danger">','</p>')?></p>            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-row">
            <div class="col-7">
                <label for="">Especialidad</label>
                <input type="text" name="especialidad" value="<?=set_value('especialidad', isset($user['especialidad']) ? $user['especialidad'] : '') ; ?>"  placeholder="Especialidad" class="form-control">
                <p><?= form_error('especialidad','<p class="text-danger">','</p>')?></p>
            </div>
            <div class="col-5">
                <label for="">Cedula</label>
                <input type="text" name="cedula" value="<?= set_value('cedula', isset($user['cedula']) ? $user['cedula'] : '');?>" placeholder="Cedula" class="form-control">
                <p><?= form_error('cedula','<p class="text-danger">','</p>')?></p>
            </div>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary">
    </div>

</form>