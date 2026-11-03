<?php

require_once "inc/Koneksi.php";
require_once "app/Matakuliah.php";

$matkul = new App\Matakuliah();
$row = $matkul->edit($_GET['id']);

?>

<div class="row">
    <div class="col-md-6">

        <h2 class="fw-bold mb-3">Edit Matakuliah</h2>

        <form action="matkul_proses.php?action=update" method="POST">
            <input type="hidden" name="matkul_id" value="<?php echo $row['matkul_id']; ?>">
            <div class="mb-3">
                <label class="form-label">Kode Matakuliah</label>
                <input type="text" name="matkul_kode" class="form-control" value="<?php echo htmlspecialchars($row['matkul_kode']); ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Matakuliah</label>
                <input type="text" name="matkul_nama" class="form-control" value="<?php echo htmlspecialchars($row['matkul_nama']); ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">SKS</label>
                <input type="number" name="matkul_sks" class="form-control" min="1" value="<?php echo htmlspecialchars($row['matkul_sks']); ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Semester</label>
                <input type="number" name="matkul_semester" class="form-control" min="1" value="<?php echo htmlspecialchars($row['matkul_semester']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="index.php?page=matkul" class="btn btn-secondary">Batal</a>
        </form>

    </div>
</div>