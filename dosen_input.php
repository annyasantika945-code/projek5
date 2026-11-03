<div class="row">
    <div class="col-md-6">

        <h2 class="fw-bold mb-3">Input Dosen Baru</h2>

        <form action="dosen_proses.php?action=store" method="POST">
            <div class="mb-3">
                <label class="form-label">NIP</label>
                <input type="text" name="dosen_nip" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="dosen_nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jabatan</label>
                <input type="text" name="dosen_jabatan" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Golongan</label>
                <input type="text" name="dosen_golongan" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php?page=dosen" class="btn btn-secondary">Batal</a>
        </form>

    </div>
</div>