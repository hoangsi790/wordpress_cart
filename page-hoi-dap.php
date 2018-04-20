<?php session_start(); ?>
<?php /* Template Name: Hỏi đáp & tư vấn  */ ?>
<?php get_header(); ?>
<div class="loading-checkout"><span><img src="<?php echo get_template_directory_uri() ?>/assets/images/loading-checkout.gif" alt="loading"><br><br>
Đang gửi yêu cầu tư vấn, xin quý khách vui lòng đợi trong giây lát !!! </span>
</div>
<div class="body-content outer-top-xs">
  <div class="container">
    <div class="row">
      <?php get_sidebar(); ?>
      <div class="col-xs-12 col-sm-12 col-md-9" style="padding:0 15px;">
        <div class="shopping-cart ">
          <h2 class="section-title">
            <?php the_title(); ?>
          </h2>
          <div id="page_content">
           <p> Quý khách vui lòng để lại các câu hỏi về thuốc, cách sử dụng thuốc mọc tóc, những thắc mắc trong quá trình sử dụng để đạt hiệu quả một cách cao nhất. Xin chân thành cảm ơn. </p>

<p style="color:#F00;">Toàn bộ thông tin cá nhân của quý khách sẽ được giữ kín.</p>
                 <hr>
          </div>
          
          <div class="row">
          <div class=" contact-form">
          
          
          
           
                  
         
          
          
          
          
            <form id="new_faq"  method="post" action="<?php echo get_template_directory_uri(); ?>/mail/sendmail_faq.php">
            
            
                  <?php

									   $id_order =  mt_rand(11111111, 99999999);

									   $ngay_thang = '(Ngày '.get_the_time('d').' Tháng '.get_the_time('m').' Năm '.get_the_time('Y').' / '.get_the_time('g:i a').')';

									   ?>

                                            <input type="hidden" name="s_token" value="b3JkZXJfaWQ9NzkzNjd8dHlwZT1kZXZlbG9wZXJ8ZGF0ZT0yMDE2LTA0LTEyIDAyOjAyOjA5">

                                            <input type="hidden" name="s_mail_admin" value="<?php the_field('hs_email_faq', 'option'); ?>">
										<input type="hidden" name="s_ngay_thang" value="<?php echo $ngay_thang; ?>">
                                         <input type="hidden" name="s_theme_url" value="<?php echo get_template_directory_uri(); ?>">

                                            <input type="hidden" name="s_home_url" value="<?php bloginfo('home');?>">

            
            
                <div class="col-md-4 ">
                  
                    <div class="form-group">
                      <label class="info-title" >Họ và Tên <span style="color:#F00">*</span></label>
                      <input name="post_title" id="post_title" type="text" class="form-control unicase-form-control text-input" required>
                    </div>
                 
                </div>
                <div class="col-md-4">
                
                    <div class="form-group">
                      <label class="info-title">Email <span style="color:#F00">*</span></label>
                      <input name="post_email" id="post_email" type="email" class="form-control unicase-form-control text-input" required>
                    </div>
                 
                </div>
                <div class="col-md-4">
                 
                    <div class="form-group">
                      <label class="info-title">Số điện thoại <span style="color:#F00">*</span></label>
                      <input name="post_tel"  id="post_tel" type="text" class="form-control unicase-form-control text-input" required>
                    </div>
                
                </div>
                <div class="col-md-12">
                 
                    <div class="form-group">
                      <label class="info-title">Câu hỏi hoặc nội dung cần tư vấn <span style="color:#F00">*</span></label>
             
                      <textarea rows="5"  name="post_content"  id="post_content"  class="form-control unicase-form-control" required></textarea>

                         <input type="hidden" name="add_new_faq" value="post" >
  <?php wp_nonce_field( 'post_nonce', 'post_nonce_field' ); ?>
                    </div>
                  
                </div>
                  <div class="col-md-12">
                 
                    <div class="form-group">
                     <label> Vui lòng nhập câu trả lời bảo mật :  &nbsp; </label>
                    <input  style="width:70px;display:inline-block; text-align:center;"   class="form-control unicase-form-control text-input"  type="text" disabled="disabled" id="question_capcha"> &nbsp;=&nbsp; <input style="width:70px; display:inline-block;text-align:center;"  class="form-control unicase-form-control text-input"  type="text" id="answer_capcha" required>
            
                  </div>
                  
                </div>
                <div class="col-md-12 outer-bottom-small m-t-20">
                  <button type="submit"  class="btn-upper btn btn-primary checkout-page-button"><i class="fa fa-paper-plane"></i> Gửi câu hỏi</button>
                </div>
                </form>
                
                
                <?php if( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty( $_POST['add_new_faq'] ) && isset( $_POST['post_nonce_field'] ) && wp_verify_nonce( $_POST['post_nonce_field'], 'post_nonce' )) {
if (isset($_POST['post_title'])) { $post_title = $_POST['post_title']; }
if (isset($_POST['post_email'])) { $post_email = $_POST['post_email']; }
if (isset($_POST['post_tel'])) { $post_tel = $_POST['post_tel'];}
if (isset($_POST['post_content'])) { $post_content = $_POST['post_content'];} 
else {
    echo 'Vui lòng điền đầy đủ nội dung !';
}

$post = array(
    'post_title'    => wp_strip_all_tags($post_title),
    'post_content'  => $post_content,
    'post_type' => 'hoi-dap',
);
$faq_post_id = wp_insert_post($post); 
 add_post_meta($faq_post_id, 'post_email', $post_email, true);
  add_post_meta($faq_post_id, 'post_tel', $post_tel, true);
?>
<?php /*?><script>

if (confirm("Đặt câu hỏi thành công. Câu hỏi đang trong trạng thái chờ duyệt 111 !!")) {	
	document.location.href = "<?php bloginfo( 'home' ); ?>/?page_id=132";
}
</script><?php */?>
<?php } ?>
                
              </div>
               <div class="clearfix"></div>
            <div class="col-md-12">
              <hr style="margin-top:5px;">
            </div>
          </div>
          
          
          <?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
$args = array(	'paged' => $paged, 
				'post_type' => 'hoi-dap',
				'orderby' => 'ID', 
				'order'   => 'DESC', 
				'posts_per_page'=>5
); query_posts($args);?>
   <?php if ( have_posts() ) : ?>
   <?php while ( have_posts() ) : the_post(); ?>
          
        

          <div class="row">
            <div class="col-md-1 col-sm-1 hidsp" style="margin-right:-15px;"> <img style="    border: 1px solid #e65135;
    padding: 2px;
    border-radius: 2px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/customer-faq.png" alt="Responsive image" class="img-rounded img-responsive"> </div>
            <div class="col-md-11 col-sm-11 blog-comments">
              <div class="blog-comments " style="position:relative;">
                <h5 style="margin-top:0px; margin-bottom:5px; font-size:13px;"><strong><?php the_title(); ?></strong>  <small>( <?php the_time('d/m/Y') ; ?> )</small></h5>
                
                <?php the_content();  ?>
              </div>
              <div class="blog-comments-responce  " style="padding: 15px; padding-bottom:5px; border-radius:3px;
    background: #f1f1f1;">
                <div class="row">
                  <div class="col-md-1 col-sm-1 hidsp" style="margin-right:-15px;"> <img style="    border: 1px solid #888;
    padding: 2px;
    border-radius: 2px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/admin.png" alt="[ QUẢN TRỊ VIÊN ] - Thuốc mọc tóc Nhật Bản" class="img-rounded img-responsive"> </div>
                  <div class="col-md-11 col-sm-11">
                    <div class="blog-sub-comments" style="position:relative;">
                      <h5 style="margin-top:0px; margin-bottom:5px;font-size:13px;"><strong style="color: #59b210"><i class="fa fa-check-circle" aria-hidden="true"></i> [ QUẢN TRỊ VIÊN ] - Thuốc mọc tóc Nhật Bản</strong></h5>
                    
                      <?php the_field('answer_faq'); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12" style="margin-bottom:25px;">
             
            </div>
          </div>
          <!-- end -->
          
   <?php endwhile; ?>
   <div class="wrap-pagi">
    <?php wp_pagenavi(); ?> 
</div>
   
	<?php  wp_reset_query(); ?>
<?php  endif; ?>
          
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
