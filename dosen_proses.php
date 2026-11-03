<?php

require_once "inc/Koneksi.php";
require_once "app/Dosen.php";

$dosen = new App\Dosen();
$action = $_GET['action'] ?? '';

if ($action == 'store') {
    $dosen->store();
} elseif ($action == 'update') {
    $dosen->update();
} elseif ($action == 'delete') {
    $dosen->delete($_GET['id']);
}

header("Location: index.php?page=dosen");
exit;