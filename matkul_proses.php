<?php

require_once "inc/Koneksi.php";
require_once "app/Matakuliah.php";

$matkul = new App\Matakuliah();
$action = $_GET['action'] ?? '';

if ($action == 'store') {
    $matkul->store();
} elseif ($action == 'update') {
    $matkul->update();
} elseif ($action == 'delete') {
    $matkul->delete($_GET['id']);
}

header("Location: index.php?page=matkul");
exit;