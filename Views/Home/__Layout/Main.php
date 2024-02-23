<main>
    <div class="container">
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
        switch ($page) {
            case 'home':
                include '../Home/home.php';
                break;
            case 'detail':
                include '../Home/detail.php';
                break;
            case 'checkout-cart':
                include '../Home/checkout-cart.php';
                break;
            default:
                include '404.php';
                break;
        }
        ?>
    </div>
</main>