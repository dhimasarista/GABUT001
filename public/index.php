<?php
// public/index.php

require_once '../src/controllers/Mahasiswa.php';

$controller = new MahasiswaController();
$controller->index();
