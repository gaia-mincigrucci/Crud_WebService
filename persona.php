<?php
require_once __DIR__ . "/config.php";

$messaggio = "";
$risultati = [];
$azione = null;

if (isset($_POST['azione'])) {
    $azione = $_POST['azione'];
} elseif (isset($_GET['azione'])) {
    $azione = $_GET['azione'];
}

switch ($azione) {
    case 'CREATE':
        $sql = "INSERT INTO persona (nome, cognome, email, data_nascita) VALUES (:nome, :cognome, :email, :data_nascita)";
        $pdo->prepare($sql)->execute([':nome' => $_POST['nome'], ':cognome' => $_POST['cognome'], ':email' => $_POST['email'], ':data_nascita' => $_POST['data_nascita']]);
        $messaggio = "Inserito!";
        break;
    case 'UPDATE':
        $sql = "UPDATE persona SET nome=:nome, cognome=:cognome, email=:email WHERE id=:id";
        $pdo->prepare($sql)->execute([':nome' => $_POST['nome'], ':cognome' => $_POST['cognome'], ':email' => $_POST['email'], ':id' => $_POST['id']]);
        $messaggio = "Aggiornato!";
        break;
    case 'DELETE':
        $pdo->prepare("DELETE FROM persona WHERE id = :id")->execute([':id' => $_POST['id']]);
        $messaggio = "Eliminato!";
        break;
    case 'READ':
        $stmt = $pdo->prepare("SELECT * FROM persona WHERE id = :id");
        $stmt->execute([':id' => $_GET['id_ricerca']]);
        $risultati = $stmt->fetchAll();
        break;
}

if ($azione !== 'READ') {
    $risultati = $pdo->query("SELECT * FROM persona ORDER BY id")->fetchAll();
}
?>
