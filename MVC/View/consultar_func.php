<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>VoltraHost</title>
</head>cd c/para/sua/pasta/Aula-MVC

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
    <section class="cadfuncionario">
        <div class="form_cadfuncionario">
            <form class="bar-horizontal-cadfuncionario">
                <h1>Consulta de Funcionários</h1>
                <table class="form_cadfuncionario_principal">
                    <tr>
                        <td><label>Pesquisa:</label></td>
                        <td><input type="text" required="" name="rflogin" id="rflogin"></td>
                    </tr>
                </table>
                <div class="btn_login">
                    <button type="submit">Salvar</button>
                </div><br>
            </form>
            <div class="button-container">
                <div class="btn_login_func">
                    <a href="cadastrar_func.php"><button type="button">Cadastrar Funcionário</button></a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
