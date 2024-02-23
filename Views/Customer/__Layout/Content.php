<div>
    <header> Header</header>
    <div>
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
        switch ($page) {
            case 'info':
                include './info.php';
                break;
            case 'history':
                include './history.php';
                break;
            case 'checkout-cart':
                include './checkout-cart.php';
                break;
            default:
                include '404.php';
                break;
        }
        ?>
    </div>
</div>