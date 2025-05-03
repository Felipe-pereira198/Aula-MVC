<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <nav class="nav_login">
        <img src="imagens/icon_voltra.jpg" alt="Ícone" style="width: 35; height: 35px;">
        <p class="nav_paragraf">VoltraHost</p>
    </nav>
    <hr><br><br>
    <section class="login">
        <div class="form_login">
            <form>
                <h1>Login Usuário</h1>
                <table class="form_login_principal">
                    <tr>
                        <td><label>RF:</label></td>
                        <td><input type="text" required="" name="rflogin" id="rflogin"></td>
                    </tr>
                    <tr>
                        <td><label for="senha">Senha: </label></td>
                        <td><input type="password" required placeholder=" **** " name="senha" id="senha"><td>
                    </tr>
                </table><br>
                <div class="btn_login">
                    <button type="submit">Logar</button>
                </div><br>
            </form>
        </div>
    </section>
</body>
</html>
