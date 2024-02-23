<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $brand = isset($_GET['brand']) ? $_GET['brand'] : '';
    $price = isset($_GET['price']) ? $_GET['price'] : '';
    $age = isset($_GET['age']) ? $_GET['age'] : '';
    $stone = isset($_GET['stone']) ? $_GET['stone'] : '';
    $material = isset($_GET['material']) ? $_GET['material'] : '';
    $gender = isset($_GET['gender']) ? $_GET['gender'] : '';
    $jewelry = isset($_GET['Jewelry']) ? $_GET['Jewelry'] : '';
    $color = isset($_GET['color']) ? $_GET['color'] : '';
}
?>

<div>
    <div class="homePage-top">
        <div class="main_productList-left">
            <p>Bộ lọc</p>
            <div class="filter">
                <form action="" method="get" name="Form_Filter">
                    <select class="brand-select" name="brand">
                        <option value="" selected disabled>Thương hiệu</option>
                        <option value="value1" <?php if ($brand == 'value1') echo 'selected' ?>>PNJ</option>
                        <option value="value2" <?php if ($brand == 'value2') echo 'selected' ?>>PNJSilver</option>
                        <option value="value3" <?php if ($brand == 'value3') echo 'selected' ?>>STYLE BY PNJ</option>
                        <option value="value4" <?php if ($brand == 'value4') echo 'selected' ?>>Disney|PNJ</option>
                        <option value="value5" <?php if ($brand == 'value5') echo 'selected' ?>>SANRIO</option>
                    </select>
                    <select class="price-select" name="price">
                        <option value="" selected disabled>Giá</option>
                        <option value="value1">Vàng 10k</option>
                        <option value="value1">Vàng 14k</option>
                        <option value="value1">Vàng 18k</option>
                        <option value="value1">Vàng 24k</option>
                    </select>
                    <select class="age-select" name="age">
                        <option value="" selected disabled>Tuổi vàng</option>
                        <option value="value1">Vàng 10k</option>
                        <option value="value2">Vàng 14k</option>
                        <option value="value3">Vàng 18k</option>
                        <option value="value4">Vàng 24k</option>
                    </select>
                    <select class="type-select-stone-primary" name="stone">
                        <option value="" selected disabled>Loại đá chính</option>
                        <option value="Freshwater Pearl">Freshwater Pearl</option>
                        <option value="Ruby">Ruby</option>
                        <option value="Sapphire">Sapphire</option>
                        <option value="Topaz">Topaz</option>
                        <option value="Citrine">Citrine</option>
                        <option value="Amethyst">Amethyst</option>
                        <option value="ECZ">ECZ</option>
                        <option value="CZ">CZ</option>
                        <option value="Synthetic">Synthetic</option>
                        <option value="Tourmaline">Tourmaline</option>
                        <option value="Moon">Moon</option>
                        <option value="Peridot">Peridot</option>
                        <option value="Garnat">Garnat</option>
                        <option value="Southsea Pearl">Southsea Pearl</option>
                        <option value="Tahiti Pearl">Tahiti Pearl</option>
                        <option value="Akoya Pearl">Akoya Pearl</option>
                        <option value="Quartz">Quartz</option>
                        <option value="Tsavorite">Tsavorite</option>
                        <option value="Tanzanite">Tanzanite</option>
                        <option value="Nhân tạo">Nhân tạo</option>
                        <option value="Không gắn đá">Không gắn đá</option>
                        <option value="Sythetic">Sythetic</option>
                        <option value="Kim cương">Kim cương</option>
                        <option value="Ngọc trai">Ngọc trai</option>
                        <option value="Suncut">Suncut</option>
                        <option value="Ngọc Trai Swarovski">Ngọc Trai Swarovski</option>
                        <option value="Xoàn mỹ">Xoàn mỹ</option>
                        <option value="Diamond">Diamond</option>
                    </select>
                    <select class="material-select" name="material">
                        <option value="" selected disabled>Chất liệu</option>
                        <option value="value1">Vàng</option>
                        <option value="value1">Bạc</option>
                        <option value="value1">Hợp kim cao cấp</option>
                        <option value="value1">Platinum</option>
                    </select>
                    <select class="gender-select" name="gender">
                        <option value="" selected disabled>Giới tính</option>
                        <option value="value1">Nam</option>
                        <option value="value1">Nữ</option>
                        <option value="value1">Unisex</option>
                        <option value="value1">Trẻ con</option>
                    </select>
                    <select class="typeOfJewelry-select" name="Jewelry">
                        <option value="" selected disabled>Loại trang sức</option>
                        <option value="value1">Nhẫn</option>
                        <option value="value1">Sản phẩm theo bộ</option>
                    </select>
                    <select class="color-select" name="color">
                        <option value="" selected disabled>Chọn màu sắc</option>
                        <option value="Vàng + Đen">Vàng + Đen</option>
                        <option value="Hồng + Đen">Hồng + Đen</option>
                        <option value="Trắng">Trắng</option>
                        <option value="Hồng">Hồng</option>
                        <option value="Vàng">Vàng</option>
                        <option value="3 màu">3 màu</option>
                        <option value="Màu khác">Màu khác</option>
                        <option value="Bạc si vàng hồng">Bạc si vàng hồng</option>
                        <option value="Vàng +Trắng">Vàng + Trắng</option>
                    </select>
                    <input type="submit" value="Lọc">
                </form>
            </div>
        </div>
        <div class="main_productList-right">
            <p>Sắp xếp</p>
            <div class="filter">
                <form action="" method="get" name="Form_Filter">
                    <select class="sort" name="sort">
                        <option value="" selected disabled>Sắp xếp</option>
                        <option value="value1">Giá từ thấp tới cao</option>
                        <option value="value2">Giá từ cao tới thấp</option>
                    </select>
                </form>
            </div>
        </div>
    </div>
    <div class="homepage-bot">
        <?php include "Products.php" ?>
    </div>
</div>