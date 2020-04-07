<?php

$listPesanError = [
    'required' => function ($field) {
        return "Field {$field} harus diisi.";
    },
    'email' => function ($field) {
        return "Field {$field} harus berupa email yang valid.";
    },
    'numeric' => function ($field) {
        return "Field {$field} harus berupa angka numerik.";
    },
    'url' => function ($field) {
        return "Field {$field} harus berupa url yang valid.";
    },
    'username' => function ($field) {
        return "Field {$field} hanya boleh berisi huruf, angka, dan underscore.";
    }
];