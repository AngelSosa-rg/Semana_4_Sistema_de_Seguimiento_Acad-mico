<?php include_once __DIR__ . "/../layouts/header.php"; ?>

<div class="card">
    <div class="card-body">
        <h2 class="card-title mb-3">Nuevo Estudiante</h2>

        <form action="<?= $baseUrl ?>?url=estudiantes/guardar" method="POST" class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Apellido</label>
                <input type="text" name="apellido" class="form-control">
            </div>

            <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="<?= $baseUrl ?>?url=estudiantes" class="btn btn-secondary btn-sm">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<?php include_once __DIR__ . "/../layouts/footer.php"; ?>
