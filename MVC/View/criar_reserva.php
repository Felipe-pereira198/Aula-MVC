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
            session_start();
                echo "Bem-vindo, ".$_SESSION['nome']."!";
                echo '<hr><li><a class="btn-sair" href="../model/logout.php">Sair</a></li>';
            ?>
        </ul>
    </nav>
    <hr><br><br>
    <section class="cadcliente">
        <div class="form_cad_cliente">
            <form>
                <h1>Nova Reserva</h1>
                <table class="form_cadcliente_principal">
                    <tr>
                        <td><label>CPF:</label></td>
                        <td><input type="text" name="cpf" pattern="\d{3}.\d{3}.\d{3}-\d{2}" placeholder="xxx.xxx.xxx-xx" required minlength="14" maxlength="14"></td>
                        <td><div class="btn_login"><button type="submit">Enviar</button></div></td>
                    </tr>
                    <tr>
                        <td><label>Nome:</label></td>
                        <td><input type="text" required="" name="nome_cli" id="nome_cli_reserva"></td>
                    </tr>
                    <tr>
                        <td><label>Data de Nascimento:</label></td>
                        <td><input type="date" name="data_cli" id="data_clie_reserva"></td>
                    </tr>
                    <tr>
                        <td><label>E-mail:</label></td>
                        <td><input type="text" name="email" placeholder="adschurch@email.com" required maxlength="150"></td>
                    </tr>
                    <tr>
                        <td><label>Telefone:</label></td>
                        <td><input type="text" required="" name="telefone" maxlength="15"></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="assinatura" id="assinatura">Possui Assinatura</td>
                    </tr>
                    <tr>
                        <td><label>Data Reserva:</label></td>
                        <td><input type="date" name="data_reserva" id="data_reserva"></td>
                    </tr>
                    <tr>
                        <td><labe>Quantas Pessoas:</label></td>
                        <td><input type="number" required min="1" max="4"></td>
                    </tr>
                    
                </table><br>
                <div class="btn_login">
                    <button type="submit">Cadastrar</button>
                </div><br>
            </form>
        </div>
    </section>
</body>
</html>
