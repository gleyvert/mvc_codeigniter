<form action="">
    <h3>Datos de la cuenta</h3>
    <hr>
    <div class="form-group">
        <div class="form-row">
            <div class="col-7">
                <label for="">Nombre Usuario</label>
                <input type="text" name="usuario" class="form-control" placeholder="Inserte nombre">
            </div>
            <div class="col">
                <label for="">Correo</label>
                <input type="text" name="correo" class="form-control" placeholder="Inserte el correo">
            </div>
            <div class="col">
                <label for="">Rango de usuario</label>
                <select name="range" id="" class="custom-select">
                    <option selected value="">Seleccione el rango</option>
                    <option value="admin">Administrador</option>
                    <option value="user">Usuario</option>
                </select>
            </div>
        </div>
    </div>

</form>