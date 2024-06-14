<?php
// public/add.php

require_once '../src/controllers/Mahasiswa.php';

$controller = new MahasiswaController();
$controller->add();
