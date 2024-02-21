<main>
    <div class="container">
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
        switch ($page) {
            case 'home':
                include './home.php';
                break;
            case 'detail':
                include './detail.php';
                break;
            default:
                include '404.php';
                break;
        }
        ?>
    </div>
</main>