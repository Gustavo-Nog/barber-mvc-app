<?php require_once __DIR__ . '/../../session_start.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Compras</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <style>
    body { background-color: #e3f2fd; font-family: Arial, sans-serif; padding: 20px; }
    .navbar { background-color: #1976d2; }
    .navbar-brand, .nav-link { color: white !important; }
    .nav-link:hover { text-decoration: underline; }
    h2 { color: #0d47a1; margin-bottom: 20px; }
    th { background-color: #1976d2; color: white; }
  </style>
</head>
<body>

<?php require __DIR__ . '/../layout/header.php'; ?>


<div class="container">
  <h2 class="text-center">Lista de Compras</h2>

  <div class="mb-3 text-end">
    <a href="../../index.php?classe=Compra&metodo=create" class="btn btn-success">+ Nova Compra</a>
  </div>

  <table class="table table-bordered table-hover table-striped">
    <thead class="text-center">
      <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Produto</th>
        <th>Data</th>
        <th>Horário</th>
        <th>Qtd</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($compras as $c): ?>
        <tr class="text-center">
          <td><?= $c->getId() ?></td>
          <td><?= $c->getClienteId() ?></td>
          <td><?= $c->getProdutoId() ?></td>
          <td><?= $c->getData() ?></td>
          <td><?= $c->getHorario() ?></td>
          <td><?= $c->getQtd() ?></td>
          <td>
            <a href="index.php?classe=Compra&metodo=show&id=<?= $c->getId() ?>" class="btn btn-info btn-sm">Ver</a>
            <a href="index.php?classe=Compra&metodo=edit&id=<?= $c->getId() ?>" class="btn btn-warning btn-sm">Editar</a>
            <a href="index.php?classe=Compra&metodo=delete&id=<?= $c->getId() ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir esta compra?');">Excluir</a>
          </td>


        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php require __DIR__ . '/../layout/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
