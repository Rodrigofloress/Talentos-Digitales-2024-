<div class="form_registro d-flex justify-content-center align-items-center" style="min-height: 80vh;">

    <?php $validation = \Config\Services::validation(); ?>

    <!-- inicia el form de registro -->

    <form method="post" action="<?php echo base_url('enviar_registro') ?>" class="card mb-4 mt-4" style="width: 400px; padding: 20px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);">

        <?= csrf_field(); ?>

        <?php if (!empty(session()->getFlashdata('fail'))) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
        <?php endif ?>

        <?php if (!empty(session()->getFlashdata('success'))) : ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>

            <script>
                setTimeout(function() {
                    window.location.href = "<?php echo base_url('ingreso'); ?>";
                }, 1000);
            </script>



        <?php endif ?>

        <h3 class="card-title text-center" style="color: #343a40; margin-bottom: 20px;">BIENVENIDO</h3>
        <h4 class="card-title text-center" style="color: #343a40; margin-bottom: 20px;">Registrar Usuario</h4>

        <div style="margin-bottom: 1rem;">

            <div class="form-group" style="margin-bottom: 15px;">
                <input type="text" class="datoregistro form-control" name="nombre" placeholder="Nombres" style="border-radius: 5px;">

                <!-- Validación de errores para el campo 'nombre' -->
                <?php if ($validation->getError('nombre')) {?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('nombre'); ?>
                    </div>
                <?php }?>
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <input type="text" class="datoregistro form-control" name="apellido" placeholder="Apellidos" style="border-radius: 5px;">

                <!-- Validación de errores para el campo 'apellido' -->
                <?php if ($validation->getError('apellido')) {?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('apellido'); ?>
                    </div>
                <?php }?>
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <input type="email" class="datoregistro form-control" name="email" placeholder="Correo electrónico" style="border-radius: 5px;">

                <!-- Validación de errores para el campo 'email' -->
                <?php if ($validation->getError('email')) {?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('email'); ?>
                    </div>
                <?php }?>
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <input type="tel" class="datoregistro form-control" name="telefono" placeholder="Teléfono celular" style="border-radius: 5px;">

                <!-- Validación de errores para el campo 'telefono' -->
                <?php if ($validation->getError('telefono')) {?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('telefono'); ?>
                    </div>
                <?php }?>
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <input type="text" class="datoregistro form-control" name="usuario" placeholder="Crea tu nombre de usuario" style="border-radius: 5px;">

                <!-- Validación de errores para el campo 'usuario' -->
                <?php if ($validation->getError('usuario')) {?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('usuario'); ?>
                    </div>
                <?php }?>
            </div>

            <div class="form-group" style="margin-bottom: 15px;">
                <input type="password" class="datoregistro form-control" name="pass" placeholder="Crea tu contraseña (mínimo 5 caracteres)" style="border-radius: 5px;">

                <!-- Validación de errores para el campo 'contraseña' -->
                <?php if ($validation->getError('pass')) {?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('pass'); ?>
                    </div>
                <?php }?>
            </div>


            <input type="submit" value="Guardar" class="datoregistro btn btn-primary">
            <input type="reset" value="Cancelar" class="datoregistro btn btn-secondary">

        </div>

        <div class="datoregistro text-center" style="margin-top: 20px;">
            <p style="color: #343a40;">¿Ya tienes tu Usuario? <a href="<?php echo base_url('ingreso') ?>" style="color: #007bff;">Ingresar</a></p>
        </div>

    </form>

</div>