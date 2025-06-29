<?php require_once __DIR__ . '/../../session_start.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Editar Produto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <style>
    body {
      background-color: #e3f2fd;
      font-family: Arial, sans-serif;
      color: #0d47a1;
      padding: 30px;
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
      text-align: center;
      margin-bottom: 30px;
      font-weight: 700;
    }
    form {
      max-width: 600px;
      margin: 0 auto;
      background: white;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(92, 107, 192, 0.3);
    }
    label {
      font-weight: 600;
    }
    .btn-primary {
      background-color: #5c6bc0;
      border: none;
      transition: background-color 0.3s ease;
    }
    .btn-primary:hover {
      background-color: #1976d2;
    }
    .btn-secondary {
      margin-left: 10px;
    }
  </style>
</head>
<body>

<?php require __DIR__ . '/../layout/header.php'; ?>


<h2>Editar Produto</h2>
<form action="index.php?classe=Produto&metodo=update" method="POST" class="mt-4">
  <input type="hidden" name="id" value="<?= htmlspecialchars($produto->getId()) ?>" />

  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" required maxlength="100" value="<?= htmlspecialchars($produto->getNome()) ?>" />
  </div>

  <div class="mb-3">
    <label for="valor" class="form-label">Valor (R$)</label>
    <input type="number" step="0.01" class="form-control" id="valor" name="valor" required min="0" value="<?= htmlspecialchars($produto->getValor()) ?>" />
  </div>

  <div class="mb-3">
    <label for="marca" class="form-label">Marca</label>
    <input type="text" class="form-control" id="marca" name="marca" maxlength="50" value="<?= htmlspecialchars($produto->getMarca()) ?>" />
  </div>

  <div class="mb-3">
    <label for="categoria" class="form-label">Categoria</label>
    <input type="text" class="form-control" id="categoria" name="categoria" maxlength="50" value="<?= htmlspecialchars($produto->getCategoria()) ?>" />
  </div>

  <button type="submit" class="btn btn-primary">Atualizar</button>
  <a href="index.php?classe=Produto&metodo=index" class="btn btn-secondary">Voltar</a>
</form>
<?php require __DIR__ . '/../layout/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
