<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Designar Tarefas</title>
</head>
<body>
    <nav class="nav_login">
        <p class="nav_paragraf">VoltraHost - Designação de Tarefas</p>
        <ul>
            <li><a href="logout.php">Sair</a></li>
        </ul>
    </nav>
    <div class="container">
        <h2>Designar Tarefas para Funcionários</h2>
        <form action="designar_tarefa.php" method="POST">
            <div class="form-group">
                <label for="funcionario">Funcionário:</label>
                <select id="funcionario" name="funcionario" required>
                    <option value="0">Selecione um funcionário</option>
                    <option value="1">João Silva</option>
                    <option value="2">Maria Oliveira</option>
                    <option value="3">Carlos Pereira</option>
                    <!-- Mais funcionários podem ser adicionados aqui -->
                </select>
            </div>

            <div class="form-group">
                <label for="tarefa">Tarefa:</label>
                <textarea id="tarefa" name="tarefa" rows="4" placeholder="Descreva a tarefa..." required></textarea>
            </div>

            <div class="form-group">
                <label for="data_conclusao">Data de Conclusão:</label>
                <input type="date" id="data_conclusao" name="data_conclusao" required>
            </div>

            <div class="form-buttons">
                <button type="submit" class="btn-submit">Designar Tarefa</button>
                <button type="reset" class="btn-cancel">Limpar</button>
            </div>
        </form>

        <h3>Tarefas Designadas</h3>
        <table>
            <thead>
                <tr>
                    <th>Funcionário</th>
                    <th>Tarefa</th>
                    <th>Data de Conclusão</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>João Silva</td>
                    <td>Limpeza do Lobby</td>
                    <td>2024-11-10</td>
                    <td>
                        <button class="btn-edit">Editar</button>
                        <button class="btn-delete">Excluir</button>
                    </td>
                </tr>
                <tr>
                    <td>Maria Oliveira</td>
                    <td>Atendimento ao Cliente</td>
                    <td>2024-11-11</td>
                    <td>
                        <button class="btn-edit">Editar</button>
                        <button class="btn-delete">Excluir</button>
                    </td>
                </tr>
                <!-- Mais tarefas podem ser listadas aqui -->
            </tbody>
        </table>
    </div>
</body>
</html>
