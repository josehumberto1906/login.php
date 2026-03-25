# Sistema de Login PHP

Um sistema simples de autenticação de usuários desenvolvido em PHP com MySQL, incluindo interface responsiva e validação de dados.

## 🚀 Funcionalidades Implementadas

- **Login seguro**: Autenticação via CPF e senha usando prepared statements (proteção contra SQL Injection)
- **Sessão de usuário**: Controle de sessão para manter usuário logado
- **Interface moderna**: Layout responsivo com CSS, incluindo card de login e imagem no topo
- **Validação de entrada**: Verificação de campos obrigatórios e tratamento de erros
- **Redirecionamento**: Após login, redireciona para página principal; logout volta ao início
- **Banco de dados**: Conexão MySQL com tabela `usuarios` (cpf, senha, nome)

## 🛠️ Tecnologias Utilizadas

- **PHP 7+**: Lógica backend e manipulação de sessões
- **MySQL**: Banco de dados para armazenamento de usuários
- **HTML5/CSS3**: Estrutura e estilização da interface
- **XAMPP**: Ambiente de desenvolvimento local
- **Git/GitHub**: Controle de versão e hospedagem do código

## 📁 Estrutura do Projeto

```
jose/
├── index.php          # Página de login com formulário
├── login.php          # Processamento do login e validação
├── principal.php      # Página após login (painel do usuário)
├── valida.php         # Validação de sessão
├── sair.php           # Logout (destrói sessão)
├── conexao.php        # Conexão com banco MySQL
├── imagens/           # Pasta para imagens (ex: ícone de login)
└── README.md          # Este arquivo
```

## 🔧 Instalação e Configuração

### 1. Pré-requisitos
- XAMPP instalado (Apache + MySQL + PHP)
- Navegador web

### 2. Configuração do Banco
1. Inicie o XAMPP (Apache e MySQL)
2. Acesse `http://localhost/phpmyadmin`
3. Crie banco de dados: `banco`
4. Execute esta query para criar a tabela:

```sql
CREATE TABLE usuarios (
    cpf VARCHAR(20) PRIMARY KEY,
    senha VARCHAR(255) NOT NULL,
    nome VARCHAR(100) NOT NULL
);
```

5. Insira um usuário de teste:
```sql
INSERT INTO usuarios (cpf, senha, nome) VALUES ('123', '456', 'Teste');
```

### 3. Configuração do Projeto
1. Clone ou baixe o projeto para `C:\xampp\htdocs\jose`
2. Verifique se `conexao.php` tem as credenciais corretas (padrão: root, sem senha)

### 4. Executar
- Acesse: `http://localhost/jose`
- Faça login com CPF: `123`, Senha: `456`

## 🎨 Layout e Design

- **Página de login**: Card centralizado com gradiente azul, campos de entrada estilizados
- **Imagem no topo**: Ícone de login (pode ser personalizado em `imagens/login.png`)
- **Responsivo**: Funciona em desktop e mobile
- **Cores**: Azul gradiente (#4C7CFF) com branco e cinzas

## 🔒 Segurança

- Prepared statements para prevenir SQL Injection
- Validação de entrada (campos obrigatórios)
- Sessões seguras para controle de acesso
- Senhas armazenadas em texto plano (para desenvolvimento; em produção, use hash como password_hash())

## 📝 Próximos Passos Sugeridos

- Implementar hash de senha (bcrypt)
- Adicionar registro de novos usuários
- Validação de CPF real
- Melhorar tratamento de erros
- Adicionar mais páginas (dashboard, perfil, etc.)

## 🤝 Contribuição

Projeto desenvolvido para fins educacionais. Sinta-se à vontade para contribuir com melhorias!

---

**Desenvolvido por José Humberto** | [GitHub](https://github.com/josehumberto1906/login.php)

