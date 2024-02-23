<?php
require_once '../../DesignPattern/Singleton.php';
$singleton = Singleton::getInstance();
$publicFile = $singleton->PublicFile();
?>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="<?php echo $publicFile ?>/css/config.index.css">
  <link rel="stylesheet" href="<?php echo $publicFile ?>/css/login.css">
</head>
<div id="wrapper">
  <div class="form" id="form-login">
    <img class="pnjimage" src="<?php echo $publicFile ?>/Image/Common/pnjlogo.jpg" style="text-align: justify;">
    <h1 class="form-heading" style="color: #475569; line-height: 1;">Chào mừng trở lại</h1>
    <p style="text-align: center; color: gray;">Vui lòng đăng nhập để tiếp tục</p>
    <div class="form-group">
      <input type="text" class="form-input" placeholder="Số điện thoại của bạn">
      <p style="color:blue">Bạn muốn nhận OTP qua:</p>
    </div>
    <input type="submit" value="SMS" class="form-submit">
    <div style="color:gray">Lợi ích khi đăng nhập/đăng kí MyPNJ</div>
    <ul class="list">
      <li><i class="fa-solid fa-circle-check"></i> Dễ dàng tra cứu hạng thẻ thành viên</li>
      <li><i class="fa-solid fa-circle-check"></i> Xem lịch sử giao dịch và hóa đơn điện tử</li>
      <li><i class="fa-solid fa-circle-check"></i> Xem được ưu đãi dành riêng cho quý khách</li>
    </ul>
  </div>
</div>