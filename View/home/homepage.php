<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Barber2men - Menu Principal</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">

  <style>
    body {
      background-color: #e3f2fd; /* azul claro */
      color: #0d47a1; /* azul escuro */
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    h1 {
      color: #0d47a1;
      margin-bottom: 30px;
      text-align: center;
    }
    a {
      color: #1976d2;
      text-decoration: none;
    }
    a:hover {
      color: #0d47a1;
      text-decoration: underline;
    }
    .accordion-button {
      background-color: #90caf9; /* azul médio */
      color: #0d47a1;
      font-weight: 600;
    }
    .accordion-button:not(.collapsed) {
      background-color: #1976d2; /* azul mais escuro */
      color: white;
    }
    .accordion-body {
      background-color: #bbdefb; /* azul claro */
    }
    ul {
      padding-left: 20px;
    }
  </style>
</head>
<body>
  <div class="container py-5">
    <h1>Barber2men - Menu Principal</h1>

    <div class="accordion" id="menuAccordion">

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingClientes">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseClientes" aria-expanded="true" aria-controls="collapseClientes">
            Clientes
          </button>
        </h2>
        <div id="collapseClientes" class="accordion-collapse collapse show" aria-labelledby="headingClientes" data-bs-parent="#menuAccordion">
          <div class="accordion-body">
            <ul>
              <li><a href="index.php?classe=Cliente&metodo=index">Listar Clientes</a></li>
              <li><a href="index.php?classe=Cliente&metodo=create">Novo Cliente</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingServicos">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseServicos" aria-expanded="false" aria-controls="collapseServicos">
            Serviços
          </button>
        </h2>
        <div id="collapseServicos" class="accordion-collapse collapse" aria-labelledby="headingServicos" data-bs-parent="#menuAccordion">
          <div class="accordion-body">
            <ul>
              <li><a href="index.php?classe=Servico&metodo=index">Listar Serviços</a></li>
              <li><a href="index.php?classe=Servico&metodo=create">Novo Serviço</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingProdutos">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProdutos" aria-expanded="false" aria-controls="collapseProdutos">
            Produtos
          </button>
        </h2>
        <div id="collapseProdutos" class="accordion-collapse collapse" aria-labelledby="headingProdutos" data-bs-parent="#menuAccordion">
          <div class="accordion-body">
            <ul>
              <li><a href="index.php?classe=Produto&metodo=index">Listar Produtos</a></li>
              <li><a href="index.php?classe=Produto&metodo=create">Novo Produto</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingAgendamentos">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAgendamentos" aria-expanded="false" aria-controls="collapseAgendamentos">
            Agendamentos
          </button>
        </h2>
        <div id="collapseAgendamentos" class="accordion-collapse collapse" aria-labelledby="headingAgendamentos" data-bs-parent="#menuAccordion">
          <div class="accordion-body">
            <ul>
              <li><a href="index.php?classe=Agendamento&metodo=index">Listar Agendamentos</a></li>
              <li><a href="index.php?classe=Agendamento&metodo=create">Novo Agendamento</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingCompras">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCompras" aria-expanded="false" aria-controls="collapseCompras">
            Compras
          </button>
        </h2>
        <div id="collapseCompras" class="accordion-collapse collapse" aria-labelledby="headingCompras" data-bs-parent="#menuAccordion">
          <div class="accordion-body">
            <ul>
              <li><a href="index.php?classe=Compra&metodo=index">Listar Compras</a></li>
              <li><a href="index.php?classe=Compra&metodo=create">Nova Compra</a></li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
