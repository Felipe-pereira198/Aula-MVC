<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>VoltraHost</title>
</head>
<body>
    <nav class="nav_login">
        <p class="nav_paragraf">VoltraHost</p>
        <ul>
            <?php
                echo "Bem-vindo, ".$_SESSION['nome']."!";
                echo '<hr><li><a class="btn-sair" href="../model/logout.php">Sair</a></li>';
            ?>
        </ul>
    </nav>
    <hr><br><br>
    <section class="cadfuncionario"><!--Alterar "class"-->
        <div class="form_cadfuncionario"><!--Alterar "class"-->
            <form class="bar-horizontal-cadfuncionario"><!--Alterar "class"-->
                <h1>Consulta de Clientes</h1>
                <table class="form_cadfuncionario_principal"><!--Alterar "class"-->
                    <tr>
                        <td><label>Pesquisa:</label></td>
                        <td><input type="text" required="" name="rflogin" id="rflogin"></td><!--Alterar "name" e o "id"-->
                    </tr>
                </table>
                <div class="btn_login">
                    <button type="submit">Salvar</button>
                </div><br>
            </form>
            <div class="button-container">
                <div class="btn_login_cli">
                    <a href="cadastrar_cli.php"><button type="button">Cadastrar Cliente</button></a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
