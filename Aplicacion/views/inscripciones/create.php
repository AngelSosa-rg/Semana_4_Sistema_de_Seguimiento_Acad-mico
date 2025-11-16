<?php include_once __DIR__ . "/../layouts/header.php"; ?>

<div class="card shadow-sm">
    <div class="card-body">
        <h2 class="card-title mb-4">Nueva Inscripción</h2>

        <form action="<?= $baseUrl ?>?url=inscripciones/guardar" method="POST" class="row g-3">

            <div class="col-md-6">
                <label class="form-label">Estudiante</label>
                <select name="estudiante_id" class="form-select" required>
                    <option value="">-- Seleccione --</option>
                    <?php foreach ($estudiantes as $e): ?>
                        <option value="<?= $e['id'] ?>">
                            <?= htmlspecialchars($e['nombre'] . ' ' . ($e['apellido'] ?? '')) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label">Materia</label>
                <select name="materia_id" class="form-select" required>
                    <option value="">-- Seleccione --</option>
                    <?php foreach ($materias as $m): ?>
                        <option value="<?= $m['id'] ?>">
                            <?= htmlspecialchars($m['nombre']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label">Periodo</label>
                <input type="text" name="periodo"
                       placeholder="2025-1, 2025-2, etc."
                       class="form-control">
            </div>

            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-success">
                    Guardar
                </button>
                <a href="<?= $baseUrl ?>?url=inscripciones" class="btn btn-secondary">
                    Cancelar
                </a>
            </div>

        </form>
    </div>
</div>

<?php include_once __DIR__ . "/../layouts/footer.php"; ?>
