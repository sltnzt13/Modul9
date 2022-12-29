<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Pemeriksaan file</h2>
    <?php
    $file='C:\\Texs.txt';
    if(file_exists($file))
    {
        echo("File <b> $file </br> sudah ada !");
    }else
    {
        echo("File <b> $file </br> tidak ada !");
    }
    ?>
</body>
</html>