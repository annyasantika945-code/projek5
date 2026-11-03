<?php

require_once "inc/Koneksi.php";
require_once "app/Dosen.php";

$dosen = new App\Dosen();
$row = $dosen->edit($_GET['id']);

?>

<div class="row">
    <div class="col-md-6">

        <h2 class="fw-bold mb-3">Edit Dosen</h2>

        <form action="dosen_proses.php?action=update" method="POST">
            <input type="hidden" name="dosen_id" value="<?php echo $row['dosen_id']; ?>">
            <div class="mb-3">
                <label class="form-label">NIP</label>
                <input type="text" name="dosen_nip" class="form-control" value="<?php echo htmlspecialchars($row['dosen_nip']); ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="dosen_nama" class="form-control" value="<?php echo htmlspecialchars($row['dosen_nama']); ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jabatan</label>
                <input type="text" name="dosen_jabatan" class="form-control" value="<?php echo htmlspecialchars($row['dosen_jabatan']); ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Golongan</label>
                <input type="text" name="dosen_golongan" class="form-control" value="<?php echo htmlspecialchars($row['dosen_golongan']); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="index.php?page=dosen" class="btn btn-secondary">Batal</a>
        </form>

    </div>
</div>