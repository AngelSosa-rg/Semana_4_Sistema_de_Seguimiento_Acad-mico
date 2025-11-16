<?php include_once __DIR__ . "/../layouts/header.php"; ?>

<div class="card shadow-sm">
    <div class="card-body">
        <h2 class="card-title mb-4">Editar Nota</h2>

        <form action="<?= $baseUrl ?>?url=notas/actualizar" method="POST" class="row g-3">

            <input type="hidden" name="id" value="<?= htmlspecialchars($nota['id']) ?>">

            <div class="col-12">
                <label class="form-label">Inscripción (Estudiante - Materia)</label>
                <select name="inscripcion_id" class="form-select" required>
                    <?php foreach ($inscripciones as $i): ?>
                        <option value="<?= $i['id'] ?>"
                            <?= ($i['id'] == $nota['inscripcion_id']) ? 'selected' : '' ?>>
                            <?= htmlspecialchars($i['estudiante_nombre'] . ' ' . $i['estudiante_apellido'] . ' - ' . $i['materia_nombre']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label">Tipo de nota</label>
                <input type="text" name="tipo"
                       class="form-control"
                       value="<?= htmlspecialchars($nota['tipo']) ?>"
                       required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Valor</label>
                <input type="number" name="valor"
                       class="form-control"
                       min="0" max="20" step="0.01"
                       value="<?= htmlspecialchars($nota['valor']) ?>"
                       required>
            </div>

            <div class="col-md-4">
                <label class="form-label">Peso (%)</label>
                <input type="number" name="peso"
                       class="form-control"
                       min="0" max="100" step="1"
                       value="<?= htmlspecialchars($nota['peso']) ?>"
                       required>
            </div>

            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-success">
                    Actualizar
                </button>
                <a href="<?= $baseUrl ?>?url=notas" class="btn btn-secondary">
                    Cancelar
                </a>
            </div>

        </form>
    </div>
</div>

<?php include_once __DIR__ . "/../layouts/footer.php"; ?>
