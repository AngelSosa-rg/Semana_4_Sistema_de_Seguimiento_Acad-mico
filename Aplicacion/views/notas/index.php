<?php include_once __DIR__ . "/../layouts/header.php"; ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Notas de Estudiantes</h2>
    <a href="<?= $baseUrl ?>?url=notas/crear" class="btn btn-primary btn-sm">
        + Registrar Nota
    </a>
</div>

<table class="table table-striped table-bordered table-sm align-middle">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Estudiante</th>
            <th>Materia</th>
            <th>Periodo</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Peso (%)</th>
            <th style="width: 170px;">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($notas)): ?>
            <?php foreach ($notas as $n): ?>
                <tr>
                    <td><?= htmlspecialchars($n['id']) ?></td>
                    <td><?= htmlspecialchars($n['estudiante_nombre'] . ' ' . $n['estudiante_apellido']) ?></td>
                    <td><?= htmlspecialchars($n['materia_nombre']) ?></td>
                    <td><?= htmlspecialchars($n['periodo'] ?? '') ?></td>
                    <td><?= htmlspecialchars($n['tipo']) ?></td>
                    <td><?= htmlspecialchars($n['valor']) ?></td>
                    <td><?= htmlspecialchars($n['peso']) ?></td>
                    <td>
                        <a href="<?= $baseUrl ?>?url=notas/editar/<?= $n['id'] ?>"
                           class="btn btn-warning btn-sm">
                            Editar
                        </a>
                        <a href="<?= $baseUrl ?>?url=notas/eliminar/<?= $n['id'] ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('¿Seguro que deseas eliminar esta nota?');">
                            Eliminar
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="8" class="text-center">No hay notas registradas</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php include_once __DIR__ . "/../layouts/footer.php"; ?>
