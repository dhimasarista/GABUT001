<?php

final class Mahasiswa
{
    private $pdo;

    public function __construct()
    {
        require "./config/database.php";
        $this->pdo = $pdo;
    }

    public function getAll()
    {
        $stmt = $this->pdo->query("SELECT * FROM mahasiswa");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add($nim, $nama, $jurusan)
    {
        $stmt = $this->pdo->prepare("INSERT INTO mahasiswa (nim, nama, jurusan) VALUES (?, ?, ?)");
        return $stmt->execute([$nim, $nama, $jurusan]);
    }

    public function delete($nim)
    {
        $stmt = $this->pdo->prepare("DELETE FROM mahasiswa WHERE nim = ?");
        return $stmt->execute([$nim]);
    }

    public function update($nim, $nama, $jurusan)
    {
        $stmt = $this->pdo->prepare("UPDATE mahasiswa SET nama = ?, jurusan = ? WHERE nim = ?");
        return $stmt->execute([$nama, $jurusan, $nim]);
    }
}
