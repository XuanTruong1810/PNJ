<?php
require_once '../../DesignPattern/Singleton.php';
$publicFile = Singleton::getInstance()->PublicFile();


?>
<header>
    <div class="container">
        <div class="header_top">
            <div class="header_top-left">
                <div>
                    <span><i class="fa-solid fa-headphones"></i></span>
                    <span>0971758902</span>
                </div>
            </div>
            <div class="header_top-middle">
                <div>
                    <!-- <a href="?page=home"> -->
                    <img src="<?php echo $publicFile; ?>/Image/Common/logo.png" alt="abc" />

                    <!-- </a> -->

                </div>
            </div>
            <div class="header_top-right">
                <div>
                    <span><i class="fa-regular fa-user"></i></span>
                    <a href="../Customer/?page=login">
                        <span>Tài khoản của tôi</span>
                    </a>
                </div>
                <div>
                    <a href="?page=checkout-cart">
                        <span><i class="fa-solid fa-cart-shopping"></i></span>
                        <span>Giỏ hàng</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="header_bot">
            <div><a href="#">Trang sức</a></div>
            <div><a href="#">Trang sức cưới</a></div>
            <div><a href="#">Đồng hồ</a></div>
            <div><a href="#">Quà tặng</a></div>
            <div><a href="#">Thương hiệu</a></div>
            <div><a href="#">Blog</a></div>
            <div><a href="#">Khuyến mãi</a></div>
            <div class="search">
                <input pattern="[a-zA-Z]+" title="Chỉ chấp nhận ký tự chữ" type="text" placeholder="Tìm kiếm trang sức" />
            </div>
        </div>
    </div>
</header>