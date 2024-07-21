<?php
require_once './Modele/ClientModel.php';
require_once './Controller/ClientController.php';
require_once './config.php';

$dbhost = 'localhost';
$dbname = 'application';
$dbuser = 'root';
$dbpswd = '';

try {
    $database = new PDO('mysql:host='.$dbhost.';dbname='.$dbname, $dbuser, $dbpswd, array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ));
} catch (PDOException $e) {
    die("Une erreur est survenue lors de la connexion à la Base de données !");
}

$model = new ClientModel($database);
$controller = new ClientController($model);

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['id'])) {
        $controller->showClient($_GET['id']);
    } elseif (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'create':
                include '.Rokhaya\Vue\CreateClientView.php';
                break;
            case 'edit':
                $controller->editClientForm($_GET['id']);
                break;
            case 'filter':
                include './Vue/FilterClientsView.php';
                break;
            case 'export':
                $controller->exportClients($_GET['format']);
                break;
            case 'report':
                $controller->generateReport();
                break;
            default:
                $controller->showAllClients();
                break;
        }
    } else {
        $controller->showAllClients();
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'create':
                $controller->createClient($_POST);
                break;
            case 'edit':
                $controller->updateClient($_POST);
                break;
            case 'delete':
                $controller->deleteClient($_POST['id']);
                break;
        }
    }
}
?>
