<?php include_once __DIR__ . "/../layouts/header.php"; ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Listado de Estudiantes</h2>
    <a href="<?= $baseUrl ?>?url=estudiantes/crear" class="btn btn-primary btn-sm">
        + Nuevo Estudiante
    </a>
</div>

<table class="table table-striped table-bordered table-sm align-middle">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th style="width: 150px;">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($estudiantes)): ?>
            <?php foreach ($estudiantes as $e): ?>
                <tr>
                    <td><?= htmlspecialchars($e['id']) ?></td>
                    <td><?= htmlspecialchars($e['nombre'] . ' ' . ($e['apellido'] ?? '')) ?></td>
                    <td><?= htmlspecialchars($e['email']) ?></td>
                    <td>
                        <a href="<?= $baseUrl ?>?url=estudiantes/editar/<?= $e['id'] ?>"
                           class="btn btn-warning btn-sm">
                            Editar
                        </a>
                        <a href="<?= $baseUrl ?>?url=estudiantes/eliminar/<?= $e['id'] ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('¿Seguro que deseas eliminar este estudiante?');">
                            Eliminar
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4" class="text-center">No hay estudiantes registrados</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php include_once __DIR__ . "/../layouts/footer.php"; ?>