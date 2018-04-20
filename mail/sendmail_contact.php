<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */
  $redirect = $_POST["s_home_url"]; 
if($_POST["s_token"]=='b3JkZXJfaWQ9NzkzNjd8dHlwZT1kZXZlbG9wZXJ8ZGF0ZT0yMDE2LTA0LTEyIDAyOjAyOjA5') { ?>
<?php
// info mail
 $admin_mail = $_POST["s_mail_admin"];  
 $title_mail = $_POST["s_ten_cong_ty"]; 
 $smtp_username_mail = "";
 $smtp_password_mail = "";

 $alt_mail ="Có liên hệ mới từ khách hàng "; // Nội dung rút gọn bên ngoài thư, ex : Có liên hệ mới từ khách hàng
 $alt_mail_customer ="Cảm ơn đã gửi liên hệ tới ".$title_mail;
 
 if (isset($_POST["s_name"])) {$name =  $_POST["s_name"];}
 if (isset($_POST["s_mail"])) {$email =  $_POST["s_mail"];}
 if (isset($_POST["s_tel"])) {$tel =  $_POST["s_tel"];}
 if (isset($_POST["s_message"])) {$message =  $_POST["s_message"];}
 

 
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

    margin: 0;">Có liên hệ mới từ khách hàng '.$_POST["s_name"].'</h1>

                    <p style="    margin: 4px 0;

    font-family: Arial,Helvetica,sans-serif;

    font-size: 12px;

    color: #444;

    line-height: 18px;

    font-weight: normal;"> Xin thông báo có 1 liên hệ mới được gửi từ khách hàng <strong>'.$_POST["s_name"].'</strong>.<br>

                       Liên hệ được gửi từ website <a href="http://thuocmoctocnhatban.vn" target="_blank" style="  text-decoration:underline;  font-family: Arial,Helvetica,sans-serif;

    font-size: 12px;

    color: #66ad44;

    line-height: 18px;

">www.thuocmoctocnhatban.vn</a> </p>

                </div>

                <div class="info-order-email">

                    <h2 style="font-size: 13px; font-weight: bold; color: #66ad44; text-transform: uppercase; margin: 20px 0 0 0; border-bottom: 1px solid #ddd; ">

					Thông tin khách hàng liên hệ <span style="font-size:12px;color:#777;text-transform:none;font-weight:normal">'.$_POST["s_ngay_thang"].'</span> </h2>

                </div>

                <div class=" info-check-out-email" >

                    <div style="width:100%;float:left;">

                      

                        <p style="    font-family: Arial,Helvetica,sans-serif;

    font-size: 12px;

    color: #444;

    line-height: 18px;

    font-weight: normal;"> Họ và tên :  '.$_POST["s_name"].'<br>

                         Email :   <a  target="_blank" style="  text-decoration:underline;  font-family: Arial,Helvetica,sans-serif;

    font-size: 12px;

    color: #66ad44;

    line-height: 18px;

">'.$_POST["s_mail"].'</a><br>

                         Số điện thoại :    '.$_POST["s_tel"].'</p>

                    </div>

              

                    <div style="clear:both"></div>

                </div>

              
                

                <div class="">

                    <h2 style="font-size: 13px; font-weight: bold; color: #66ad44; text-transform: uppercase; margin: 20px 0 0 0; border-bottom: 1px solid #ddd; ">Nội dung liên hệ</h2>

                </div>

                <p style="    font-family: Arial,Helvetica,sans-serif;

    font-size: 12px;

    color: #444;

    line-height: 18px;

    font-weight: normal;"> '.$_POST["s_message"].' </p>

            </div>

            <div class="footer-email" style="margin-top:15px;">

                <div class="">

                    <p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal;border:1px #66ad44 dashed;padding:5px;list-style-type:none"> Hệ thống đã tự động gửi email cảm ơn tới  <a href="mailto: '.$_POST["s_mail"].'" target="_blank" style="  text-decoration:underline;  font-family: Arial,Helvetica,sans-serif;

    font-size: 12px;

    color: #66ad44;

    line-height: 18px;

"> '.$_POST["s_mail"].'
</a> của khách hàng <strong> '.$_POST["s_name"].'</strong>. Để tương tác tốt với khách hàng, bạn có thể gọi vào số  '.$_POST["s_tel"].' của  '.$_POST["s_name"].' để trao đổi về nội dung liên hệ.
</p>


</div>
</div>
</div>
</div>
<div style="text-align:center;">
  <div  style="width:100%;max-width:630px;background:#ccc;display:inline-block; font-family: Arial,Helvetica,sans-serif;text-align:left;padding: 0;">
    <p style="font-family:Arial,Helvetica,sans-serif;font-size:11px;line-height:15px;color:#333;padding:10px 0;margin:0px;font-weight:normal;text-align:left;"> Quý khách nhận được email này vì có khách hàng đã liên hệ từ website Thuocmoctocnhatban.vn.</p>
  </div>
</div>
</div>
';

 if (isset($_POST["s_mail"])) {


$email_for_customer=' 
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

    margin: 0;">Cảm ơn khách hàng '.$_POST["s_name"].' đã liên hệ tới Thuocmoctocnhatban.vn</h1>

                    <p style="    margin: 4px 0;

    font-family: Arial,Helvetica,sans-serif;

    font-size: 12px;

    color: #444;

    line-height: 18px;

    font-weight: normal;">
	
	Chúng tôi xin thông báo liên hệ của quý khách đã được tiếp nhận và đang trong quá trình xử lý. 
Thuocmoctocnhatban.vn sẽ liên hệ với quý khách trong thời gian sớm nhất. <br>
Xin chân thành cảm ơn.
	 </p>

                </div>

          
             
                

                <div class="">

                    <h2 style="font-size: 13px; font-weight: bold; color: #66ad44; text-transform: uppercase; margin: 20px 0 0 0; border-bottom: 1px solid #ddd; ">Nội dung đã  liên hệ  <span style="font-size:12px;color:#777;text-transform:none;font-weight:normal">'.$_POST["s_ngay_thang"].'</span></h2>

                </div>

                <p style="    font-family: Arial,Helvetica,sans-serif;

    font-size: 12px;

    color: #444;

    line-height: 18px;

    font-weight: normal;"> '.$_POST["s_message"].' </p>

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
            <p style="font-family:Arial,Helvetica,sans-serif;font-size:11px;line-height:15px;color:#333;padding:10px 0;margin:0px;font-weight:normal;text-align:left;"> Quý khách nhận được email này vì đã liên hệ tới  Thuocmoctocnhatban.vn.<br>
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

$mail->FromName   = $name;

//Set an alternative reply-to address
$mail->addReplyTo($admin_mail, $title_mail);

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

$mail_customer->FromName   = $name;

//Set an alternative reply-to address
$mail_customer->addReplyTo($email, $name);

//Set who the message is to be sent to
$mail_customer->addAddress($email, $name);

//Set the subject line
$mail_customer->Subject    = $alt_mail_customer.$title_mail.' ['.$admin_mail.']';

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
if (confirm("Quá trình liên hệ bị lỗi ! Xin quý khách vui lòng thử lại !")) {
	document.location.href = "<?php echo $redirect; ?>";
}
</script>
<?php } else { ?>
<?php  if (isset($_POST["s_mail"])) { $mail_customer->Send();  }?>
<script>

if (confirm("Gửi liên hệ thành công ! Chúng tôi sẽ liên hệ quý khách trong thời gian sớm nhất. Xin chân thành cảm ơn !")) {	
	document.location.href = "<?php echo $redirect; ?>";
}
</script>
<?php } ?>
<?php } else { ?>
	<script>
document.location.href = "<?php echo $_POST["s_home_url"]; ?>";
</script>
<?php	}?>