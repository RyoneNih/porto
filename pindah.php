<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $nomor = @$_POST['nomor'];
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Konfirmasi</h1>
        <p>Apakah Anda Yakin??</p>
        <a href="https://wa.me/<?php echo $nomor;?>" class="btn btn-primary">Ya</a>
    </div>
</body>
</html>