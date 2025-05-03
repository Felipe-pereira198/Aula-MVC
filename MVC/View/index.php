<?php 

require_once __DIR__."/../controller/controller.php";

$controller = new controller();
$action = isset($_GET['action']) ? $_GET['action'] : 'listar' ;

switch ($action) {
    case 'listar':
        $controller->listar();
        break;

    case 'cadastrar':
        $controller->cadastrar();
        break;
    case 'cadastrarfunc';
        $controller->cadastrarfunc();
        break;
    case 'cadastrarreserva';
        $controller->cadastrarreserva();
        break;

    default:
        echo 'nao encontrado';
        break;
}

?>