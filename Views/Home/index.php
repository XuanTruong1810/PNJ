<?php

require_once '../../DesignPattern/Singleton.php';
$singleton = Singleton::getInstance();
$publicFile = $singleton->PublicFile();
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo $publicFile ?>/css/home.css">
    <link rel="stylesheet" href="<?php echo $publicFile ?>/css/header.css">
    <link rel="stylesheet" href="<?php echo $publicFile ?>/css/footer.css">
    <link rel="stylesheet" href="<?php echo $publicFile ?>/css/products.css">
    <link rel="stylesheet" href="<?php echo $publicFile ?>/css/detail.css">
    <link rel="stylesheet" href="<?php echo $publicFile ?>/css/config.index.css">
    <link rel="stylesheet" href="<?php echo $publicFile ?>/css/cart.css">
</head>
<div>
    <?php include "./__Layout/Header.php" ?>
    <?php include "./__Layout/Main.php" ?>
    <?php include "./__Layout/Footer.php" ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo $publicFile ?>/js/Location.js"></script>