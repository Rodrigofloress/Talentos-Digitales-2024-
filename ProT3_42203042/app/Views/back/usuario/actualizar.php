<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Editar Usuario</h2>
        </div>
        <div class="form_registro d-flex justify-content-center align-items-center mt-2 mb-2" style="min-height: 80vh;">
            <?php if (session()->getFlashdata('fail')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('fail') ?></div>
            <?php endif; ?>
            
            <form action="<?= base_url('/actualizar') ?>" method="post" class="card" style="width: 400px; padding: 20px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);">
                <input type="hidden" name="id_usuario" value="<?= $usuario['id_usuario'] ?>">
                
<div style="margin-bottom: 1rem;">

                <div class="form-group" style="margin-bottom: 15px;">
                    <label for="nombre">Nombres:</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" value="<?= $usuario['nombre'] ?>" required>
                </div>
                
                <div class="form-group" style="margin-bottom: 15px;">
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" class="form-control" value="<?= $usuario['apellido'] ?>" required>
                </div>
                
                <div class="form-group" style="margin-bottom: 15px;">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" value="<?= $usuario['email'] ?>" required>
                </div>
                
                <div class="form-group" style="margin-bottom: 15px;">
                    <label for="telefono">Teléfono:</label>
                    <input type="text" id="telefono" name="telefono" class="form-control" value="<?= $usuario['telefono'] ?>">
                </div>
                
                <div class="form-group" style="margin-bottom: 15px;">
                    <label for="usuario">Usuario:</label>
                    <input type="text" id="usuario" name="usuario" class="form-control" value="<?= $usuario['usuario'] ?>" required>
                </div>
                
                <div class="form-group" style="margin-bottom: 15px;">
                    <label for="pass">Contraseña:</label>
                    <input type="password" id="pass" name="pass" class="form-control" placeholder="Dejar en blanco para no cambiar">
                </div>
                

                <button type="submit" class="btn btn-success">Actualizar</button>

                <a href="<?= base_url('listado') ?>" class="btn btn-danger">Cancelar</a>
                </div>
            
            </form>
        </div>
    </div>
</div>
