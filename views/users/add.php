<div class="row">
    <div class="col-xs-12 col-sm-5 col-md-5">
        
    <h4>Agregar usuario</h4>
    <form action="<?php echo APP_URL."/users/add"; ?>" method="POST">
        <div class="form-group">
            <label for="username">Nombre usuario:</label>
            <input class="form-control" type="text" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input class="form-control" type="password" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="type_id">Tipo:</label>
            <!--<input type="text" class="form-control" name="rol">-->
            <select class="form-control" name="type_id" id="type_id">
            <?php foreach ($types as $type): ?>
                <option value="<?php echo $type["types"]["id"]; ?>">
                    <?php echo $type["types"]["name"]; ?>
                </option>
            <?php endforeach; ?>
            </select>
        </div>
        <input class="btn btn-success" type="submit" value="Guardar">
    </form>

    </div>
</div>
