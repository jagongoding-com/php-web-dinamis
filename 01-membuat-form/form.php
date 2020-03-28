<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Sederhana</title>
</head>
<body>
    <form>
        <div>
            <label>Nama</label> <br>
            <input name="nama" type="text" placeholder="Masukkan nama">
        </div>
        <div>
            <label>Alamat</label> <br>
            <input name="alamat" type="text" placeholder="Masukkan alamat">
        </div>
        <div>
            <button>Submit</button>
        </div>
    </form>
    <?php # membuka tag PHP
    
    $nama = @$_GET['nama'];
    $alamat = @$_GET['alamat'];

    # tampilkan variabel $nama dan $alamat
    if ($nama) {
        echo "<strong>Nama:</strong> {$nama} <br>";
    }
    
    if ($alamat) {
        echo "<strong>Alamat:</strong> {$alamat} <br>";
    }
    # jangan lupa tutup tag PHP
    ?>
</body>
</html>