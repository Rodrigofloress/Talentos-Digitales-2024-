<div class="container">

  <div class="center mt-2 d-flex justify-content-center">
    <?php if (!empty(session()->getFlashdata('primary'))) : ?>
      <div class="alert alert-primary text-center"><?= session()->getFlashdata('primary'); ?></div>
    <?php endif ?>
  </div>
  <div class="form_registro d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <?php $validation = \Config\Services::validation(); ?>

    <!-- inicia el form de registro----------------------------------------------------------------------------->
    <form method="post" action="<?php echo base_url('crear') ?>" class="card" style="width: 400px; padding: 20px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);">

      <?= csrf_field(); ?>

      <h4 class="card-title text-center" style="color: #343a40; margin-bottom: 20px;">Registrar un Nuevo Usuario</h4>


      <!-- Mensajes de éxito o error------------------------------------------------------------------------ -->
      <?php if (!empty(session()->getFlashdata('fail'))) : ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
      <?php endif ?>

      <?php if (!empty(session()->getFlashdata('success'))) : ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
      <?php endif ?>
      <!-- ---------------------------------------------------------------------------------------------------->

      <div style="margin-bottom: 1rem;">
        <div class="form-group" style="margin-bottom: 15px;">
          <input type="text" class="datoregistro form-control" id="nombre" name="nombre" placeholder="Nombres" style="border-radius: 5px;">
          <!-- Validación de errores para el campo 'nombre' -->
          <?php if ($validation->getError('nombre')) { ?>
            <div class="alert alert-danger mt-2">
              <?= $error = $validation->getError('nombre'); ?>
            </div>
          <?php } ?>
        </div>

        <div class="form-group" style="margin-bottom: 15px;">
          <input type="text" class="datoregistro form-control" id="apellido" name="apellido" placeholder="Apellidos" style="border-radius: 5px;">
          <!-- Validación de errores para el campo 'apellido' -->
          <?php if ($validation->getError('apellido')) { ?>
            <div class="alert alert-danger mt-2">
              <?= $error = $validation->getError('apellido'); ?>
            </div>
          <?php } ?>
        </div>

        <div class="form-group" style="margin-bottom: 15px;">
          <input type="email" class="datoregistro form-control" id="email" name="email" placeholder="Correo electrónico" style="border-radius: 5px;">
          <!-- Validación de errores para el campo 'email' -->
          <?php if ($validation->getError('email')) { ?>
            <div class="alert alert-danger mt-2">
              <?= $error = $validation->getError('email'); ?>
            </div>
          <?php } ?>
        </div>

        <div class="form-group" style="margin-bottom: 15px;">
          <input type="tel" class="datoregistro form-control" id="telefono" name="telefono" placeholder="Teléfono celular" style="border-radius: 5px;">
          <!-- Validación de errores para el campo 'telefono' -->
          <?php if ($validation->getError('telefono')) { ?>
            <div class="alert alert-danger mt-2">
              <?= $error = $validation->getError('telefono'); ?>
            </div>
          <?php } ?>
        </div>

        <div class="form-group" style="margin-bottom: 15px;">
          <input type="text" class="datoregistro form-control" id="usuario" name="usuario" placeholder="Crea tu nombre de usuario" style="border-radius: 5px;">
          <!-- Validación de errores para el campo 'usuario' -->
          <?php if ($validation->getError('usuario')) { ?>
            <div class="alert alert-danger mt-2">
              <?= $error = $validation->getError('usuario'); ?>
            </div>
          <?php } ?>
        </div>

        <div class="form-group" style="margin-bottom: 15px;">
          <input type="password" class="datoregistro form-control" id="pass" name="pass" placeholder="Crea tu contraseña (mínimo 5 caracteres)" style="border-radius: 5px;">
          <!-- Validación de errores para el campo 'contraseña' -->
          <?php if ($validation->getError('pass')) { ?>
            <div class="alert alert-danger mt-2">
              <?= $error = $validation->getError('pass'); ?>
            </div>
          <?php } ?>
        </div>

        <input type="submit" value="Registrar" class="datoregistro btn btn-success">
        <input type="reset" value="Cancelar" class="datoregistro btn btn-danger">
      </div>
    </form>
  </div>

  <hr>

  <!-- -----------------------------INICIA EL LISTADO DE USUARIOS--------------------------------------------- -->
  <h2 style="text-align: center;">Listado de Usuarios</h2>
  <div class="row justify-content-center">
    <div class="col-sm-12">
      <div class="table-responsive">
        <table class="table table-hover table-bordered text-center">
          <thead class="thead-dark">
            <tr>
              <th>NOMBRES</th>
              <th>APELLIDOS</th>
              <th>CORREOS</th>
              <th>TELÉFONOS</th>
              <th>USUARIOS</th>
              <th>CONTRASEÑAS</th>
              <th>PERFILES</th>
              <th>BAJA</th>
              <th>EDITAR</th>
              <th>ELIMINAR</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include "app/Config/conexionCrud.php";
            $sql = $conexion->query("SELECT * FROM usuarios");
            if ($sql->num_rows > 0) {
              while ($datos = $sql->fetch_object()) {
            ?>
                <tr>
                  <td><?php echo $datos->nombre ?></td>
                  <td><?php echo $datos->apellido ?></td>
                  <td><?php echo $datos->email ?></td>
                  <td><?php echo $datos->telefono ?></td>
                  <td><?php echo $datos->usuario ?></td>
                  <td><?php echo $datos->pass ?></td>
                  <td><?php echo $datos->perfil_id ?></td>
                  <td><?php echo $datos->baja ?></td>
                  <td>
                    <a href="<?php echo base_url() . '/editar/' . $datos->id_usuario ?>" class="btn btn-warning btn-sm">Editar</a>
                  </td>
                  <td>
                    <a href="<?php echo base_url('/eliminar/' . $datos->id_usuario); ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</a>
                  </td>
                </tr>
            <?php
              }
            } else {
              echo "<tr><td colspan='10'>No se encontraron usuarios</td></tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!------------------------------------------------------------------------------------------------------------->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>