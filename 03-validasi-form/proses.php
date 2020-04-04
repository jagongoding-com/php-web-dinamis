<?php

require_once './helper/fungsi-validasi.php';

$peraturan = [
    'nama' => ['required'],
    'email' => ['required', 'email'],
    'username' => ['required', 'username'],
    'usia' => ['required', 'numeric'],
    'website' => ['required', 'url']
];

validasi($peraturan);