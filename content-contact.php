<div class="loading-checkout"><span><img src="<?php echo get_template_directory_uri() ?>/assets/images/loading-checkout.gif" alt="loading"><br><br>
Đang gửi mail liên hệ, xin quý khách vui lòng đợi trong giây lát !!! </span>
</div>
<div class="row">
              <div class="col-md-12"  style="margin-top:20px;">Để được tư vấn miễn phí về thông tin sản phẩm, quý khách vui lòng liên hệ với chúng tôi theo :<br>
              <strong>Hotline</strong> : 0901408086 - 0947494343<br><strong>Email</strong> : <a href="mailto:moctocchuyennghiep@gmail.com">moctocchuyennghiep@gmail.com</a><br>
             <strong> Địa chỉ</strong> : 337/21 Trường Chinh, P.14, Q. Tân Bình, TP. HCM<br>
<br>

              Hoặc điền thông tin vào form bên dưới để gửi Email liên hệ.<br>Xin chân thành cảm ơn. </div>
              <div class="clearfix"></div>
              <div class="col-md-12"  >
              <hr>
              </div>
              <div class=" contact-form">
            
                <div class="col-md-4 ">
                  <form class="register-form" role="form" id="main_contact_form"  method="post" action="<?php echo get_template_directory_uri(); ?>/mail/sendmail_contact.php">
                  
               <?php

									   $id_order =  mt_rand(11111111, 99999999);

									   $ngay_thang = '(Ngày '.get_the_time('d').' Tháng '.get_the_time('m').' Năm '.get_the_time('Y').' / '.get_the_time('g:i a').')';

									   ?>

                                            <input type="hidden" name="s_token" value="b3JkZXJfaWQ9NzkzNjd8dHlwZT1kZXZlbG9wZXJ8ZGF0ZT0yMDE2LTA0LTEyIDAyOjAyOjA5">

                                            <input type="hidden" name="s_mail_admin" value="<?php the_field('hs_email_contact', 'option'); ?>">
										<input type="hidden" name="s_ngay_thang" value="<?php echo $ngay_thang; ?>">
                                         <input type="hidden" name="s_theme_url" value="<?php echo get_template_directory_uri(); ?>">

                                            <input type="hidden" name="s_home_url" value="<?php bloginfo('home');?>">
                  
                    <div class="form-group">
                      <label class="info-title" >Họ và Tên <span style="color:#F00">*</span></label>
                      <input type="text" id="s_name" name="s_name" class="form-control unicase-form-control text-input" required>
                    </div>
               
                </div>
                <div class="col-md-4">
                 
                    <div class="form-group">
                      <label class="info-title">Email <span style="color:#F00">*</span></label>
                      <input type="email" id="s_mail" name="s_mail"  class="form-control unicase-form-control text-input" required>
                    </div>
                
                </div>
                <div class="col-md-4">
                 
                    <div class="form-group">
                      <label class="info-title">Số điện thoại <span style="color:#F00">*</span></label>
                      <input type="text" id="s_tel" name="s_tel"  class="form-control unicase-form-control text-input" required>
                    </div>
               
                </div>
                <div class="col-md-12">
                 
                    <div class="form-group">
                      <label class="info-title">Nội dung liên hệ <span style="color:#F00">*</span></label>
                      <textarea rows="5"  id="s_message" name="s_message"  class="form-control unicase-form-control" required></textarea>
                    </div>
                 
                </div>
                <div class="col-md-12">
                 
                    <div class="form-group">
                     <label> Vui lòng nhập câu trả lời bảo mật :  &nbsp; </label>
                    <input  style="width:70px;display:inline-block; text-align:center;"   class="form-control unicase-form-control text-input"  type="text" disabled="disabled" id="question_capcha"> &nbsp;=&nbsp; <input style="width:70px; display:inline-block;text-align:center;"  class="form-control unicase-form-control text-input"  type="text" id="answer_capcha" required>
            
                  </div>
                  
                </div>
                <div class="col-md-12 outer-bottom-small m-t-20">
                  <button type="submit"  class="btn-upper btn btn-primary checkout-page-button"><i class="fa fa-paper-plane"></i> Gửi liên hệ</button>
                </div>
                </form>
                
              </div>
            </div>