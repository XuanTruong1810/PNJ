<?php
require_once '../../DesignPattern/Singleton.php';
$publicFile = Singleton::getInstance()->PublicFile();
$pagination = isset($_GET['pagination']) ? intval($_GET['pagination']) : 1;
$totalPage = 10;
$start = ($pagination - 1) * $totalPage + 1;
$end = $start + $totalPage - 1;
?>
<div class="product row">
    <?php
    for ($i = 0; $i < 8; $i++) {
    ?>

        <div class="item col-sm-3">
            <div class="img">
                <a href="?page=detail&product=<?php echo $i; ?>">
                    <img src="<?php echo $publicFile ?>/Image/Products/jhhasodjc.png" alt="">
                </a>
            </div>
            <div>
                <div>
                    <a href="#">Nhẫn Vàng Trắng 10K đính đá ECZ PNJ XMXMW004720</a>
                </div>
                <div>
                    <p class="price">6.116.000đ</p>
                </div>
            </div>
            <div class="pay">
                <p>48 đã bán</p>
            </div>
        </div>

    <?php
    }
    ?>
    <div class="pagination-container">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href=" <?php echo "?pagination=" . ($pagination - 1); ?>">Previous</a></li>
                <li class="page-item"><a class="page-link" href="?pagination=1">1</a></li>
                <li class="page-item"><a class="page-link" href="?pagination=2">2</a></li>
                <li class="page-item"><a class="page-link" href="?pagination=3">3</a></li>
                <li class="page-item"><a class="page-link" href="<?php echo "?pagination=" . ($pagination + 1); ?>">Next</a></li>
            </ul>
        </nav>
    </div>
</div>