<?php

$folderUpload = "./assets/uploads";

# periksa apakah folder tersedia
if (!is_dir($folderUpload)) {
    # jika tidak maka folder harus dibuat terlebih dahulu
    mkdir($folderUpload, 0777, $rekursif = true);
}

# simpan masing-masing file ke dalam array 
# dan casting menjadi objek :)
$fileFoto = (object) @$_FILES['foto'];
$fileKtp = (object) @$_FILES['ktp'];

if ($fileFoto->size > 1000 * 2000) {
    die("File tidak boleh lebih dari 1MB");
}

if ($fileKtp->type !== 'image/jpeg') {
    die("File ktp harus jpeg!");
}

# mulai upload file
$uploadFotoSukses = move_uploaded_file(
    $fileFoto->tmp_name, "{$folderUpload}/{$fileFoto->name}"
);

$uploadKtpSukses = move_uploaded_file(
    $fileKtp->tmp_name, "{$folderUpload}/{$fileKtp->name}"
);

if ($uploadFotoSukses) {
    $link = "{$folderUpload}/{$fileFoto->name}";
    echo "Sukses Upload Foto: <a href='{$link}'>{$fileFoto->name}</a>";
    echo "<br>";
}

if ($uploadKtpSukses) {
    $link = "{$folderUpload}/{$fileKtp->name}";
    echo "Sukses Upload KTP: <a href='{$link}'>{$fileKtp->name}</a>";
    echo "<br>";
}
