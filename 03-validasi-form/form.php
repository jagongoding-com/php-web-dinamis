<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi Form</title>
</head>
<body>
    <h1>Validasi Form</h1>
    <form action="proses.php">
        <div>
            <label>Nama</label> <br>
            <input type="text" name="nama" placeholder="Masukkan nama">
        </div>
        <div style="margin-top: 0.5rem">
            <label>Email</label> <br>
            <input type="text" name="email" placeholder="Masukkan email">
        </div>
        <div style="margin-top: 0.5rem">
            <label>Username</label> <br>
            <input type="text" name="username" placeholder="Masukkan username">
        </div>
        <div style="margin-top: 0.5rem">
            <label>Usia</label> <br>
            <input type="text" name="usia" placeholder="Masukkan usia">
        </div>
        <div style="margin-top: 0.5rem">
            <label>Website</label> <br>
            <input type="text" name="website" placeholder="Masukkan website">
        </div>

        <div style="margin-top: 0.5rem">
            <button>Submit</button>
        </div>
    </form>
</body>
</html>