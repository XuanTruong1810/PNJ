<?php
$product = $_GET['product'];


/// truy vấn cơ sở dữ liệu;

?>

<div class="detail">
    <div class="detail_left">
        <div class="detail_left-listImage">
            <div>
                <img src="<?php echo $publicFile; ?>/Image/Products/jhhasodjc.png" alt="">
            </div>
            <div>
                <img src="<?php echo $publicFile; ?>/Image/Products/jhhasodjc.png" alt="">
            </div>
            <div>
                <img src="<?php echo $publicFile; ?>/Image/Products/jhhasodjc.png" alt="">
            </div>
            <div>
                <img src="<?php echo $publicFile; ?>/Image/Products/jhhasodjc.png" alt="">
            </div>
        </div>
        <div class="detail_left-image">
            <div>
                <img src="<?php echo $publicFile; ?>/Image/Products/jhhasodjc.png" alt="">
            </div>
        </div>
    </div>
    <div class="detail_right">
        <div>
            <h5>Bộ trang sức cưới Vàng trắng 10K đính đá ECZ PNJ Trầu cau 00373-04069</h5>
        </div>
        <div>
            <p>Mã: GCXMXMW000373-GNXMXMW004069 </p>
        </div>

        <div class="price">
            <p style="font-size: 18px; color: #003468;">Giá: 34.644.000đ </p>
        </div>
        <form action="?page=checkout-cart" method="post">
            <div class="size">
                <p>Chọn kích cỡ </p>
                <input type="radio" name="size" id="size1" value="1">
                <label for="size1"><span>1</span></label>
                <input type="radio" name="size" id="size2" value="2">
                <label for="size2"><span>2</span></label>
                <input type="radio" name="size" id="size3" value="3">
                <label for="size3"><span>3</span></label>
            </div>
            <div>
                <button type="submit" class="Add-to-card">
                    THÊM VÀO GIỎ HÀNG
                    <p>Quý khách vui lòng chọn kích cỡ tại giỏ hàng</p>
                </button>
            </div>
        </form>
        <ul>
            <li> <i class=" fa-sharp fa-solid fa-circle-check "></i>Giá sản phẩm thay đổi tuỳ trọng lượng vàng và đá</li>
            <li> <i class=" fa-sharp fa-solid fa-circle-check "></i>Đổi sản phẩm trong 48h tại hệ thống cửa hàng PNJ</li>
            <li> <i class=" fa-sharp fa-solid fa-circle-check "></i>Miễn phí giao nhanh Toàn Quốc 1-7 ngày</li>
        </ul>
    </div>
</div>