<?php
class hotel  {
  public $nome_cliente;
  public $cpf_cliente;
  public $endereco_cliente;
  public $numero_cliente;
  public $telefone_cliente;
  public $email_cliente;
  public $dt_nasc;

  public $status_cliente;

  public $nome_funcionario;

  public $sobrenome_funcionario;

  public $telefone_funcionario;

  public  $rf;

  public $endereço_funcionario;

  public $email_funcionario;

  public $senha_funcionario;

  public $salario;


  public $id_reserva;

  public $data;

  public $quantidade;

  public $telefone;

  private $conn;
  
    // Construtor para a conexão com o banco de dados
    public function __construct() {
        $this->conn = new mysqli('localhost', 'root', '', 'voltrahost');
        if ($this->conn->connect_error) {
            die("Conexão falhou: " . $this->conn->connect_error);
        }
    }

    public function listar() {
      $result = $this->conn->query("Select * from cliente");
      $hotel = [];

      while($row = $result->fetch_assoc()) {
        $cliente = new hotel;
        $cliente->nome_cliente = $row['nome_cliente'];
        $cliente->endereco_cliente = $row['endereço_cliente'];
        $cliente->cpf_cliente = $row['cpf_cliente'];
        $cliente->dt_nasc = $row['dt_nasc'];
        $cliente->email_cliente = $row['email_cliente'];
        $cliente->telefone_cliente = $row['telefone_cliente'];
        $cliente->status_cliente = $row['status_cliente'];
        $clientes[]= $cliente;
      }

      return $hotel;
    }

    public function cadastrar() {
      $stmt = $this->conn->prepare("INSERT into cliente (nome_cliente, cpf_cliente, endereço_cliente, dt_nasc, telefone_cliente, email_cliente, status_cliente) VALUES (?, ?, ?, ?, ? ,?, ?)");
      $stmt->bind_param('ssssiss', $this->nome_cliente,$this->cpf_cliente, $this->endereco_cliente, $this->dt_nasc, $this->telefone_cliente, $this->email_cliente, $this->status_cliente);
      $stmt->execute();
      $stmt->close();
    }
    public function listarfunc() {
      $result = $this->conn->query("Select * from funcionario");
      $hotel = [];

      while($row = $result->fetch_assoc()) {
        $funcionario = new hotel;
        $funcionario->nome_funcionario = $row['nome_funcionario'];
        $funcionario->endereço_funcionario = $row['endereco_cliente'];
        $funcionario->rf = $row['rf'];
        $funcionario->salario = $row['salario'];
        $funcionario->email_funcionario = $row['email_funcionario'];
        $funcionario->telefone_funcionario = $row['telefone_funcionario'];
        $funcionario->senha_funcionario = $row ['senha_funcionario'];
        $funcionarios[]= $funcionario;
      }

      return $hotel;
    }
    public function cadastrarfunc() {
      $stmt = $this->conn->prepare("INSERT into funcionario (nome_funcionario, rf, endereço_funcionario, salario, senha_sistema, telefone_funcionario, email_funcionario) VALUES (?, ?, ?, ?, ? ,?, ?)");
      $stmt->bind_param('ssssiss', $this->nome_funcionario, $this->rf, $this->endereço_funcionario, $this->salario, $this->senha_funcionario, $this->telefone_funcionario, $this->email_funcionario);
      $stmt->execute();
      $stmt->close();
    }
    public function listarreserva() {
      $result = $this->conn->query("Select * from reserva");
      $hotel = [];

      while($row = $result->fetch_assoc()) {
        $reserva = new hotel;
        $reserva->id_reserva = $row['id_reserva'];
        $reserva->quantidade = $row['quantidade'];
        $reserva->data = $row['data'];
        $reserva->telefone = $row['telefone'];
        $reservas[]= $reserva;
      }

      
      return $hotel;
    }
    public function cadastrarreserva() {
      $stmt = $this->conn->prepare("INSERT into reserva  (id_reserva, quantidade, data, telefone ) VALUES (?, ?, ?, ?)");
      $stmt->bind_param('ssis', $this->id_reserva, $this->quantidade, $this->data, $this->telefone);
      $stmt->execute();
      $stmt->close();
    }
  }