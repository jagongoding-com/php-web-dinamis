<?php

/**
 * Simpan file foto yang terupload ke variabel,
 * dan casting menjadi objek untuk memudahkan.
 */
$fileFoto = (object) @$_FILES['foto_sim'];

/**
 * Array ini digunakan untuk menyimpan setiap error yang terjadi.
 * Jika array ini kosong, berarti file yang diupload telah lolos
 * validasi.
 */
$listPesanError = [];

/**
 * Peraturan Pertama: file harus diisi
 */
if (!@$fileFoto->name) {
    array_push($listPesanError, "File SIM tidak boleh kosong.");
}

/**
 * Peraturan kedua: ukuran minimal file adalah 1MB.
 * 
 * Di sini kita bisa menggunakan elseif dari pada membuat
 * if baru seperti ini.
 */
if ($fileFoto->size > 1000 * 1000) {
    array_push($listPesanError, "Ukuran maksimal file adalah 1MB.");
}

/**
 * Peraturan ketiga: periksa file berdasarkan ekstensi
 */
$ekstensiYangDibolehkan = [
    'image/png',
    'image/jpg',
    'image/jpeg',
    'image/webp'
];

if (!in_array(@$fileFoto->type, $ekstensiYangDibolehkan)) {
    array_push($listPesanError, "Ekstensi file tidak diijinkan.");
}

/**
 * Tampilkan pesan error dan hentikan program jika validasi tidak lolos.
 */
if ($listPesanError) {
    foreach ($listPesanError as $pesanError) {
        echo "<strong style='color: red'>{$pesanError}</strong><br>";
    }

    echo "<a href='index.html'>Kembali</a>";

    # hentikan program
    die();
}

echo @$fileFoto->type;