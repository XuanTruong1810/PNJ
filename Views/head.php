<?php
require_once '../../DesignPattern/Singleton.php';
$singleton = Singleton::getInstance();
$publicFile = $singleton->PublicFile();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo $publicFile ?>/css/config.index.css">
    <link rel="stylesheet" href="<?php echo $publicFile ?>/css/Home/home.css">
    <link rel="stylesheet" href="<?php echo $publicFile ?>/css/Home/header.css">
    <link rel="stylesheet" href="<?php echo $publicFile ?>/css/Home/footer.css">
    <link rel="stylesheet" href="<?php echo $publicFile ?>/css/Home/products.css">
    <link rel="stylesheet" href="<?php echo $publicFile ?>/css/Home/detail.css">
    <link rel="stylesheet" href="<?php echo $publicFile ?>/css/Home/cart.css">
    <link rel="stylesheet" href="<?php echo $publicFile ?>/css/Customer/Customer.css">
    <link rel="stylesheet" href="<?php echo $publicFile ?>/css/Customer/login.css">
    <link rel="stylesheet" href="<?php echo $publicFile ?>/css/Customer/home.css">
</head>

<body>