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

            if ($peraturan === 'required') {
                $lolos = lolosRequired($request[$input]);

                echo $lolos ? "Lolos" : "Tidak Lolos";
            }

            echo "<br>";
        }

        echo "<br>";
    }
}

function lolosRequired($nilai)
{
    return (bool) @$nilai;
}