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
            <!--
                echo "Bem-vindo, ".$_SESSION['nome']."!";
                echo '<hr><li><a class="btn-sair" href="../model/logout.php">Sair</a></li>';
            -->
        </ul>
    </nav>
    <hr><br><br>
    <div id="grade">
        <div class="modulo">
            <a href="consultar_func.php">
                <img src="imagens/icon_func.jpg" height="100">
                <p>Funcionários</p>
            </a>
        </div>
        
        <div class="modulo">
            <a href="consultar_reserva.php">
                <img src="imagens/icon_reserva.jpg" height="100">
                <p>Reservas</p>
            </a>
        </div>

        <div class="modulo">
            <a href="consultar_cli.php">
                <img src="imagens/icon_assin.jpg" height="100">
                <p>Clientes</p>
            </a>
        </div>

        <div class="modulo">
            <a href="designar_tarefas.php">
                <img src="imagens/icon_ativ.jpg" height="100">
                <p>Designar Tarefas</p>
            </a>
        </div>
    </div>
</body>
</html>
