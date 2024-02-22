<div class="checkout-cart">
    <div class="back-home">
        <a href="?page=home">
            <button><i class="fa-solid fa-caret-left"></i> Tiếp tục mua hàng</button>
        </a>
    </div>
    <div class="info-cart">
        <div class="cart-left">
            <h3>THÔNG TIN GIỎ HÀNG</h3>
            <?php
            for ($i = 0; $i < 5; $i++) {

            ?>
                <div class="item">
                    <div class="img">
                        <img src="<?php echo $publicFile; ?>/Image/Products/jhhasodjc.png" alt="">
                    </div>
                    <div class="info">
                        <div>
                            <h6>Dây cổ cưới Vàng Trắng 10K đính đá ECZ PNJ Trầu Cau XMXMW000373</h6>
                            <h6>Mã:GCXMXMW000373</h6>
                        </div>
                        <div class="form">
                            <div>
                                <p>Giá</p>
                                <p>30.534.000đ</p>

                            </div>
                            <div>
                                <div>
                                    <p>Size dây cổ:</p>
                                </div>
                                <div>
                                    <select name="" id="">
                                        <option value="">
                                            1
                                        </option>
                                        <option value="">
                                            1
                                        </option>
                                        <option value="">
                                            1
                                        </option>
                                        <option value="">
                                            1
                                        </option>
                                    </select>
                                </div>

                            </div>
                            <div>
                                <p>Số lượng</p>
                                <input type="number" name="" min="1" id="">

                            </div>
                        </div>
                        <div>
                            <p><i class="fa-solid fa-trash"></i> Xóa</p>
                        </div>

                    </div>
                </div>
                <div>
                    ---------------------------------------------------------------------
                </div>
            <?php  } ?>
        </div>
        <div class="cart-right">
            <div class="stepper-wrapper">
                <div class="stepper-item completed">
                    <div class="step-counter"><i class="fa-solid fa-check"></i></div>
                    <div class="step-name">Thông tin người mua</div>
                </div>
                <div class="stepper-item completed">
                    <div class="step-counter"><i class="fa-solid fa-check"></i></div>
                    <div class="step-name">Hình thức nhận hàng</div>
                </div>
                <div class="stepper-item active">
                    <div class="step-counter"><i class="fa-solid fa-check"></i></div>
                    <div class="step-name">Đặt hàng</div>
                </div>
                <div class="stepper-item">
                    <div class="step-counter"><i class="fa-solid fa-check"></i></div>
                    <div class="step-name">Thanh toán</div>
                </div>
            </div>
            <div>
                <div class="infoUser cart-right-form">
                    <p>1</p>
                    <p>Thông tin người mua</p>
                </div>
                <div>
                    <div class="gender">
                        <div style="margin-right: 10px;">
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Anh</label><br>
                        </div>
                        <div>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Chị</label><br>
                        </div>
                    </div>
                    <div class="input-info row">
                        <div class="col-sm-6"><input type="text" placeholder="Họ tên(Bắt buộc)"></div>
                        <div class="col-sm-6"><input type="text" placeholder="SĐT (bắt buộc)"></div>
                        <div class="col-sm-6"><input type="text" placeholder="Email"></div>
                        <div class="col-sm-6"><input type="date" placeholder="Ngày sinh"></div>
                    </div>
                    <div class="continue">
                        <button class="continue">Tiếp tục</button>
                    </div>
                </div>
                <div class="form-of-receipt  cart-right-form">
                    <p>2</p>
                    <p>Hình thức nhận hàng</p>
                </div>
                <div>
                    <div class="input-info row">
                        <div class="col-sm-6"><input type="text" placeholder="Họ tên(Bắt buộc)"></div>
                        <div class="col-sm-6"><input type="text" placeholder="SĐT (bắt buộc)"></div>
                        <div class="col-sm-6"><input type="text" placeholder="Email"></div>
                        <div class="col-sm-6"><input type="date" placeholder="Ngày sinh"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>