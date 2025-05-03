<?php

require_once __DIR__ . '/../model/model.php';

class Controller
{
  public function listar()
  {
    $cliente = new hotel();
    $clientes = $cliente->listar();
    $request['clientes'] = $clientes;
    require_once __DIR__ . '/../view/consultar_cli.php';
  }

    public function cadastrar()
    {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cliente = new hotel();
        $cliente->nome_cliente = $_POST['nome_cli'];
        $cliente->cpf_cliente = $_POST['cpf'];
        $cliente->dt_nasc = $_POST['data_cli'];
        $cliente->endereco_cliente = $_POST['endereco'];
        $cliente->email_cliente = $_POST['email'];
        $cliente->status_cliente = $_POST['assinatura'];
        $cliente->telefone_cliente = $_POST['telefone'];
        $cliente->cadastrar();
        header('Location: index.php');
      }
      require_once __DIR__ . '/../view/cadastrar_cli.php';
      exit();
    }
    public function cadastrarfunc()
    {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $funcionario = new hotel();
        $funcionario->nome_funcionario = $_POST['nome_func'];
        $funcionario->sobrenome_funcionario = $_POST['sobrenome_func'];
        $funcionario->rf = $_POST['cpf'];
        $funcionario->telefone_funcionario = $_POST['data_func'];
        $funcionario->endereço_funcionario = $_POST['endereco'];
        $funcionario->email_funcionario = $_POST['email'];
        $funcionario->telefone_funcionario = $_POST['telefone'];
        $funcionario->salario = $_POST['salario'];
        $funcionario->senha_funcionario= $_POST['senha'];
        $funcionario->cadastrarfunc();
        header('Location: index.php');
      }
      require_once __DIR__ . '/../view/cadastrar_func.php';
      exit();
    }
    public function cadastrarreserva()
    {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $reserva = new hotel();
        $reserva->cadastrarreserva();
        header('Location: index.php');
      }
      require_once __DIR__ . '/../view/cadastrar_cli.php';
      exit();
    }
  }
  