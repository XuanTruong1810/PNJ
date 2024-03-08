<?php
require_once '../../DesignPattern/Singleton.php';
$singleton = Singleton::getInstance();
$publicFile = $singleton->PublicFile();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="<?php echo $publicFile ?>/css/Cashier/index.css">
</head>

<body>
    <div class="app container">
        <div style=" margin-bottom: 10px;width: 100%;display: flex;justify-content: space-between; align-items: center;">
            <div class="logo">
                <img src="<?php echo $publicFile ?>/Image/Common/logo.png" alt="">
            </div>
            <div>
                <p style="color: black; font-size: 1.4rem;font-weight: bold;">
                    Địa chỉ: 227/13/10 Phạm đăng Giảng
                </p>
            </div>
        </div>
        <div class="main">
            <div class="left">
                <div class="order">
                    <h1>Tạo đơn hàng</h1>
                </div>
                <div class="header">
                    <div>
                        <p>
                            Product
                        </p>
                    </div>
                    <div>
                        <input type="text" placeholder="Tìm kiếm sản phẩm">
                    </div>
                </div>
                <div class="product row ">

                    <div class="item col-sm-3">

                        <div class="item-img">
                            <img src="<?php echo $publicFile ?>/Image/Common/logo.png" alt="">
                        </div>
                        <div class="name">
                            <p>Name product</p>
                        </div>
                        <div class="price">
                            <p>Price</p>
                        </div>

                        <div class="size-selector">
                            <input type="radio" id="S" name="size" value="S">
                            <label for="S" class="size-button">S</label>

                            <input type="radio" id="M" name="size" value="M">
                            <label for="M" class="size-button">M</label>

                            <input type="radio" id="L" name="size" value="L">
                            <label for="L" class="size-button">L</label>
                            <input type="radio" id="XL" name="size" value="XL">
                            <label for="XL" class="size-button">XL</label>

                        </div>


                        <div class="add">
                            <button>
                                Add
                            </button>
                        </div>

                    </div>
                    <div class="item col-sm-3">

                        <div class="item-img">
                            <img src="<?php echo $publicFile ?>/Image/Common/logo.png" alt="">
                        </div>
                        <div class="name">
                            <p>Name product</p>
                        </div>
                        <div class="price">
                            <p>Price</p>
                        </div>

                        <div class="size-selector">
                            <input type="radio" id="S" name="size" value="S">
                            <label for="S" class="size-button">S</label>

                            <input type="radio" id="M" name="size" value="M">
                            <label for="M" class="size-button">M</label>

                            <input type="radio" id="L" name="size" value="L">
                            <label for="L" class="size-button">L</label>
                            <input type="radio" id="XL" name="size" value="XL">
                            <label for="XL" class="size-button">XL</label>

                        </div>


                        <div class="add">
                            <button>
                                Add
                            </button>
                        </div>

                    </div>
                    <div class="item col-sm-3">

                        <div class="item-img">
                            <img src="<?php echo $publicFile ?>/Image/Common/logo.png" alt="">
                        </div>
                        <div class="name">
                            <p>Name product</p>
                        </div>
                        <div class="price">
                            <p>Price</p>
                        </div>

                        <div class="size-selector">
                            <input type="radio" id="S" name="size" value="S">
                            <label for="S" class="size-button">S</label>

                            <input type="radio" id="M" name="size" value="M">
                            <label for="M" class="size-button">M</label>

                            <input type="radio" id="L" name="size" value="L">
                            <label for="L" class="size-button">L</label>
                            <input type="radio" id="XL" name="size" value="XL">
                            <label for="XL" class="size-button">XL</label>

                        </div>


                        <div class="add">
                            <button>
                                Add
                            </button>
                        </div>

                    </div>
                    <div class="item col-sm-3">

                        <div class="item-img">
                            <img src="<?php echo $publicFile ?>/Image/Common/logo.png" alt="">
                        </div>
                        <div class="name">
                            <p>Name product</p>
                        </div>
                        <div class="price">
                            <p>Price</p>
                        </div>

                        <div class="size-selector">
                            <input type="radio" id="S" name="size" value="S">
                            <label for="S" class="size-button">S</label>

                            <input type="radio" id="M" name="size" value="M">
                            <label for="M" class="size-button">M</label>

                            <input type="radio" id="L" name="size" value="L">
                            <label for="L" class="size-button">L</label>
                            <input type="radio" id="XL" name="size" value="XL">
                            <label for="XL" class="size-button">XL</label>

                        </div>


                        <div class="add">
                            <button>
                                Add
                            </button>
                        </div>

                    </div>
                    <div class="item col-sm-3">

                        <div class="item-img">
                            <img src="<?php echo $publicFile ?>/Image/Common/logo.png" alt="">
                        </div>
                        <div class="name">
                            <p>Name product</p>
                        </div>
                        <div class="price">
                            <p>Price</p>
                        </div>

                        <div class="size-selector">
                            <input type="radio" id="S" name="size" value="S">
                            <label for="S" class="size-button">S</label>

                            <input type="radio" id="M" name="size" value="M">
                            <label for="M" class="size-button">M</label>

                            <input type="radio" id="L" name="size" value="L">
                            <label for="L" class="size-button">L</label>
                            <input type="radio" id="XL" name="size" value="XL">
                            <label for="XL" class="size-button">XL</label>

                        </div>


                        <div class="add">
                            <button>
                                Add
                            </button>
                        </div>

                    </div>
                    <div class="item col-sm-3">

                        <div class="item-img">
                            <img src="<?php echo $publicFile ?>/Image/Common/logo.png" alt="">
                        </div>
                        <div class="name">
                            <p>Name product</p>
                        </div>
                        <div class="price">
                            <p>Price</p>
                        </div>

                        <div class="size-selector">
                            <input type="radio" id="S" name="size" value="S">
                            <label for="S" class="size-button">S</label>

                            <input type="radio" id="M" name="size" value="M">
                            <label for="M" class="size-button">M</label>

                            <input type="radio" id="L" name="size" value="L">
                            <label for="L" class="size-button">L</label>
                            <input type="radio" id="XL" name="size" value="XL">
                            <label for="XL" class="size-button">XL</label>

                        </div>


                        <div class="add">
                            <button>
                                Add
                            </button>
                        </div>

                    </div>
                    <div class="item col-sm-3">

                        <div class="item-img">
                            <img src="<?php echo $publicFile ?>/Image/Common/logo.png" alt="">
                        </div>
                        <div class="name">
                            <p>Name product</p>
                        </div>
                        <div class="price">
                            <p>Price</p>
                        </div>

                        <div class="size-selector">
                            <input type="radio" id="S" name="size" value="S">
                            <label for="S" class="size-button">S</label>

                            <input type="radio" id="M" name="size" value="M">
                            <label for="M" class="size-button">M</label>

                            <input type="radio" id="L" name="size" value="L">
                            <label for="L" class="size-button">L</label>
                            <input type="radio" id="XL" name="size" value="XL">
                            <label for="XL" class="size-button">XL</label>

                        </div>


                        <div class="add">
                            <button>
                                Add
                            </button>
                        </div>

                    </div>
                    <div class="item col-sm-3">

                        <div class="item-img">
                            <img src="<?php echo $publicFile ?>/Image/Common/logo.png" alt="">
                        </div>
                        <div class="name">
                            <p>Name product</p>
                        </div>
                        <div class="price">
                            <p>Price</p>
                        </div>

                        <div class="size-selector">
                            <input type="radio" id="S" name="size" value="S">
                            <label for="S" class="size-button">S</label>

                            <input type="radio" id="M" name="size" value="M">
                            <label for="M" class="size-button">M</label>

                            <input type="radio" id="L" name="size" value="L">
                            <label for="L" class="size-button">L</label>
                            <input type="radio" id="XL" name="size" value="XL">
                            <label for="XL" class="size-button">XL</label>

                        </div>


                        <div class="add">
                            <button>
                                Add
                            </button>
                        </div>

                    </div>
                    <div class="item col-sm-3">

                        <div class="item-img">
                            <img src="<?php echo $publicFile ?>/Image/Common/logo.png" alt="">
                        </div>
                        <div class="name">
                            <p>Name product</p>
                        </div>
                        <div class="price">
                            <p>Price</p>
                        </div>

                        <div class="size-selector">
                            <input type="radio" id="S" name="size" value="S">
                            <label for="S" class="size-button">S</label>

                            <input type="radio" id="M" name="size" value="M">
                            <label for="M" class="size-button">M</label>

                            <input type="radio" id="L" name="size" value="L">
                            <label for="L" class="size-button">L</label>
                            <input type="radio" id="XL" name="size" value="XL">
                            <label for="XL" class="size-button">XL</label>

                        </div>


                        <div class="add">
                            <button>
                                Add
                            </button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="right">
                <div>
                    <div>
                        <h1>Order detail</h1>
                    </div>
                    <div>
                        <h4>Thôn tin người dùng</h4>
                    </div>
                    <div style="width: 100%;" class="info">
                        <div>
                            <p>name</p>
                            <input type="text">
                        </div>
                        <div>
                            <p>name</p>
                            <input type="text">
                        </div>
                    </div>
                </div>
                <div class="pay">
                    <h3>Items</h3>
                    <div class="details">
                        <div class="detail_item">
                            <div class="img">
                                <img src="<?php echo $publicFile ?>/Image/Common/logo.png" alt="">
                            </div>
                            <div style="margin-left: 10px;">
                                <p style="font-size: 1.4rem; font-weight: bold;">name</p>
                                <p style="color: #97A1AA;font-size: 1.2rem;">size M</p>
                                <div class="detail_item-price">
                                    <div>
                                        <p style="font-size: 1.6rem; font-weight: bold;">
                                            12.000đ
                                        </p>
                                    </div>
                                    <div>
                                        <input type="number" name="" id="">
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="Summary">
                    <h3>Order summary</h3>
                    <div class="Summary_detail">
                        <div>
                            <p>name</p>
                            <p>4item</p>
                        </div>
                        <div>
                            <p>name</p>
                            <p>4item</p>
                        </div>
                        <div>
                            <p>name</p>
                            <p>4item</p>
                        </div>
                        <div>
                            <p>name</p>
                            <p>4item</p>
                        </div>
                        <div class="Price">
                            <p>Giá</p>
                            <p>23.000đ</p>
                        </div>
                    </div>
                </div>
                <div class="Pay">
                    <div>
                        <h4>Phương thức thanh toán</h4>
                    </div>
                    <div>
                        <div>
                            <button>MOMO</button>
                        </div>
                        <div>
                            <button>Tiền mặt</button>
                        </div>
                        <div>
                            <button>Chuyển khoản</button>
                        </div>
                    </div>
                </div>
                <div class="submit">
                    <button>
                        Thanh toán
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>