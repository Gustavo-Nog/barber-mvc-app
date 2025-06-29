<?php require_once __DIR__ . '/../../session_start.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Novo Agendamento</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">

  <style>
    body { background-color: #e3f2fd; font-family: Arial, sans-serif; }
    .navbar { background-color: #1976d2; }
    .navbar-brand, .nav-link { color: white !important; }
    .nav-link:hover { text-decoration: underline; }
    h2 { margin-top: 30px; color: #0d47a1; }
    label { font-weight: bold; }
  </style>
</head>
<body>

<?php require __DIR__ . '/../layout/header.php'; ?>

  <h2 class="text-center">Novo Agendamento</h2>
  <form action="index.php?classe=Agendamento&metodo=store" method="POST" class="row g-3">

    <div class="col-md-6">
      <label for="cliente_id" class="form-label">ID do Cliente</label>
      <input type="number" name="cliente_id" id="cliente_id" class="form-control" required />
    </div>

    <div class="col-md-6">
      <label for="servico_id" class="form-label">ID do Serviço</label>
      <input type="number" name="servico_id" id="servico_id" class="form-control" required />
    </div>

    <div class="col-md-6">
      <label for="data" class="form-label">Data</label>
      <input type="date" name="data" id="data" class="form-control" required />
    </div>

    <div class="col-md-6">
      <label for="horario" class="form-label">Horário</label>
      <input type="time" name="horario" id="horario" class="form-control" required />
    </div>

    <div class="mb-3">
        <label for="duracao" class="form-label">Duração (minutos)</label>
        <input type="number" class="form-control" id="duracao" name="duracao" required min="1">
    </div>

    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-control" id="status" name="status" required>
            <option value="pendente">Pendente</option>
            <option value="concluido">Concluído</option>
            <option value="cancelado">Cancelado</option>
        </select>
    </div>

    <div class="col-12 text-end">
      <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
  </form>
<?php require __DIR__ . '/../layout/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
