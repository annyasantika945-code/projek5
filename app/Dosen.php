<?php

namespace App;

use Inc\Koneksi;

class Dosen extends Koneksi
{
    public function index()
    {
        $stmt = $this->koneksi->prepare("SELECT * FROM tb_dosen");
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }
        return $data;
    }

    public function store()
    {
        $sql = "INSERT INTO tb_dosen SET dosen_nip=:nip, dosen_nama=:nama, dosen_jabatan=:jabatan, dosen_golongan=:golongan";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->bindParam(":nip", $_POST['dosen_nip']);
        $stmt->bindParam(":nama", $_POST['dosen_nama']);
        $stmt->bindParam(":jabatan", $_POST['dosen_jabatan']);
        $stmt->bindParam(":golongan", $_POST['dosen_golongan']);
        $stmt->execute();
    }

    public function edit($id)
    {
        $stmt = $this->koneksi->prepare("SELECT * FROM tb_dosen WHERE dosen_id=:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update()
    {
        $sql = "UPDATE tb_dosen SET dosen_nip=:nip, dosen_nama=:nama, dosen_jabatan=:jabatan, dosen_golongan=:golongan WHERE dosen_id=:id";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->bindParam(":nip", $_POST['dosen_nip']);
        $stmt->bindParam(":nama", $_POST['dosen_nama']);
        $stmt->bindParam(":jabatan", $_POST['dosen_jabatan']);
        $stmt->bindParam(":golongan", $_POST['dosen_golongan']);
        $stmt->bindParam(":id", $_POST['dosen_id']);
        $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->koneksi->prepare("DELETE FROM tb_dosen WHERE dosen_id=:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
}