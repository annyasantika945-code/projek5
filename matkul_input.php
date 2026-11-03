<div class="row">
    <div class="col-md-6">

        <h2 class="fw-bold mb-3">Input Matakuliah Baru</h2>

        <form action="matkul_proses.php?action=store" method="POST">
            <div class="mb-3">
                <label class="form-label">Kode Matakuliah</label>
                <input type="text" name="matkul_kode" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Matakuliah</label>
                <input type="text" name="matkul_nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">SKS</label>
                <input type="number" name="matkul_sks" class="form-control" min="1" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Semester</label>
                <input type="number" name="matkul_semester" class="form-control" min="1" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php?page=matkul" class="btn btn-secondary">Batal</a>
        </form>

    </div>
</div>