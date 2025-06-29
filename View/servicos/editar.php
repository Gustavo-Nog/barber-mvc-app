<?php require_once __DIR__ . '/../../session_start.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Editar Serviço</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <style>
    body {
      background-color: #e3f2fd;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
      max-width: 500px;
      margin: 0 auto;
      background: white;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(92, 107, 192, 0.3);
    }
    label {
      font-weight: 600;
      margin-top: 15px;
    }
    input, textarea {
      width: 100%;
      padding: 8px 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 1rem;
      color: #0d47a1;
    }
    button {
      margin-top: 25px;
      width: 100%;
      padding: 12px;
      background-color: #5c6bc0;
      border: none;
      border-radius: 5px;
      color: white;
      font-weight: 600;
      font-size: 1.1rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    button:hover {
      background-color: #1976d2;
    }
  </style>
</head>
<body>

<?php require __DIR__ . '/../layout/header.php'; ?>


<h2>Editar Serviço</h2>
<form action="index.php?classe=Servico&metodo=update" method="POST">
  <input type="hidden" name="id" value="<?= $servico->getId() ?>" />

  <label for="nome">Nome do Serviço:</label>
  <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($servico->getNome()) ?>" required maxlength="100" />

  <label for="valor">Valor:</label>
  <input type="number" step="0.01" name="valor" id="valor" value="<?= htmlspecialchars($servico->getValor()) ?>" required min="0" />

  <label for="descricao">Descrição:</label>
  <textarea name="descricao" id="descricao" rows="4" maxlength="255"><?= htmlspecialchars($servico->getDescricao()) ?></textarea>

  <button type="submit">Atualizar</button>
</form>
<?php require __DIR__ . '/../layout/footer.php'; ?>

</body>
</html>
