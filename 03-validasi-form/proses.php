<?php

require_once './helper/fungsi-validasi.php';

$peraturan = [
    'nama' => ['required'],
    'email' => ['required', 'email'],
    'username' => ['required', 'username'],
    'usia' => ['required', 'numeric'],
    'website' => ['required', 'url']
];

$errors = validasi($peraturan);

if (count($errors) > 0) {
    $old = $_REQUEST;
    $queryString = http_build_query([
        'errors' => $errors,
        'old' => $old
    ]);
    
    header("Location: form.php?{$queryString}");
    die();
}
