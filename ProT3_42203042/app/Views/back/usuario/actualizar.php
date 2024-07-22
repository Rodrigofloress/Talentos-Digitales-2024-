<div class="container">
    <div class="center mt-2 d-flex justify-content-center">
        <?php if (!empty(session()->getFlashdata('primary'))) : ?>
            <div class="alert alert-primary text-center"><?= session()->getFlashdata('primary'); ?></div>
        <?php endif ?>
    </div>
    <div class="form_registro d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <?php $validation = \Config\Services::validation(); ?>

        <!-- Formulario de Actualización -->
        <form method="post" action="<?php echo base_url('/actualizar/' . $usuarios->id_usuario) ?>" class="card" style="width: 400px; padding: 20px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);">

            <?= csrf_field(); ?>

            <h4 class="card-title text-center" style="color: #343a40; margin-bottom: 20px;">Editar Usuario</h4>

            <!-- Mensajes de éxito o error -->
            <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
            <?php endif ?>

            <?php if (!empty(session()->getFlashdata('success'))) : ?>
                <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
            <?php endif ?>

            <div style="margin-bottom: 1rem;">
                <div class="form-group" style="margin-bottom: 15px;">
                    <input type="text" class="datoregistro form-control" id="nombre" name="nombre" placeholder="Nombres" style="border-radius: 5px;" value="<?= $usuario->nombre ?>">
                    <!-- Validación de errores para el campo 'nombre' -->
                    <?php if ($validation->getError('nombre')) { ?>
                        <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('nombre'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="form-group" style="margin-bottom: 15px;">
                    <input type="text" class="datoregistro form-control" id="apellido" name="apellido" placeholder="Apellidos" style="border-radius: 5px;" value="<?= $usuario->apellido ?>">
                    <!-- Validación de errores para el campo 'apellido' -->
                    <?php if ($validation->getError('apellido')) { ?>
                        <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('apellido'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="form-group" style="margin-bottom: 15px;">
                    <input type="email" class="datoregistro form-control" id="email" name="email" placeholder="Correo electrónico" style="border-radius: 5px;" value="<?= $usuario->email ?>">
                    <!-- Validación de errores para el campo 'email' -->
                    <?php if ($validation->getError('email')) { ?>
                        <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('email'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="form-group" style="margin-bottom: 15px;">
                    <input type="tel" class="datoregistro form-control" id="telefono" name="telefono" placeholder="Teléfono celular" style="border-radius: 5px;" value="<?= $usuario->telefono ?>">
                    <!-- Validación de errores para el campo 'telefono' -->
                    <?php if ($validation->getError('telefono')) { ?>
                        <div class="alert alert-danger mt-2">
                            <?= $error = $validation->getError('telefono'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="form-group" style="margin-bottom: 15px;">
                    <input type="text" class="datoregistro form-control" id="usuario" name="usuario" placeholder="Crea tu nombre de usuario" style="border-radius: 5px;" value="<?= $usuario->usuario ?>">
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

                <input type="submit" value="Guardar Cambios" class="datoregistro btn btn-success">
                <a href
