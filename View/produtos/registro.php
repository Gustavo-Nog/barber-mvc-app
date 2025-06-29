<?php require_once __DIR__ . '/../../session_start.php'; ?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Detalhes do Produto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php require __DIR__ . '/../layout/header.php'; ?>
    <h2>Detalhes do Produto</h2>
    <table class="table table-bordered mt-4">
      <tr>
        <th>ID</th>
        <td><?= htmlspecialchars($produto->getId()) ?></td>
      </tr>
      <tr>
        <th>Nome</th>
        <td><?= htmlspecialchars($produto->getNome()) ?></td>
      </tr>
      <tr>
        <th>Valor</th>
        <td>R$ <?= number_format($produto->getValor(), 2, ',', '.') ?></td>
      </tr>
      <tr>
        <th>Marca</th>
        <td><?= htmlspecialchars($produto->getMarca()) ?></td>
      </tr>
      <tr>
        <th>Categoria</th>
        <td><?= htmlspecialchars($produto->getCategoria()) ?></td>
      </tr>
    </table>
    <a href="index.php?classe=Produto&metodo=index" class="btn btn-secondary">Voltar</a>
    <a href="index.php?classe=Produto&metodo=edit&id=<?= htmlspecialchars($produto->getId()) ?>" class="btn btn-primary">Editar</a>
    <?php require __DIR__ . '/../layout/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
