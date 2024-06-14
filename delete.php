<?php
// public/delete.php

require_once './src/controllers/Mahasiswa.php';

if (isset($_POST['nim'])) {
    $nim = $_POST['nim'];
    $controller = new MahasiswaController();
    $controller->delete($nim);
}
