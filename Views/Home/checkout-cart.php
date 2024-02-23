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
            for ($i = 0; $i < 1; $i++) {

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
            <div>
                <div class="pay_temp">
                    <div class="pay">
                        <p>Tạm phí</p>
                        <p>2.132.000đ</p>
                    </div>
                    <div class="pay">
                        <p>Chi phí vận chuyển</p>
                        <p style="font-weight: bold;">Miễn phí</p>
                    </div>
                </div>
                <div class="pay" style="margin-top: 10px;">
                    <p style="font-weight: bold;">Thành tiền</p>
                    <p style="color: red; font-weight: bold;">2.132.000đ</p>
                </div>
            </div>
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
                <div class="form-of-receipt cart-right-form">
                    <p>2</p>
                    <p>Hình thức nhận hàng</p>
                </div>
                <div>
                    <div class="input-info row">
                        <div class="col-sm-6">
                            <select name="province" id="province">
                                <option value="" selected>Chọn Tỉnh/Thành phố</option>

                            </select>
                        </div>
                        <div class="col-sm-6">
                            <select name="city" id="city">
                                <option value="" selected>Chọn Quận/Huyện</option>

                            </select>
                        </div>
                        <div class="col-sm-6">
                            <select name="wards" id="wards">
                                <option value="" selected>Chọn Phường/Xã</option>

                            </select>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="road" placeholder="Số nhà, Tên đường">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="location_description" placeholder="Ghi chú">
                        </div>
                    </div>
                </div>
                <div>
                    <p>Phương thức vận chuyển</p>
                    <div class="shippingMethod">
                        <label for="">
                            <input type="radio" name="" id="">
                        </label>
                        <div>
                            <p>Miễn phí vận chuyển</p>
                            <p>Dự kiến nhận hàng: Chủ nhật, ngày 25/02/2024 - Chủ nhật, ngày 03/03/2024</p>
                        </div>
                    </div>
                </div>
                <div>
                    <ul class="checkbox-list">
                        <li>
                            <input type="checkbox" id="checkbox1" name="checkbox1">
                            <label for="checkbox1">Đồng ý nhận các thông tin và chương trình khuyến mãi của PNJ qua email, SMS , mạng xã hội…</label>
                        </li>
                        <li>
                            <input type="checkbox" id="checkbox2" name="checkbox2">
                            <label for="checkbox2">Tôi đồng ý cho PNJ thu thập, xử lý dữ liệu cá nhân của tôi theo quy định tại Thông báo này và theo quy định của pháp luật.</label>
                        </li>
                    </ul>
                </div>
                <div style="text-align: center;">
                    <button>Đặt hàng</button>
                </div>
            </div>
        </div>
    </div>
</div>