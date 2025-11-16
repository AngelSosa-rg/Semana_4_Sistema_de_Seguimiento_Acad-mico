<?php include_once __DIR__ . "/../layouts/header.php"; ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Materias</h2>
    <a href="<?= $baseUrl ?>?url=materias/crear" class="btn btn-primary btn-sm">
        + Nueva Materia
    </a>
</div>

<table class="table table-striped table-bordered table-sm align-middle">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Código</th>
            <th>Nombre</th>
            <th>Docente</th>
            <th>Descripción</th>
            <th style="width: 170px;">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($materias)): ?>
            <?php foreach ($materias as $m): ?>
                <tr>
                    <td><?= htmlspecialchars($m['id']) ?></td>
                    <td><?= htmlspecialchars($m['codigo']) ?></td>
                    <td><?= htmlspecialchars($m['nombre']) ?></td>
                    <td>
                        <?= htmlspecialchars(($m['docente_nombre'] ?? '') . ' ' . ($m['docente_apellido'] ?? '')) ?>
                    </td>
                    <td><?= htmlspecialchars($m['descripcion'] ?? '') ?></td>
                    <td>
                        <a href="<?= $baseUrl ?>?url=materias/editar/<?= $m['id'] ?>"
                           class="btn btn-warning btn-sm">
                            Editar
                        </a>
                        <a href="<?= $baseUrl ?>?url=materias/eliminar/<?= $m['id'] ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('¿Seguro que deseas eliminar esta materia?');">
                            Eliminar
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6" class="text-center">No hay materias registradas</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php include_once __DIR__ . "/../layouts/footer.php"; ?>
