<?php require_once __DIR__ . '/../../session_start.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Nova Compra</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <style>
    body {
      background-color: #e3f2fd;
      font-family: Arial, sans-serif;
    }
    .navbar {
      background-color: #1976d2;
    }
    .navbar-brand, .nav-link {
      color: white !important;
    }
    .nav-link:hover {
      text-decoration: underline;
    }
    h2 {
      margin-top: 30px;
      color: #0d47a1;
    }
    label {
      font-weight: bold;
    }
  </style>
</head>
<body>

<?php require __DIR__ . '/../layout/header.php'; ?>
  <h2>Nova Compra</h2>
  <form action="index.php?classe=Compra&metodo=store" method="POST" class="mt-4">

    <div class="mb-3">
      <label for="cliente_id" class="form-label">ID do Cliente</label>
      <input type="number" class="form-control" id="cliente_id" name="cliente_id" required />
    </div>

    <div class="mb-3">
    <label for="produto_id" class="form-label">Produto</label>
    <select class="form-control" id="produto_id" name="produto_id" required>
        <option value="">-- Selecione um Produto --</option>
        <?php foreach ($produtos as $produto): ?>
            <option value="<?= htmlspecialchars($produto->getId()) ?>"
            <?= ($produto->getId() == $compra['produto_id']) ? 'selected' : '' ?>>
            <?= htmlspecialchars($produto->getNome()) ?>
            </option>
        <?php endforeach; ?>
    </select>

    </div>


    <div class="mb-3">
      <label for="data" class="form-label">Data da Compra</label>
      <input type="date" class="form-control" id="data" name="data" required />
    </div>

    <div class="mb-3">
      <label for="horario" class="form-label">Horário</label>
      <input type="time" class="form-control" id="horario" name="horario" required />
    </div>

    <div class="mb-3">
      <label for="qtd" class="form-label">Quantidade</label>
      <input type="number" class="form-control" id="qtd" name="qtd" required min="1" />
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="index.php?classe=Compra&metodo=index" class="btn btn-secondary">Voltar</a>
  </form>
<?php require __DIR__ . '/../layout/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
