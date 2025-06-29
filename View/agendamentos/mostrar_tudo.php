

<?php require_once __DIR__ . '/../../session_start.php'; ?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Agendamentos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">

  <style>
    body { background-color: #e3f2fd; font-family: Arial, sans-serif; padding: 20px; }
    .navbar { background-color: #1976d2; }
    .navbar-brand, .nav-link { color: white !important; }
    .nav-link:hover { text-decoration: underline; }
    h2 { color: #0d47a1; margin-bottom: 20px; }
    table { background: white; }
  </style>
</head>
<body>
<?php require __DIR__ . '/../layout/header.php'; ?>

  <h2 class="text-center">Lista de Agendamentos</h2>
  <div class="mb-3 text-end">
    <a href="index.php?classe=Agendamento&metodo=create" class="btn btn-success">+ Novo Agendamento</a>
  </div>

  <table class="table table-bordered table-hover">
    <thead class="table-primary text-center">
      <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Serviço</th>
        <th>Data</th>
        <th>Horário</th>
        <th>Duração (min)</th>
        <th>Status</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($agendamentos as $a): ?>
        <tr class="text-center">
          <td><?= $a->getId() ?></td>
          <td><?= $a->getClienteId() ?></td>
          <td><?= $a->getServicoId() ?></td>
          <td><?= $a->getData() ?></td>
          <td><?= $a->getHorario() ?></td>
          <td><?= $a->getDuracao() ?></td>
          <td><?= ucfirst($a->getStatus()) ?></td>
          <td>
            <a href="index.php?classe=Agendamento&metodo=show&id=<?= $a->getId() ?>" class="btn btn-info btn-sm">Ver</a>
            <a href="index.php?classe=Agendamento&metodo=edit&id=<?= $a->getId() ?>" class="btn btn-warning btn-sm">Editar</a>
            <a href="index.php?classe=Agendamento&metodo=delete&id=<?= $a->getId() ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este agendamento?');">Excluir</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php require __DIR__ . '/../layout/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
