<form action="<?=base_url('users/store')?>" method="POST">
    <h3>Datos de la cuenta</h3>
    <hr>
    <div class="form-group">
        <div class="form-row">
            <div class="col-7">
                <label for="">Nombre Usuario</label>
                <input type="text" name="user" value="<?= set_value('user'); ?>" class="form-control" placeholder="Inserte nombre">
                <p><?= form_error('user')?></p>
            </div>
            <div class="col">
                <label for="">Correo</label>
                <input type="text" name="correo" value="<?=set_value('correo');?>" class="form-control" placeholder="Inserte el correo">
                <p><?=form_error('correo')?></p>
            </div>
            <div class="col">
                <label for="">Rango de usuario</label>
                <select name="range" id="" class="custom-select">
                    <option selected value="">Seleccione el rango</option>
                    <option <?= set_value('range') == 'admin' ? 'selected' : ''; ?> value="admin">Administrador</option>
                    <option <?= set_value('range') == 'user' ? 'selected' : ''; ?> value="user">Usuario</option>
                </select>
                <div class="text-danger"><?= form_error('range') ?></div>
            </div>
        </div>
        <br>
        <h3>Informacion del usuario</h3>
        <hr>
        <div class="form-row">
            <div class="col-7">
                <label for="">Nombre(s)</label>
                <input type="text" name="name" class="form-control" placeholder="Inserte nombre">
            </div>
            <div class="col">
                <label for="">Apellidos</label>
                <input type="text" name="lastname" class="form-control" placeholder="Inserte apellido">
            </div>
            <div class="col">
                <label for="">Area</label>
                <select name="area" class="custom-select" id="">
                    <option selected value="">Seleccione el Area</option>
                    <option <?= set_value('area') == 'admin' ? 'selected' : ''; ?> value="admin">Medicina general</option>
                    <option <?= set_value('area') == 'user' ? 'selected' : ''; ?> value="user">Genetica</option>
                    <option <?= set_value('area') == 'user' ? 'selected' : ''; ?> value="user">Clinica del higado</option>
                </select>
                <div class="text-danger"><?= form_error('area')?></div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="form-row">
            <div class="col-7">
                <label for="">Especialidad</label>
                <input type="text" name="especialidad" <?=set_value('especialidad')?>  placeholder="Especialidad" class="form-control">
            </div>
            <div class="col-5">
                <label for="">Cedula</label>
                <input type="text" name="cedula" <?=set_value('cedula');?> placeholder="Cedula" class="form-control">
                <p><?= form_error('cedula')?></p>
            </div>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary">
    </div>

</form>