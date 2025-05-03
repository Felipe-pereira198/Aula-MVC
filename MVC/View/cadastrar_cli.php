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
        </ul>
    </nav>
    <hr><br><br>
    <section class="cadcliente">
        <div class="form_cad_cliente">
            <form action="index.php?action=cadastrar" method="post">
                <h1>Cadastrar Cliente</h1>
                <table class="form_cadcliente_principal">
                    <tr>
                        <td><label>Nome:</label></td>
                        <td><input type="text" required="" name="nome_cli" id="nome_cli"></td>
                    </tr>
                    <tr>
                        <td><label>CPF:</label></td>
                        <td><input type="text" name="cpf" pattern="\d{3}.\d{3}.\d{3}-\d{2}" placeholder="xxx.xxx.xxx-xx" required minlength="14" maxlength="14"></td>
                    </tr>
                    <tr>
                        <td><label>Data de Nascimento</label></td>
                        <td><input type="date" name="data_cli" id="date_cli"></td>
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
                        <td><label>Endereço:</label></td>
                        <td><input type="text" name="endereco" minlength="10" maxlength="200"></td>
                        <td><label>Número:</label></td>
                        <td><input type="number" name="numero_casa" min="0" max="2000"></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="assinatura" id="assinatura">Possui Assinatura</td>
                    </tr>
                </table><br>
                <div class="btn_login">
                    <button type="submit">Cadastrar</button>
                </div><br>
            </form>
        </div>
    </section><br>
</body>
</html>
