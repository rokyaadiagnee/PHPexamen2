<?php
class Export {
    public static function toCSV($clients) {
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment;filename=clients.csv');
        $output = fopen('php://output', 'w');
        fputcsv($output, ['ID', 'Nom', 'Adresse', 'telephone', 'Email', 'sexe', 'Status']);
        foreach ($clients as $client) {
            fputcsv($output, $client);
        }
        fclose($output);
        exit();
    }

    public static function toPDF($clients) {
        // Implementation for exporting to PDF
    }
}
?>
