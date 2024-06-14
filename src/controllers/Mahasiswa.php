<?php
// src/controllers/MahasiswaController.php

require_once '../src/models/Mahasiswa.php';

class MahasiswaController
{
    private $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new Mahasiswa();
    }

    public function index()
    {
        $mahasiswa = $this->mahasiswaModel->getAll();
        require '../src/views/index.php';
    }

    public function add()
    {
        if (isset($_POST['nim'], $_POST['nama'], $_POST['jurusan'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $jurusan = $_POST['jurusan'];
            $this->mahasiswaModel->add($nim, $nama, $jurusan);
        }
        header('Location: index.php');
    }

    public function delete($nim)
    {
        $this->mahasiswaModel->delete($nim);
        header('Location: index.php');
    }

    public function update()
    {
        if (isset($_POST['nim'], $_POST['nama'], $_POST['jurusan'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $jurusan = $_POST['jurusan'];
            $this->mahasiswaModel->update($nim, $nama, $jurusan);
        }
        header('Location: index.php');
    }
}
