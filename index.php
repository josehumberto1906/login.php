<html>
<head>
    <title>site</title>
</head>
<body>
         <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - Meu Sistema</title>
        <style>
          body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(120deg, #4C7CFF, #6AC8FF);
            color: #333;
          }
          .page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
          }
          .card {
            width: 100%;
            max-width: 380px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 10px 28px rgba(20, 30, 60, .2);
            overflow: hidden;
          }
          .card-header {
            background: #4C7CFF;
            color: #fff;
            padding: 20px;
            text-align: center;
          }
          .card-body {
            padding: 20px;
          }
          .card-body label {
            display: block;
            margin: 12px 0 6px;
            font-weight: bold;
          }
          .card-body input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
          }
          .card-body input:focus {
            border-color: #4C7CFF;
            outline: 0;
            box-shadow: 0 0 0 3px rgba(76, 124, 255, .2);
          }
          .card-body button {
            width: 100%;
            margin: 18px 0 0;
            padding: 12px;
            border: 0;
            border-radius: 8px;
            background: #4C7CFF;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
          }
          .card-body button:hover {
            background: #3f6de4;
          }
          .small-note {
            margin-top: 10px;
            font-size: 0.9rem;
            color: #555;
          }
        </style>
    </head>
    <body>
      <div class="page">
        <div class="card">
          <div class="card-header">
            <h1>Entrar</h1>
          </div>
          <div class="card-body">
            <form method="post" action="login.php">
              <label for="cpf">CPF</label>
              <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required>
    
              <label for="senha">Senha</label>
              <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
    
              <button type="submit">Acessar</button>
    
              <p class="small-note">Use CPF e senha cadastrados no banco.</p>
            </form>
          </div>
        </div>
      </div>
    </body>
    </html> <form method="post" action="login.php">
        cpf: <input type="text" name="cpf"><br>
        senha: <input type="password" name="senha"><br>
        <input type="submit" value="Enviar">
        </form>
</body>
</html><div class="card-header">
  <img src="imagens/login.png" alt="Ícone de login" class="login-icon">
  <h1>Entrar</h1>
</div><div class="card-header">
  <img src="imagens/login.png" alt="Ícone de login" class="login-icon">
  <h1>Entrar</h1>
</div><div class="card-header">
  <img src="imagens/login.png" alt="Ícone de login" class="login-icon">
  <h1>Entrar</h1>
</div><div class="card-header">
  <img src="imagens/login.png" alt="Ícone de login" class="login-icon">
  <h1>Entrar</h1>
</div>.login-icon {
  display: block;
  margin: 0 auto 10px;
  width: 80px;      /* ajustar a gosto */
  height: auto;
}
.card-header h1 {
  margin: 0;
}