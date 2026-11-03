<?php

namespace App;

use Inc\Koneksi;

class Matakuliah extends Koneksi
{
    public function index()
    {
        $stmt = $this->koneksi->prepare("SELECT * FROM tb_matakuliah");
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }
        return $data;
    }

    public function store()
    {
        $sql = "INSERT INTO tb_matakuliah SET matkul_kode=:kode, matkul_nama=:nama, matkul_sks=:sks, matkul_semester=:semester";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->bindParam(":kode", $_POST['matkul_kode']);
        $stmt->bindParam(":nama", $_POST['matkul_nama']);
        $stmt->bindParam(":sks", $_POST['matkul_sks']);
        $stmt->bindParam(":semester", $_POST['matkul_semester']);
        $stmt->execute();
    }

    public function edit($id)
    {
        $stmt = $this->koneksi->prepare("SELECT * FROM tb_matakuliah WHERE matkul_id=:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update()
    {
        $sql = "UPDATE tb_matakuliah SET matkul_kode=:kode, matkul_nama=:nama, matkul_sks=:sks, matkul_semester=:semester WHERE matkul_id=:id";
        $stmt = $this->koneksi->prepare($sql);
        $stmt->bindParam(":kode", $_POST['matkul_kode']);
        $stmt->bindParam(":nama", $_POST['matkul_nama']);
        $stmt->bindParam(":sks", $_POST['matkul_sks']);
        $stmt->bindParam(":semester", $_POST['matkul_semester']);
        $stmt->bindParam(":id", $_POST['matkul_id']);
        $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->koneksi->prepare("DELETE FROM tb_matakuliah WHERE matkul_id=:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
}