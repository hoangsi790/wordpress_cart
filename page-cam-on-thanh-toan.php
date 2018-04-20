<?php session_start(); ?>
<?php
if(!isset($_SESSION['product_id']))
{ header("Location: ".get_bloginfo( 'home' )."/san-pham/"); } ?>
<?php /* Template Name: Cảm ơn thanh toán  */ ?>
<?php get_header(); ?>

<div class="body-content outer-top-xs">
<div class="container">
  <div class="row">
    <?php get_sidebar(); ?>
    <div class="   col-xs-12 col-sm-12 col-md-9"  style="padding:0 15px;">
      <div class="row checkout-box">
        <div class="col-md-12">
          <div class="panel-group checkout-steps" id="accordion"> 
            
            <!-- checkout-step-01  -->
            
            <div class="panel panel-default checkout-step-01"> 
              
              <!-- panel-heading -->
              
              <div class="panel-heading">
                <h4 class="unicase-checkout-title"> <a  href="javascript:void(0)"> <span><i class="fa fa-list" aria-hidden="true"></i></span></span> ĐẶT HÀNG THÀNH CÔNG </a> </h4>
              </div>
              
              <!-- panel-heading -->
              
              <div class="panel-collapse collapse in"> 
                
                <!-- panel-body  -->
                
                <div class="panel-body" style="padding-bottom:0;">
                
                
                
                
                <div class="row" style="margin-top:20px;">

                                                <div class="text-center"> <img style="width:150px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/checkout_success.gif" alt="Đặt hàng thành công."><br>

                                                    <br>

                                                    <div class="alert alert-success" role="alert">
                                                    Đặt hàng thành công !!! Chúng tôi sẽ liên hệ quý khách trong thời gian sớm nhất. Xin chân thành cảm ơn !
                                                    
                                                     </div>

                                                </div>

                                                

                                            </div>
                
                
                
                <div class="row">
                  <p><strong>Lưu ý</strong> : Nếu quý khách chọn phương thức thanh toán là <strong>chuyển khoản ngân hàng</strong>. <br>
Vui lòng chuyển tiền vào 1 trong các tài khoản dưới đây. <br>
Đơn hàng của bạn sẽ không được vận chuyển cho tới khi tiền được gửi vào tài khoản của chúng tôi.<br>
Xin chân thành cảm ơn. </p>
                  <div >
                    <div class="form-group">
                      <table width="100%"  style="    border-spacing: 0; font-size:13px; border:none; margin-bottom:10px;

    border-collapse: collapse;">
                        <tr>
                          <td  style="padding:9px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px;background:#4c4c4c;"><strong>STT</strong></td>
                          <td  style="padding:9px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px;background:#4c4c4c;"><strong>Chủ tài khoản</strong></td>
                          <td  style="padding:9px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px;background:#4c4c4c;"><strong>Ngân hàng</strong></td>
                          <td  style="padding:9px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px;background:#4c4c4c;"><strong>Số tài khoản</strong></td>
                        </tr>
                        <tr>
                          <td  style="padding:9px 9px;color:#444;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px;background:#eee;border-bottom:1px dashed #ccc;">01</td>
                          <td  style="padding:9px 9px;color:#444;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px;background:#eee;border-bottom:1px dashed #ccc;">Phạm Đức Hùng</td>
                          <td  style="padding:9px 9px;color:#444;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px;background:#eee;border-bottom:1px dashed #ccc;">ACB ( Chi nhánh Tân Bình - PGD Võ Thành Trang )</td>
                          <td  style="padding:9px 9px;color:#d62222;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px;background:#eee;border-bottom:1px dashed #ccc;">233772829</td>
                        </tr>
                        <tr>
                          <td  style="padding:9px 9px;color:#444;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px;background:#eee;">02</td>
                          <td  style="padding:9px 9px;color:#444;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px;background:#eee;">Phạm Đức Hùng</td>
                          <td  style="padding:9px 9px;color:#444;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px;background:#eee;">Vietcombank ( TP Hồ Chí Minh )</td>
                          <td  style="padding:9px 9px;color:#d62222;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px;background:#eee;">0071001201263</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                </div>
              </div>
              </div>
               <div class="panel panel-default checkout-step-02"> 
              <!-- panel-heading -->
              
              <div class="panel-heading">
                <h4 class="unicase-checkout-title"> <a  href="javascript:void(0)"> <span><i class="fa fa-list" aria-hidden="true"></i></span> Chi tiết đơn hàng </a> </h4>
              </div>
              
              <!-- panel-heading -->
              
           
              <div id="collapseOne" class="panel-collapse collapse in"> 
                
                <!-- panel-body  -->
                
                <div class="panel-body" style="padding-bottom:0;">
                  <div class="shopping-cart-table row">
                    <div id="page-cart" class="table-responsive" >
                      <?php 

$result_product_id = array(); /*Khai báo 1 mảng rỗng, để chứa dãy ID sản phẩm*/

$result_product_id = $_SESSION['product_id']; /* Đổ dữ liệu SESSION vào biến*/



$result_product_quantity = array();

$result_product_quantity = $_SESSION['product_quantity'];





/*echo '<pre>';

print_r($result_product_id);

echo '</pre>';



echo '<pre>';

print_r($result_product_quantity);

echo '</pre>';

*/





if(empty($result_product_id)) { ?>
                      <div style="margin-top:20px;">
                        <div class="text-center"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cart_empty.png" alt="Không có sản phẩm nào trong giỏ hàng của bạn."><br>
                          <br>
                          <div class="alert alert-warning" role="alert"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Không có sản phẩm nào trong giỏ hàng, không thể thanh toán.<br>
                            Xin vui lòng quay lại <a href="<?php bloginfo( 'home' ); ?>/?page_id=867" style="color:inherit; text-decoration:underline;"><strong>trang sản phẩm</strong></a>, thêm 1 sản phẩm vào giỏ hàng trước khi thanh toán. Xin cảm ơn quý khách. </div>
                        </div>
                        <div  class="text-center"> <a href="<?php bloginfo( 'home' ); ?>/?page_id=867" class="lnk btn btn-primary"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Quay lại cửa hàng</a> </div>
                      </div>
                      <?php	 } else {



	$args=array(

	'post_type' => 'san-pham', 

	'orderby' => 'post__in', 

	'post__in' => $result_product_id,

	'posts_per_page'=>-1);



                        $query = new WP_Query( $args);  ?>
                      <?php $stt = 1; if ( $query->have_posts() ) : ?>
                      <table class="table" id="hoangsi_cart" style="margin-bottom:0;">
                        <tr>
                          <td style="width:4%;">STT</td>
                          <td style="width:8%;">Hình</td>
                          <td>Tên sản phẩm</td>
                          <td style="width:11%;">Số lượng</td>
                          <td>Tổng tiền</td>
                        </tr>
                        <?php 

			$quantity=0;

            $product_price=0;

            $total_price=0; /*Đặt các giá trị tính tiền bằng 0*/

	    	?>
                        <?php while ( $query->have_posts() ) : $query->the_post();?>
                        <?php  if(get_field('s_product_price_sale')) {$product_price = get_field('s_product_price_sale'); } else { $product_price = get_field('s_product_price');  	}  ?>
                        <tr id="<?php echo $product_id = get_the_ID(); ?>">
                          <td><?php echo $stt; ?></td>
                          <td style="background:#fff;"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" style="width:60px;height:auto;"></a></td>
                          <td style="text-align:left;"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> &nbsp;
                            <?php the_title(); ?>
                            <br>
                            &nbsp; <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/rating.png"  alt="Rating" style="max-width:70px;"> </a></td>
                          <td><?php  echo $quantity = $result_product_quantity[get_the_ID()];  ?></td>
                          <td><?php $sub_total_price =   $quantity*$product_price;  echo number_format($sub_total_price).' <span style="font-size:10px;color:#666;">  VNĐ</span>'; ?></td>
                        </tr>
                        <?php 

		   $total_price+=$sub_total_price;?>
                        <?php $stt++; endwhile; ?>
                        <tr>
                          <td colspan="4" style="text-align:right;">Tổng giá trị đơn hàng :</td>
                          <td><?php echo number_format($total_price).' <span style="font-size:10px;color:#666;">  VNĐ</span>'; ?></td>
                        </tr>
                        <?php  wp_reset_query(); ?>
                      </table>
                      <?php endif; ?>
                      <?php } ?>
                    </div>
                  </div>
                </div>
                
                <!-- panel-body  --> 
                
              </div>
              
              <!-- row --> 
              
            </div>
            
            <!-- checkout-step-01  --> 
            
          </div>
        </div>
        
        <!-- /.row --> 
        
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
<?php  session_destroy(); ?>

