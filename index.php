<?php 
require_once './inc/func.php';
require_once './lang/'.$_SESSION['lang'].'.php';
?>
<!DOCTYPE html>
<html lang="<?= $_SESSION['lang'] ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$header['fr']?></title>
</head>

<body>

<ul>
    <li><a href="?lang=fr"><?=$header['fr']?></a></li>
    <li><a href="?lang=en"><?=$header['en']?></a></li>
</ul>
   
<h1><?=$header['title']?></h1>
</body>

</html>