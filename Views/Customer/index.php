<?php include '../head.php' ?>



<?php
$publicFile = Singleton::getInstance()->PublicFile();
$page = isset($_GET['page']) ? $_GET['page'] : "home";

if ($page == 'login') {
    include '../Customer/Login.php';
    exit();
}
?>
<div>
    <div class="container-fluid customer ">
        <div class="row">
            <?php include '../Customer/__Layout/Nav.php' ?>

            <div class="col-sm-9 header-right">
                <?php include '../Customer/__Layout/header.php' ?>

                <div class="customer_main">
                    <!-- include dữ liệu -->
                    <?php include '../Customer/__Layout/Main.php' ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../script.php' ?>