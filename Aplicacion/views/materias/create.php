<?php include_once __DIR__ . "/../layouts/header.php"; ?>

<div class="card shadow-sm">
    <div class="card-body">
        <h2 class="card-title mb-4">Nueva Materia</h2>

        <form action="<?= $baseUrl ?>?url=materias/guardar" method="POST" class="row g-3">

            <div class="col-md-4">
                <label class="form-label">Código</label>
                <input type="text" name="codigo" class="form-control" required>
            </div>

            <div class="col-md-8">
                <label class="form-label">Nombre de la Materia</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>

            <div class="col-12">
                <label class="form-label">Descripción</label>
                <textarea name="descripcion" rows="3" class="form-control"></textarea>
            </div>

            <div class="col-md-6">
                <label class="form-label">Docente</label>
                <select name="docente_id" class="form-select" required>
                    <option value="">-- Seleccione --</option>
                    <?php foreach ($docentes as $d): ?>
                        <option value="<?= $d['id'] ?>">
                            <?= htmlspecialchars($d['nombre'] . ' ' . $d['apellido']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-success">
                    Guardar
                </button>
                <a href="<?= $baseUrl ?>?url=materias" class="btn btn-secondary">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</div>

<?php include_once __DIR__ . "/../layouts/footer.php"; ?>
