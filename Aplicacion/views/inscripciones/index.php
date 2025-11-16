<?php include_once __DIR__ . "/../layouts/header.php"; ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Inscripciones</h2>
    <a href="<?= $baseUrl ?>?url=inscripciones/crear" class="btn btn-primary btn-sm">
        + Nueva Inscripción
    </a>
</div>

<table class="table table-striped table-bordered table-sm align-middle">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Estudiante</th>
            <th>Materia</th>
            <th>Periodo</th>
            <th style="width: 170px;">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($inscripciones)): ?>
            <?php foreach ($inscripciones as $i): ?>
                <tr>
                    <td><?= htmlspecialchars($i['id']) ?></td>
                    <td><?= htmlspecialchars($i['estudiante_nombre'] . ' ' . $i['estudiante_apellido']) ?></td>
                    <td><?= htmlspecialchars($i['materia_nombre']) ?></td>
                    <td><?= htmlspecialchars($i['periodo'] ?? '') ?></td>
                    <td>
                        <a href="<?= $baseUrl ?>?url=inscripciones/editar/<?= $i['id'] ?>"
                           class="btn btn-warning btn-sm">
                            Editar
                        </a>
                        <a href="<?= $baseUrl ?>?url=inscripciones/eliminar/<?= $i['id'] ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('¿Seguro que deseas eliminar esta inscripción?');">
                            Eliminar
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5" class="text-center">No hay inscripciones registradas</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php include_once __DIR__ . "/../layouts/footer.php"; ?>
