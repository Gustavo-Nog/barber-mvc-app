<?php require_once __DIR__ . '/../../session_start.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">

  <title>Detalhes do Serviço</title>
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <style>
    body { font-family: Arial, sans-serif; background-color: #e3f2fd; padding: 30px; }
    .container { max-width: 600px; margin: auto; background: white; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px #ccc; }
    h2 { text-align: center; color: #0d47a1; }
    p { font-size: 16px; margin: 10px 0; }
    strong { color: #1565c0; }
  </style>
</head>
<body>
<?php require __DIR__ . '/../layout/header.php'; ?>
    <h2>Detalhes do Serviço</h2>
    <p><strong>ID:</strong> <?= $servico->getId() ?></p>
    <p><strong>Nome:</strong> <?= $servico->getNome() ?></p>
    <p><strong>Valor:</strong> R$ <?= number_format($servico->getValor(), 2, ',', '.') ?></p>
    <p><strong>Descrição:</strong> <?= $servico->getDescricao() ?></p>
<?php require __DIR__ . '/../layout/footer.php'; ?>
</body>
</html>
