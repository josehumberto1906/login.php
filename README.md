# Sistema de Login PHP

Sistema de autenticação desenvolvido em PHP com MySQL, utilizando sessões, validação de dados, interface responsiva e estrutura organizada em pastas.

## 🚀 Funcionalidades

* 🔐 Login seguro com CPF e senha
* 🛡️ Proteção contra SQL Injection utilizando Prepared Statements
* 👤 Controle de sessão de usuário
* 📱 Interface responsiva
* 📂 Estrutura organizada em pastas
* 🗄️ Integração com banco de dados MySQL
* ✅ Validação de formulários
* 🚪 Logout seguro
* 🎨 Layout moderno utilizando HTML, CSS e Bootstrap
* ⚡ Sistema preparado para futuras expansões

---

# 🛠️ Tecnologias Utilizadas

* PHP
* MySQL
* HTML5
* CSS3
* Bootstrap
* JavaScript
* XAMPP

---

# 📁 Estrutura de Pastas

```bash
login.php/
│
├── assets/
│   ├── css/
│   ├── js/
│   └── img/
│
├── config/
│   └── conexao.php
│
├── includes/
│   ├── header.php
│   ├── footer.php
│   └── menu.php
│
├── pages/
│   ├── dashboard.php
│   ├── login.php
│   ├── logout.php
│   └── cadastro.php
│
├── database/
│   └── banco.sql
│
├── index.php
├── README.md
└── .gitignore
```

> A estrutura acima pode variar conforme as últimas atualizações do projeto.

---

# ⚙️ Configuração do Projeto

## 1️⃣ Clonar o repositório

```bash
git clone https://github.com/josehumberto1906/login.php
```

---

## 2️⃣ Mover para a pasta do servidor

Se estiver utilizando o XAMPP:

```bash
C:/xampp/htdocs/
```

---

## 3️⃣ Criar o banco de dados

Abra o phpMyAdmin e execute:

```sql
CREATE DATABASE banco;
```

Depois importe o arquivo:

```bash
database/banco.sql
```

---

## 4️⃣ Configurar conexão

Arquivo:

```bash
config/conexao.php
```

Exemplo:

```php
<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "banco";

$conn = new mysqli($host, $user, $password, $database);
?>
```

---

# ▶️ Como Executar

Inicie o Apache e MySQL no XAMPP.

Depois abra no navegador:

```bash
http://localhost/login.php
```

---

# 🔐 Segurança Implementada

* Prepared Statements
* Validação de entradas
* Controle de sessão
* Logout seguro
* Proteção básica contra SQL Injection

---

# 📌 Atualizações Recentes

## ✅ Melhorias Implementadas

* Organização do projeto em pastas
* Melhorias no sistema de autenticação
* Correções de conexão com banco de dados
* Ajustes em formulários
* Melhorias na interface responsiva
* Implementação de sessões
* Correção de erros relacionados ao MySQL
* Padronização de arquivos PHP
* Melhor estrutura para manutenção futura

---

# 📷 Telas do Sistema

## 🔑 Tela de Login

Adicione uma imagem da tela aqui:

```md
![Login](assets/img/login.png)
```

---

## 🏠 Dashboard

```md
![Dashboard](assets/img/dashboard.png)
```

---

# 📚 Aprendizados

Este projeto foi desenvolvido para praticar:

* PHP
* Banco de Dados MySQL
* Autenticação de usuários
* Sessões em PHP
* Organização de projetos
* Segurança básica em aplicações web

---

# 🔮 Melhorias Futuras

* Cadastro de usuários
* Recuperação de senha
* Criptografia de senha com password_hash()
* Painel administrativo
* Sistema de níveis de acesso
* API REST
* Integração com Bootstrap 5
* Responsividade avançada

---

# 🤝 Contribuição

Contribuições são bem-vindas.

1. Faça um Fork
2. Crie uma Branch
3. Commit suas alterações
4. Push para a Branch
5. Abra um Pull Request

---

# 👨‍💻 Autor

José Humberto

GitHub:

[josehumberto1906](https://github.com/josehumberto1906?utm_source=chatgpt.com)

---

# ⭐ Projeto Acadêmico

Projeto desenvolvido para estudos e prática de desenvolvimento web utilizando PHP e MySQL.
