<?php

$localhost = "localhost";
$username = "root";
$password = "";
$database = "pembelajaranweb2";

try {
$connectDatabase = mysqli_connect($localhost, $username, $password, $database);


echo "koneksi berhasil";
} catch (\Throwable $th) {
    echo "Database gagal connect" . $th->getMessage();
}