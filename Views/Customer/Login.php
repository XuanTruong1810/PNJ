<?php
require_once '../../DesignPattern/Singleton.php';
$publicFile = Singleton::getInstance()->PublicFile();

// TODO Send OTP To Phone Number 

// require_once '../../vendor/autoload.php';

// use Twilio\Rest\Client;

// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//   $phoneNumber = isset($_POST["phoneNumber"]) ? $_POST["phoneNumber"] : "";

//   $account_sid = 'AC894575479f577d9650dfe17aea46c310';
//   $auth_token = '76dbfacba722155cb548ee9909b78655';
//   $twilio_number = '0971758902';

//   $to_phone_number = '0971758902';


//   $otp = mt_rand(100000, 999999);

//   $message = "Your OTP is: $otp";

//   $client = new Client($account_sid, $auth_token);

//   $client->messages->create(
//     $to_phone_number,
//     ['from' => $twilio_number, 'body' => $message]
//   );
// }


?>
<?php include '../head.php' ?>
<div id="wrapper">
  <form class="form" id="form-login" method="post" action="" name="form_login">
    <img class="pnjimage" src="<?php echo $publicFile ?>/Image/Common/pnjlogo.jpg" style="text-align: justify;">
    <h1 class="form-heading" style="color: #475569; line-height: 1;">Chào mừng trở lại</h1>
    <p style="text-align: center; color: gray;">Vui lòng đăng nhập để tiếp tục</p>
    <div class="form-group">
      <input name="phoneNumber" type="text" pattern="[0-9]+([.,][0-9]+)?" title="Chỉ chấp nhận số" class="form-input" placeholder="Số điện thoại của bạn">
      <p style="color:blue">Bạn muốn nhận OTP qua:</p>
    </div>
    <input type="submit" value="SMS" class="form-submit">
    <div style="color:gray">Lợi ích khi đăng nhập/đăng kí MyPNJ</div>
    <ul class="list">
      <li><i class="fa-solid fa-circle-check"></i> Dễ dàng tra cứu hạng thẻ thành viên</li>
      <li><i class="fa-solid fa-circle-check"></i> Xem lịch sử giao dịch và hóa đơn điện tử</li>
      <li><i class="fa-solid fa-circle-check"></i> Xem được ưu đãi dành riêng cho quý khách</li>
    </ul>
  </form>
</div>