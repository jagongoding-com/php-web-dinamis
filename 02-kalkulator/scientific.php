<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Scientific Sederhana | Jago Ngoding</title>
</head>
<body>
    <h1>Kalkulator Scientific Sederhana</h1>
    <form>
        <input type="text" name="ekspresi" placeholder="Ekspresi aritmatika" value="<?php echo @$_GET['ekspresi'] ?>">

        <div style="margin-top: 1rem">
            <button type="button" onclick="location.href = '?'">Clear</button>
            <button type="submit">Hitung</button>
        </div>
    </form>
    <?php
    if ($_GET):
        $ekspresi = @$_GET['ekspresi'];
        $hasil = eval("return {$ekspresi};"); ?>
        <div style="margin-top: 1rem">
            Hasil <strong><?php echo $hasil ?></strong>
        </div>
        <?php
    endif; ?>
</body>
</html>