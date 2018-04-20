<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */
  $redirect_fail = $_POST["s_home_url"]; 
if($_POST["s_token"]=='b3JkZXJfaWQ9NzkzNjd8dHlwZT1kZXZlbG9wZXJ8ZGF0ZT0yMDE2LTA0LTEyIDAyOjAyOjA5') { ?>
<?php
// info mail
 $admin_mail = $_POST["s_mail_admin"];  
 $title_mail = $_POST["s_ten_cong_ty"]; 
 $smtp_username_mail = "";
 $smtp_password_mail = "";
 $redirect_success = $_POST["s_cam_on_mua_hang_url"]; 

 $alt_mail ="Có đơn hàng mới từ khách hàng "; // Nội dung rút gọn bên ngoài thư, ex : Có liên hệ mới từ khách hàng
 $alt_mail_customer ="Cảm ơn quý khách đã đặt hàng tại ".$title_mail;
 
 if (isset($_POST["s_name"])) {$name =  $_POST["s_name"];}
 if (isset($_POST["s_mail"])) {$email =  $_POST["s_mail"];}
 if (isset($_POST["s_tel"])) {$tel =  $_POST["s_tel"];}
 if (isset($_POST["s_message"])) {$message =  $_POST["s_message"];}
 
 $payment_method = $_POST["s_checkout"];
 $find_payment = array("chuyen-khoan", "tien-mat");
 $replace_payment = array("Chuyển khoản ngân hàng", "Trả tiền mặt khi nhận hàng");
 $payment_method_result = str_replace($find_payment, $replace_payment, $payment_method);
 
// end info mail

$email_for_admin='

<div class="container-fluid" style="background:#ccc; padding:15px 0;width:100%;margin:0;">

    <div style="text-align:center;">

        <div class="header-email"  style="width:100%;max-width:630px;background:#fff;display:inline-block;"> <img src="'.$_POST["s_theme_url"].'/assets/images/header-email.png"> </div>

    </div>

    <div style="text-align:center;">

        <div id="content-primary-email" class="container" style="width:100%;max-width:630px;background:#fff;display:inline-block;padding: 10px 15px 30px 15px; font-family: Arial,Helvetica,sans-serif;text-align:left;box-sizing:border-box;">

            <div class="content-email">

                <div>

                    <h1 style="    font-size: 16px;

    font-weight: bold;

    color: #444;

    padding: 0 0 5px 0;

    margin: 0;">Đơn hàng mới từ khách hàng '.$_POST["s_name"].'</h1>

                    <p style="    margin: 4px 0;

    font-family: Arial,Helvetica,sans-serif;

    font-size: 12px;

    color: #444;

    line-height: 18px;

    font-weight: normal;"> Xin thông báo có 1 đơn hàng mới từ khách hàng <strong>'.$_POST["s_name"].'</strong>. (Mã đơn hàng : <strong> #'.$_POST["s_ma_don_hang"].'</strong>) <br>

                        Đơn hàng được đặt từ website <a href="http://thuocmoctocnhatban.vn" target="_blank" style="  text-decoration:underline;  font-family: Arial,Helvetica,sans-serif;

    font-size: 12px;

    color: #66ad44;

    line-height: 18px;

">www.thuocmoctocnhatban.vn</a> </p>

                </div>

                <div class="info-order-email">

                    <h2 style="font-size: 13px; font-weight: bold; color: #66ad44; text-transform: uppercase; margin: 20px 0 0 0; border-bottom: 1px solid #ddd; ">

					Thông tin đơn hàng #'.$_POST["s_ma_don_hang"].' <span style="font-size:12px;color:#777;text-transform:none;font-weight:normal">'.$_POST["s_ngay_thang"].'</span> </h2>

                </div>

                <div class=" info-check-out-email" >

                    <div style="width:50%;float:left;">

                        <h3 style="    padding: 6px 9px 0px 0px;

    font-family: Arial,Helvetica,sans-serif;

    font-size: 12px;

    color: #444;

    font-weight: bold;"> Thông tin thanh toán </h3>

                        <p style="    font-family: Arial,Helvetica,sans-serif;

    font-size: 12px;

    color: #444;

    line-height: 18px;

    font-weight: normal;"> '.$_POST["s_name"].'<br>

                            <a  target="_blank" style="  text-decoration:underline;  font-family: Arial,Helvetica,sans-serif;

    font-size: 12px;

    color: #66ad44;

    line-height: 18px;

">'.$_POST["s_mail"].'</a><br>

                            '.$_POST["s_tel"].'</p>

                    </div>

                    <div style="width:50%;float:left;">

                        <h3 style="    padding: 6px 9px 0px 0px;

    font-family: Arial,Helvetica,sans-serif;

    font-size: 12px;

    color: #444;

    font-weight: bold;"> Địa chỉ giao hàng </h3>

                        <p style="    font-family: Arial,Helvetica,sans-serif;

    font-size: 12px;

    color: #444;

    line-height: 18px;

    font-weight: normal;"> '.$_POST["s_address"].' </p>

                    </div>

                    <div style="clear:both"></div>

                </div>

                <p style="    font-family: Arial,Helvetica,sans-serif;

    font-size: 12px;

    color: #444;

    line-height: 18px;

    font-weight: normal;margin:0;"><strong> Phương thức thanh toán : </strong>'.$payment_method_result.'</p>

                

                <div class="">

                    <h2 style="font-size: 13px; font-weight: bold; color: #66ad44; text-transform: uppercase; margin: 20px 0 0 0; border-bottom: 1px solid #ddd; ">Chi tiết đơn hàng</h2>

                </div>

               '.$_POST["s_detail_order"].'

            </div>

            <div class="footer-email" style="margin-top:15px;">

                <div class="">

                    <p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal;border:1px #66ad44 dashed;padding:5px;list-style-type:none"> Hệ thống đã tự động gửi email xác nhận đơn hàng tới  <a href="mailto: '.$_POST["s_mail"].'" target="_blank" style="  text-decoration:underline;  font-family: Arial,Helvetica,sans-serif;

    font-size: 12px;

    color: #66ad44;

    line-height: 18px;

"> '.$_POST["s_mail"].'
</a> của khách hàng <strong> '.$_POST["s_name"].'</strong>. Để tránh những sai sót trong giao dịch, bạn có thể gọi vào số  '.$_POST["s_tel"].' của  '.$_POST["s_name"].' để xác nhận rõ về quá trình thanh toán hoặc vận chuyển hàng.
</p>
<p style="    font-family: Arial,Helvetica,sans-serif;

    font-size: 12px;

    color: #444;

    line-height: 18px;

    font-weight: normal;">Trường hợp có những băn khoăn về đơn hàng, bạn có thể truy cập trang quản trị <a href="http://thuocmoctocnhatban.vn" target="_blank" style="  text-decoration:underline;  font-family: Arial,Helvetica,sans-serif;

    font-size: 12px;

    color: #66ad44;

    line-height: 18px;

">www.thuocmoctocnhatban.vn</a> để xem đơn hàng chi tiết hơn.<br>
  <strong>Xin chân thành cảm ơn.</strong> </p>
<a href="http://thuocmoctocnhatban.vn" target="_blank" style=" text-decoration:none;   font-family: Arial,Helvetica,sans-serif;

    font-size: 12px;

    color: #66ad44;

    line-height: 18px;

"><strong style="float:right;">www.thuocmoctocnhatban.vn</strong> </a>
</div>
</div>
</div>
</div>
<div style="text-align:center;">
  <div  style="width:100%;max-width:630px;background:#ccc;display:inline-block; font-family: Arial,Helvetica,sans-serif;text-align:left;padding: 0;">
    <p style="font-family:Arial,Helvetica,sans-serif;font-size:11px;line-height:15px;color:#333;padding:10px 0;margin:0px;font-weight:normal;text-align:left;"> Quý khách nhận được email này vì có khách hàng đã đặt hàng tại Thuocmoctocnhatban.vn.</p>
  </div>
</div>
</div>
';

 if (isset($_POST["s_mail"])) {


$email_for_customer=' <div class="container-fluid" style="background:#ccc; padding:15px 0;width:100%;margin:0;">
    <div style="text-align:center;">
        <div class="header-email"  style="width:100%;max-width:630px;background:#fff;display:inline-block;"><img src="'.$_POST["s_theme_url"].'/assets/images/header-email.png"> </div>
    </div>
    <div style="text-align:center;">
        <div id="content-primary-email" class="container" style="width:100%;max-width:630px;background:#fff;display:inline-block;padding: 10px 15px 30px 15px; font-family: Arial,Helvetica,sans-serif;text-align:left;box-sizing:border-box;">
            <div class="content-email">
                <div>
                    <h1 style="    font-size: 16px;
    font-weight: bold;
    color: #444;
    padding: 0 0 5px 0;
    margin: 0;">Cảm ơn quý khách  '.$_POST["s_name"].' đã đặt hàng tại Thuocmoctocnhatban.vn</h1>
                    <p style="    margin: 4px 0;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 12px;
    color: #444;
    line-height: 18px;
    font-weight: normal;"> Chúng tôi xin thông báo đơn hàng<strong> #'.$_POST["s_ma_don_hang"].'</strong> của quý khách đã được tiếp nhận và đang trong quá trình xử lý. <br>
                        Thuocmoctocnhatban.vn sẽ thông báo đến quý khách ngay khi hàng chuẩn bị được giao. </p>
                </div>
                <div class="info-order-email">
                    <h2 style="font-size: 13px; font-weight: bold; color: #66ad44; text-transform: uppercase; margin: 20px 0 0 0; border-bottom: 1px solid #ddd; "> Thông tin đơn hàng #'.$_POST["s_ma_don_hang"].' <span style="font-size:12px;color:#777;text-transform:none;font-weight:normal">'.$_POST["s_ngay_thang"].'</span> </h2>
                </div>
                <div class=" info-check-out-email" >
                    <div style="width:50%;float:left;">
                        <h3 style="    padding: 6px 9px 0px 0px;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 12px;
    color: #444;
    font-weight: bold;"> Thông tin thanh toán </h3>
                        <p style="    font-family: Arial,Helvetica,sans-serif;
    font-size: 12px;
    color: #444;
    line-height: 18px;
    font-weight: normal;"> '.$_POST["s_name"].'<br>
                            <a  target="_blank" style="  text-decoration:underline;  font-family: Arial,Helvetica,sans-serif;
    font-size: 12px;
    color: #66ad44;
    line-height: 18px;
">'.$_POST["s_mail"].'</a><br>
                            '.$_POST["s_tel"].' </p>
                    </div>
                    <div style="width:50%;float:left;">
                        <h3 style="    padding: 6px 9px 0px 0px;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 12px;
    color: #444;
    font-weight: bold;"> Địa chỉ giao hàng </h3>
                        <p style="    font-family: Arial,Helvetica,sans-serif;
    font-size: 12px;
    color: #444;
    line-height: 18px;
    font-weight: normal;">  '.$_POST["s_address"].'  </p>
                    </div>
                    <div style="clear:both"></div>
                </div>
                <p style="    font-family: Arial,Helvetica,sans-serif;
    font-size: 12px;
    color: #444;
    line-height: 18px;
    font-weight: normal;margin:0;"><strong> Phương thức thanh toán : </strong> '.$payment_method_result.' </p>
                <p style="    font-family: Arial,Helvetica,sans-serif;
    font-size: 12px;
    color: #444;
    margin-top:10px;
    line-height: 18px;
    font-weight: normal;font-style:italic;"> <strong>Lưu ý :</strong> Với những đơn hàng thanh toán trả trước, xin vui lòng đảm bảo người nhận hàng đúng thông tin đã đăng ký trong đơn hàng, và chuẩn bị giấy tờ tùy thân để đơn vị giao nhận có thể xác thực thông tin khi giao hàng. </p>
                <div class="">
                    <h2 style="font-size: 13px; font-weight: bold; color: #66ad44; text-transform: uppercase; margin: 20px 0 0 0; border-bottom: 1px solid #ddd; ">Chi tiết đơn hàng</h2>
                </div>
                
				  '.$_POST["s_detail_order"].'
				
            </div>
            <div class="footer-email" style="margin-top:15px;">
                <div class="">
                    <p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal;border:1px #66ad44 dashed;padding:5px;list-style-type:none"> Chỉ cần email <a href="mailto:moctocchuyennghiep@gmail.com" target="_blank" style="  text-decoration:underline;  font-family: Arial,Helvetica,sans-serif;
    font-size: 12px;
    color: #66ad44;
    line-height: 18px;
">moctocchuyennghiep@gmail.com</a>, hoặc gọi số điện thoại 0901.40.80.86  - 0947.49.43.43 <br>
                        (8-21h cả T7,CN). Đội ngũ nhân viên của chúng tôi luôn sẵn sàng hỗ trợ bạn bất kì lúc nào. </p>
                    <p style="    font-family: Arial,Helvetica,sans-serif;
    font-size: 12px;
    color: #444;
    line-height: 18px;
    font-weight: normal;">Trường hợp quý khách có những băn khoăn về đơn hàng, có thể <a href="http://thuocmoctocnhatban.vn/hoi-dap-tu-van/" target="_blank" style="  text-decoration:underline;  font-family: Arial,Helvetica,sans-serif;
    font-size: 12px;
    color: #66ad44;
    line-height: 18px;
">Đặt câu hỏi cho chúng tôi</a> hoặc liên hệ số 0901.40.80.86 - 0947.49.43.43 để được tư vấn miễn phí.<br>
                        <strong>Một lần nữa xin cảm ơn quý khách.</strong> </p>
                    <a href="http://thuocmoctocnhatban.vn" target="_blank" style=" text-decoration:none;   font-family: Arial,Helvetica,sans-serif;
    font-size: 12px;
    color: #66ad44;
    line-height: 18px;
"><strong style="float:right;">www.thuocmoctocnhatban.vn</strong> </a> </div>
            </div>
        </div>
    </div>
    <div style="text-align:center;">
        <div  style="width:100%;max-width:630px;background:#ccc;display:inline-block; font-family: Arial,Helvetica,sans-serif;text-align:left;padding: 0;">
            <p style="font-family:Arial,Helvetica,sans-serif;font-size:11px;line-height:15px;color:#333;padding:10px 0;margin:0px;font-weight:normal;text-align:left;"> Quý khách nhận được email này vì đã mua hàng tại Thuocmoctocnhatban.vn.<br>
                <strong>Văn phòng công ty :</strong> 337/21 Trường Chinh, Phường 14, Quận Tân Bình, TP. HCM </p>
        </div>
    </div>
</div>
';
 }


//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Asian/Ho_Chi_Minh');

require 'PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = $smtp_username_mail;

//Password to use for SMTP authentication
$mail->Password = $smtp_password_mail;

//Set who the message is to be sent from
$mail->setFrom($admin_mail, $name);

$mail->CharSet = 'utf-8';

$mail->FromName   = $name.' ['.$email.']';

//Set an alternative reply-to address
$mail->addReplyTo($email, $name);

//Set who the message is to be sent to
$mail->addAddress($admin_mail, $title_mail);

//Set the subject line
$mail->Subject    = $alt_mail.$name.' ['.$email.']';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
// $mail->msgHTML(file_get_contents('email-template.php'), dirname(__FILE__));
$mail->msgHTML($email_for_admin);

//Replace the plain text body with one created manually
$mail->AltBody = $alt_mail;

//Attach an image file
// $mail->addAttachment('images/phpmailer_mini.png');


 if (isset($_POST["s_mail"])) {

//Create a new PHPMailer instance
$mail_customer = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail_customer->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail_customer->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail_customer->Debugoutput = 'html';

//Set the hostname of the mail server
$mail_customer->Host = 'smtp.gmail.com';
// use
// $mail_customer->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail_customer->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail_customer->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail_customer->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail_customer->Username = $smtp_username_mail;

//Password to use for SMTP authentication
$mail_customer->Password = $smtp_password_mail;

//Set who the message is to be sent from
$mail_customer->setFrom($email, $title_mail);

$mail_customer->CharSet = 'utf-8';

$mail_customer->FromName   = $title_mail.' ['.$admin_mail.']';

//Set an alternative reply-to address
$mail_customer->addReplyTo($admin_mail, $title_mail);

//Set who the message is to be sent to
$mail_customer->addAddress($email, $name);

//Set the subject line
$mail_customer->Subject    = $alt_mail_customer.' ['.$admin_mail.']';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
// $mail_customer->msgHTML(file_get_contents('email-template.php'), dirname(__FILE__));
$mail_customer->msgHTML($email_for_customer);

//Replace the plain text body with one created manually
$mail_customer->AltBody = $alt_mail_customer;

//Attach an image file
// $mail_customer->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors

 }


//send the message, check for errors
if(!$mail->Send()) { ?>
<script>
if (confirm("Quá trình đặt hàng bị lỗi ! Xin quý khách để lại lời nhắn, chúng tôi sẽ liên hệ lại. Mong thứ lỗi !")) {
	document.location.href = "<?php echo $redirect_fail; ?>";
}
</script>
<?php } else { ?>
<?php  if (isset($_POST["s_mail"])) { $mail_customer->Send();  }?>
<script>
document.location.href = "<?php echo $redirect_success; ?>";
</script>
<?php } ?>
<?php } else { ?>
	<script>
document.location.href = "<?php echo $redirect_fail; ?>";
</script>
<?php	}?>