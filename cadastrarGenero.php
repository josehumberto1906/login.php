<?php
include("valida.php");
?>

<html>
<body>
    <div style="width: 100%; margin: 0 auto;">

        <div style="min-height: 100px; width: 100%; background-color:#4CAF50; float:left;">

            <div style="width:50%; float:left;">
                <span style="padding-left: 10px;">
                    Olá <?= $_SESSION['nome']; ?>
                </span>
            </div>

            <div style="width:50%; float:left; text-align:right;">
                <span style="padding-right: 10px;">
                    <a href="sair.php">Logout</a>
                </span>
            </div>

        </div>

        <div style="background-color: #f4f4f4; min-height: 500px; width:20%; float:left;">
            <h2>Menu</h2>

            <a href="cadastrarUsuario.php">Cadastrar Usuário</a><br>
            <a href="paginalPrincipal.php">Página Principal</a><br>
        </div>

        <div style="background-color: #ddd; min-height: 500px; width:80%; float:left;">
            
            <h2>Cadastro de Gênero</h2>

            <form method="post" action="inserirGenero.php">
                <br>
                DESCRICAO: 
                <input type="text" name="descricao"> 
                <br><br>

                <input type="submit" value="Cadastrar">
            </form>

            <hr>

            <h2>Lista de Gêneros</h2>

            <?php include("conexao.php"); ?>

            <table border="1" cellpadding="5">
                <tr>
                    <td>Descrição</td>
                    <td>ALTERAR</td>
                    <td>APAGAR</td>
                </tr>

                <?php
                $sql = "SELECT * FROM genero";

                $stmt = $conn->prepare($sql);

                if ($stmt) {

                    if ($stmt->execute()) {

                        $result = $stmt->get_result();

                        while ($row = $result->fetch_assoc()) {
                ?>

                            <tr>
                                <td><?= $row['descricao']; ?></td>

                                <td>Alterar</td>

                                <td>
                                    <form method="post" action="apagarGenero.php">
                                        <input 
                                            type="hidden" 
                                            value="<?= $row['genero']; ?>" 
                                            name="genero"
                                        >

                                        <input type="submit" value="Apagar">
                                    </form>
                                </td>
                            </tr>

                <?php
                        }

                    } else {
                        echo "Nenhum dado encontrado";
                    }

                } else {
                    echo "Erro na consulta SQL";
                }
                ?>

            </table>

        </div>

    </div>
</body>
</html>