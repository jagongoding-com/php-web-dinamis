<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi Form</title>
</head>
<body>
    <h1>Validasi Form</h1>
    <?php
        $old = (object) @$_GET['old'];
        $errors = (object) @$_GET['errors'];
    ?>
    <form action="proses.php">
        <div>
            <label>Nama</label> <br>
            <input type="text" name="nama" value="<?php echo @$old->nama ?>" placeholder="Masukkan nama">
            <?php
            if (@$errors->nama):?>
                <div style="color: red"><?php echo $errors->nama[0] ?></span>
            <?php
            endif; ?>
        </div>
        <div style="margin-top: 0.5rem">
            <label>Email</label> <br>
            <input type="text" name="email" value="<?php echo @$old->email ?>" placeholder="Masukkan email">
            <?php
            if (@$errors->email):?>
                <div style="color: red"><?php echo $errors->email[0] ?></span>
            <?php
            endif; ?>
        </div>
        <div style="margin-top: 0.5rem">
            <label>Username</label> <br>
            <input type="text" name="username" value="<?php echo @$old->username ?>" placeholder="Masukkan username">
            <?php
            if (@$errors->username):?>
                <div style="color: red"><?php echo $errors->username[0] ?></span>
            <?php
            endif; ?>
        </div>
        <div style="margin-top: 0.5rem">
            <label>Usia</label> <br>
            <input type="text" name="usia" value="<?php echo @$old->usia ?>" placeholder="Masukkan usia">
            <?php
            if (@$errors->usia):?>
                <div style="color: red"><?php echo $errors->usia[0] ?></span>
            <?php
            endif; ?>
        </div>
        <div style="margin-top: 0.5rem">
            <label>Website</label> <br>
            <input type="text" name="website" value="<?php echo @$old->website ?>" placeholder="Masukkan website">
            <?php
            if (@$errors->website):?>
                <div style="color: red"><?php echo $errors->website[0] ?></>
            <?php
            endif; ?>
        </div>

        <div style="margin-top: 0.5rem">
            <button>Submit</button>
        </div>
    </form>
</body>
</html>