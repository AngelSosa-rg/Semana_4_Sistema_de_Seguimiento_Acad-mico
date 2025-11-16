<?php include_once __DIR__ . "/../layouts/header.php"; ?>

<div class="card shadow-sm">
    <div class="card-body">
        <h2 class="card-title mb-4">Editar Estudiante</h2>

        <form action="<?= $baseUrl ?>?url=estudiantes/actualizar" method="POST" class="row g-3">

            <input type="hidden" name="id" value="<?= htmlspecialchars($estudiante['id']) ?>">

            <div class="col-md-6">
                <label class="form-label">Código</label>
                <input type="text" name="codigo" 
                       value="<?= htmlspecialchars($estudiante['codigo'] ?? '') ?>" 
                       class="form-control">
            </div>

            <div class="col-md-6">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" 
                       value="<?= htmlspecialchars($estudiante['nombre']) ?>" 
                       class="form-control" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Apellido</label>
                <input type="text" name="apellido" 
                       value="<?= htmlspecialchars($estudiante['apellido'] ?? '') ?>" 
                       class="form-control">
            </div>

            <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" name="email" 
                       value="<?= htmlspecialchars($estudiante['email']) ?>" 
                       class="form-control" required>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-success">
                    Actualizar
                </button>

                <a href="<?= $baseUrl ?>?url=estudiantes" class="btn btn-secondary">
                    Cancelar
                </a>
            </div>

        </form>
    </div>
</div>

<?php include_once __DIR__ . "/../layouts/footer.php"; ?>
