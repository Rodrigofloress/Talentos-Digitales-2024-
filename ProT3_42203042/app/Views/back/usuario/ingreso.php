<div class="form_ingreso" style="display: flex; justify-content: center; align-items: center; height: 70vh;">


    <!-- Inicio formulario de ingreso -->
    <form method="post" action="<?php echo base_url('/enviar_ingreso') ?>" class="card" style="width: 400px; padding: 20px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);">

     <!-- Mensaje de error -->
     <?php if(session()->getFlashdata('msg')): ?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>


        <h3 class="card-title text-center" style="color: #343a40; margin-bottom: 20px;">Iniciar sesión</h3>
<div>
        <div class="form-group" style="margin-bottom: 15px;">
            <input type="text" class="datoingreso form-control" name="email" placeholder="Correo electrónico o número de teléfono" style="border-radius: 5px;">
        </div>

        <div class="form-group" style="margin-bottom: 15px;">
            <input type="password" class="datoingreso form-control" name="pass" placeholder="Ingresa tu contraseña" style="border-radius: 5px;">
        </div>
        
             <input type="submit" value="Ingresar" class="datoingreso btn btn-primary">
             <input type="reset" value="Cancelar" class="datoingreso btn btn-secondary">

        
        </div>


        <div class="datoingreso text-center" style="margin-top: 20px;">
            <p style="color: #343a40;">¿Aún no te registraste? <a href="<?php echo base_url('/registro')?>" style="color: #007bff;">Registrarse</a></p>
            <p style="color: #343a40;">¿Olvidaste la contraseña? <a href="#" style="color: #007bff;">Recuperar contraseña</a></p>
        </div>
    </form>
</div>
