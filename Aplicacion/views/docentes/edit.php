<?php include_once __DIR__ . "/../layouts/header.php"; ?>

<div class="card shadow-sm">
    <div class="card-body">
        <h2 class="card-title mb-4">Editar Docente</h2>

        <form action="<?= $baseUrl ?>?url=docentes/actualizar" method="POST" class="row g-3">

            <input type="hidden" name="id" value="<?= htmlspecialchars($docente['id']) ?>">

            <div class="col-md-6">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre"
                       value="<?= htmlspecialchars($docente['nombre']) ?>"
                       class="form-control" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Apellido</label>
                <input type="text" name="apellido"
                       value="<?= htmlspecialchars($docente['apellido']) ?>"
                       class="form-control" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" name="email"
                       value="<?= htmlspecialchars($docente['email'] ?? '') ?>"
                       class="form-control">
            </div>

            <div class="col-md-6">
                <label class="form-label">Teléfono</label>
                <input type="text" name="telefono"
                       value="<?= htmlspecialchars($docente['telefono'] ?? '') ?>"
                       class="form-control">
            </div>

            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-success">
                    Actualizar
                </button>
                <a href="<?= $baseUrl ?>?url=docentes" class="btn btn-secondary">
                    Cancelar
                </a>
            </div>

        </form>
    </div>
</div>

<?php include_once __DIR__ . "/../layouts/footer.php"; ?>
