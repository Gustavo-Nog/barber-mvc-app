# 💈 Barber2men

Sistema de gerenciamento para barbearias, desenvolvido em PHP com arquitetura MVC. Permite cadastrar, editar, visualizar e excluir **clientes**, **serviços**, **produtos**, **agendamentos** e **compras**.

🔗 **Site hospedado:** [gustavo-nog.infinityfreeapp.com](https://www.gustavo-nog.infinityfreeapp.com/)  
👤 **Desenvolvido por:** [Gustavo Pereira Alves Nogueira](https://www.linkedin.com/in/gustavo-alves-nogueira)

---

## 📁 Estrutura de Pastas e Arquivos

```bash
barber-mvc-app/
├── Controller/
│   ├── AgendamentoController.php
│   ├── ClienteController.php
│   ├── CompraController.php
│   ├── HomeController.php
│   ├── ProdutoController.php
│   └── ServicoController.php
│
├── Models/
│   ├── DAO/
│   │   ├── AgendamentoDAO.php
│   │   ├── ClienteDAO.php
│   │   ├── CompraDAO.php
│   │   ├── ProdutoDAO.php
│   │   └── ServicoDAO.php
│   ├── Agendamento.php
│   ├── Cliente.php
│   ├── Compra.php
│   ├── Produto.php
│   └── Servico.php
│
├── View/
│   ├── agendamento/
│   │   ├── editar.php
│   │   ├── registro.php
│   │   ├── mostrar_tudo.php
│   │   └── novo.php
│   ├── cliente/
│   │   ├── editar.php
│   │   ├── registro.php
│   │   ├── mostrar_tudo.php
│   │   └── novo.php
│   ├── compra/
│   │   ├── editar.php
│   │   ├── registro.php
│   │   ├── mostrar_tudo.php
│   │   └── novo.php
│   ├── produto/
│   │   ├── editar.php
│   │   ├── registro.php
│   │   ├── mostrar_tudo.php
│   │   └── novo.php
│   ├── servico/
│   │   ├── editar.php
│   │   ├── registro.php
│   │   ├── mostrar_tudo.php
│   │   └── novo.php
│   ├── home/
│   │   └── homepage.php
│   └── layout/
│       └── footer.php
│       └── header.php
│
├── assets/
│   └── *.png
│
├── Core/
│   └── Conexao.php
│
├── index.php
├── session_start.php
└── README.md
```

# ✅ Funcionalidades

- **CRUD completo para:**
  - 🧑 Clientes
  - ✂️ Serviços
  - 📦 Produtos
  - 📅 Agendamentos
  - 🛒 Compras

- **Arquitetura MVC implementada:**
  - **Model:** Representação das tabelas
  - **DAO:** Acesso ao banco com PDO e consultas preparadas
  - **Controller:** Camada lógica e roteamento
  - **View:** Telas HTML com Bootstrap

- **Roteamento por parâmetros:**
  - `classe`: nome da entidade
  - `metodo`: ação a ser executada
  - `id`: parâmetro opcional

- Menu dinâmico com navegação completa (`homepage.php`)
- Estilização com CSS3 e Bootstrap
- Ícones e imagens organizados na pasta `assets/`

---

## 🔗 URLs de Teste

| Ação                        | URL                                              |
|-----------------------------|--------------------------------------------------|
| Ver todos os clientes       | `index.php?classe=cliente&metodo=index`         |
| Tela de cadastro de serviço | `index.php?classe=servico&metodo=create`        |
| Detalhes de um produto      | `index.php?classe=produto&metodo=show&id=1`     |
| Editar um agendamento       | `index.php?classe=agendamento&metodo=edit&id=1` |

---

## 🛠 Tecnologias Utilizadas

- <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP" width="20"/> **PHP 7+**
- <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" width="20"/> **MySQL/MariaDB**
- <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5" width="20"/> **HTML5**
- <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3" width="20"/> **CSS3**
- <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo-shadow.png" alt="Bootstrap" width="20"/> **Bootstrap 5**
- <img src="https://img.icons8.com/ios-filled/50/000000/workflow.png" alt="MVC" width="20"/> **Arquitetura MVC**

---

## 👨‍💻 Autor

Desenvolvido por **Gustavo Nogueira**  
Disciplina: **Programação Web – IFCE**