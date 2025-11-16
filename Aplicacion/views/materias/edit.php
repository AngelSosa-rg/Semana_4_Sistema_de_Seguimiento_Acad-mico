<?php include_once __DIR__ . "/../layouts/header.php"; ?>

<div class="card shadow-sm">
    <div class="card-body">
        <h2 class="card-title mb-4">Editar Materia</h2>

        <form action="<?= $baseUrl ?>?url=materias/actualizar" method="POST" class="row g-3">

            <input type="hidden" name="id" value="<?= htmlspecialchars($materia['id']) ?>">

            <div class="col-md-4">
                <label class="form-label">Código</label>
                <input type="text" name="codigo"
                       value="<?= htmlspecialchars($materia['codigo']) ?>"
                       class="form-control" required>
            </div>

            <div class="col-md-8">
                <label class="form-label">Nombre de la Materia</label>
                <input type="text" name="nombre"
                       value="<?= htmlspecialchars($materia['nombre']) ?>"
                       class="form-control" required>
            </div>

            <div class="col-12">
                <label class="form-label">Descripción</label>
                <textarea name="descripcion" rows="3"
                          class="form-control"><?= htmlspecialchars($materia['descripcion'] ?? '') ?></textarea>
            </div>

            <div class="col-md-6">
                <label class="form-label">Docente</label>
                <select name="docente_id" class="form-select" required>
                    <option value="">-- Seleccione --</option>
                    <?php foreach ($docentes as $d): ?>
                        <option value="<?= $d['id'] ?>"
                            <?= ($materia['docente_id'] == $d['id']) ? 'selected' : '' ?>>
                            <?= htmlspecialchars($d['nombre'] . ' ' . $d['apellido']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-success">
                    Actualizar
                </button>
                <a href="<?= $baseUrl ?>?url=materias" class="btn btn-secondary">
                    Cancelar
                </a>
            </div>

        </form>
    </div>
</div>

<?php include_once __DIR__ . "/../layouts/footer.php"; ?>
