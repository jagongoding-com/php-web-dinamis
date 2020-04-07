<?php

function validasi(array $listInput)
{
    # variabel berisi inputan baik dari metode POST mau pun GET
    $request = $_REQUEST;

    # perulangan untuk array terluar (berisi nama input)
    foreach ($listInput as $input => $listPeraturan) {
        echo "Periksa input <strong>{$input}</strong><br>";

        # perulangan untuk sub array (berisi nama peraturan)
        foreach ($listPeraturan as $peraturan) {
            echo "-> Peraturan <strong>{$peraturan}</strong>: ";

            $namaFungsi = 'lolos' . ucfirst($peraturan);
            $lolos = $namaFungsi($request[$input]);

            echo $lolos ? 'Lolos' : 'Tidak Lolos';

            echo "<br>";
        }

        echo "<br>";
    }
}

function lolosRequired($nilai)
{
    return (bool) @$nilai;
}

function lolosEmail($nilai)
{
    return filter_var($nilai, FILTER_VALIDATE_EMAIL);
}

function lolosUsername($nilai)
{
    preg_match("/^[a-zA-Z0-9_]+/", $nilai, $output);

    if (count($output)) {
        return $output[0] === $nilai;
    }

    return false;
}

function lolosNumeric($nilai)
{
    return is_numeric($nilai);
}

function lolosUrl($nilai)
{
    return filter_var($nilai, FILTER_VALIDATE_URL);
}