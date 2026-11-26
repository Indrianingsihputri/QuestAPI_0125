<?php
include_once "koneksi.php";

header('Access-Control-Allow-Origin: *');

$json = file_get_contents('php://input');
$data = json_decode($json, true);

$nama = $data['nama'];
$alamat = $data['alamat'];
$telpon = $data['telpon'];

class emp {}

if (empty($nama) || empty($alamat) || empty($telpon)) {
    header('HTTP/1.1 404 Not Found');
    echo json_encode(['error' => 'Data tidak boleh kosong']);
    die(json_encode(["message" => 'Terjadi kesalahan']));
}