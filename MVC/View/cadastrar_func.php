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
    <section class="cadcliente">
        <div class="form_cad_cliente">
            <form action="index.php?action=cadastrarfunc" method="post">
                <h1>Cadastrar Funcionário</h1>
                <table class="form_cadcliente_principal">
                    <tr>
                        <td><label>Nome:</label></td>
                        <td><input type="text" required="" name="nome_func" id="nome_func"></td>
                    </tr>
                    <tr>
                        <td><label>Sobrenome:</label></td>
                        <td><input type="text" required="" name="sobrenome_func" id="sobrenome_func"></td>
                    </tr>
                    <tr>
                        <td><label>CPF:</label></td>
                        <td><input type="text" name="cpf" pattern="\d{3}.\d{3}.\d{3}-\d{2}" placeholder="xxx.xxx.xxx-xx" required minlength="14" maxlength="14"></td>
                    </tr>
                    <tr>
                        <td><label>Data de Nascimento</label></td>
                        <td><input type="date" name="data_func" id="date_cli"></td>
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
                    </tr>
                    <tr>
                        <td>Departamento:</td>
                        <td><select name="departamento" id="departamento">
                                <option value="departamento_pessoal">Departamento Pessoal</option>
                                <option value="atendimento">Atendimento ao Cliente</option>
                                <option value="rh">RH</option>
                                <option value="limpeza">Limpeza</option>
                                <option value="ti">TI</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Salário:</td>
                        <td><input type="text" name="salario" id="salario"></td>
                    </tr>
                    <tr>
                        <td><label>Senha:</label></td>
                        <td><input type="password" name="senha" required minlength="8" maxlength="40"></td>
                        <td><label class="input-label">Repita a senha:</label></td>
                        <td><input type="password" name="confirm-password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="As senhas não coincidem ou não atendem aos requisitos."></td>
                    </tr>
                    <tr>
                        <td><label>Status:</label></td>
                        <td><input type="radio" name="status_func" id="lig">Ligado</td>
                        <td><input type="radio" name="status_func" id="deslig">Desligado</td>
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
