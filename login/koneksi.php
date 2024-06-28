
<?php

$server = 'localhost';
$database = 'db_sct';
$username = 'root';
$password = '';

$koneksi = new mysqli($server, $username, $password, $database);

if ($koneksi->connect_errno) {
    echo 'gagal terkoneksi ke database' . $database;
} else {
    echo 'koneksi berhasil';
}

  