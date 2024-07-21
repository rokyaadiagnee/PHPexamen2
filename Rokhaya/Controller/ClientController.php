<?php
require_once './Utils/Export.php';
require_once './Utils/Report.php';

class ClientController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function showClient($id) {
        $client = $this->model->getClientById($id);
        include '.Rokhaya\Vue\ClientsListView.php';
    }

    public function showAllClients() {
        $clients = $this->model->getAllClients();
        include '.Rokhaya\Vue\ClientsListView.php';
    }

    public function createClient($data) {
        $this->model->createClient($data);
        header("Location: index.php");
        exit();
    }

    public function editClientForm($id) {
        $client = $this->model->getClientById($id);
        include 'Rokhaya\Vue\EditClientView.php';
    }

    public function updateClient($data) {
        $this->model->updateClient($data);
        header("Location: index.php");
        exit();
    }

    public function deleteClient($id) {
        $this->model->deleteClient($id);
        header("Location: index.php");
        exit();
    }

    public function filterClients($filter) {
        $clients = $this->model->getAllClients($filter);
        include './Vue/ClientsListView.php';
    }

    public function exportClients($format) {
        $clients = $this->model->getAllClients();
        if ($format == 'csv') {
            Export::toCSV($clients);
        } elseif ($format == 'pdf') {
            Export::toPDF($clients);
        }
    }

    public function generateReport() {
        $clients = $this->model->getAllClients();
        Report::generate($clients);
    }
}
?>
