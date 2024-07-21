<?php
class ClientModel {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function getClientById($id) {
        $query = $this->db->prepare("SELECT * FROM clients WHERE id = :id");
        $query->execute([':id' => $id]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllClients($filter = [], $sort = []) {
        $sql = "SELECT * FROM clients";
        $conditions = [];
        $params = [];

        if (!empty($filter['nom'])) {
            $conditions[] = "nom LIKE :nom";
            $params[':nom'] = "%" . $filter['nom'] . "%";
        }
        if (!empty($filter['adresse'])) {
            $conditions[] = "adresse LIKE :adresse";
            $params[':adresse'] = "%" . $filter['adresse'] . "%";
        }
        if (!empty($filter['telephone'])) {
            $conditions[] = "telephone LIKE :telephone";
            $params[':telephone'] = "%" . $filter['telephone'] . "%";
        }

        if ($conditions) {
            $sql .= " WHERE " . implode(" AND ", $conditions);
        }

        if (!empty($sort)) {
            $sql .= " ORDER BY " . implode(", ", $sort);
        }

        $query = $this->db->prepare($sql);
        $query->execute($params);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createClient($data) {
        $query = $this->db->prepare("INSERT INTO clients (name, address, phone, email, gender, status) VALUES (:name, :address, :phone, :email, :gender, :status)");
        return $query->execute([
            ':nom' => $data['nom'],
            ':adresse' => $data['adresse'],
            ':telephone' => $data['telephone'],
            ':email' => $data['email'],
            ':sexe' => $data['sexe'],
            ':status' => $data['status']
        ]);
    }

    public function updateClient($data) {
        $query = $this->db->prepare("UPDATE clients SET name = :name, address = :address, phone = :phone, email = :email, gender = :gender, status = :status WHERE id = :id");
        return $query->execute([
            ':id' => $data['id'],
            ':nom' => $data['nom'],
            ':adresse' => $data['adresse'],
            ':telephone' => $data['telephone'],
            ':email' => $data['email'],
            ':sexe' => $data['sexe'],
            ':status' => $data['status']
        ]);
    }

    public function deleteClient($id) {
        $query = $this->db->prepare("DELETE FROM clients WHERE id = :id");
        return $query->execute([':id' => $id]);
    }
}
?>
