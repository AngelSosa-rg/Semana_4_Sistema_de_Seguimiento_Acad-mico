<?php include_once __DIR__ . "/../layouts/header.php"; ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Docentes</h2>
    <a href="<?= $baseUrl ?>?url=docentes/crear" class="btn btn-primary btn-sm">
        + Nuevo Docente
    </a>
</div>

<table class="table table-striped table-bordered table-sm align-middle">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th style="width: 170px;">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($docentes)): ?>
            <?php foreach ($docentes as $d): ?>
                <tr>
                    <td><?= htmlspecialchars($d['id']) ?></td>
                    <td><?= htmlspecialchars($d['nombre'] . ' ' . $d['apellido']) ?></td>
                    <td><?= htmlspecialchars($d['email'] ?? '') ?></td>
                    <td><?= htmlspecialchars($d['telefono'] ?? '') ?></td>
                    <td>
                        <a href="<?= $baseUrl ?>?url=docentes/editar/<?= $d['id'] ?>"
                           class="btn btn-warning btn-sm">
                            Editar
                        </a>
                        <a href="<?= $baseUrl ?>?url=docentes/eliminar/<?= $d['id'] ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('¿Seguro que deseas eliminar este docente?');">
                            Eliminar
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5" class="text-center">No hay docentes registrados</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?php include_once __DIR__ . "/../layouts/footer.php"; ?>
