<main>
    <div class="container">
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';
        switch ($page) {
            case 'home':
                break;
            case 'main1':
                include './main1.php';
                break;
            case 'main2':
                include './main2.php';
                break;
            case 'main3':
                include './main3.php';
                break;
            default:
                include '404.php';
                break;
        }
        ?>
    </div>
</main>