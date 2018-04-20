<?php session_start(); ?>

<?php /* Template Name: Thanh toán  */ ?>

<?php get_header(); ?>

<div class="loading-checkout"><span><img src="<?php echo get_template_directory_uri() ?>/assets/images/loading-checkout.gif" alt="loading"><br><br>
Đang tiến hành đặt hàng, xin quý khách vui lòng đợi trong giây lát !!! </span>
</div>

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

                                <h4 class="unicase-checkout-title"> <a  href="javascript:void(0)"> <span>1</span>Thông tin đơn hàng </a> </h4>

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

                        <?php if(!empty($result_product_id)) { ?>

                        <!-- checkout-step-02  -->

                        <div class="panel panel-default checkout-step-02">

                            <div class="panel-heading">

                                <h4 class="unicase-checkout-title"> <a  href="javascript:void(0)"> <span>2</span> Nhập thông tin thanh toán </a> </h4>

                            </div>

                            <div id="collapseTwo" class="panel-collapse collapse in">

                                <div class="panel-body" style="padding-bottom:0;">

                                    <div class="row">















									<?php  ob_start(); ?>



									 <div class=" detail-order-email" style="margin-top:15px;">

                  <?php  $args=array(

	'post_type' => 'san-pham',

	'orderby' => 'post__in',

	'post__in' => $result_product_id,

	'posts_per_page'=>-1);



                        $query = new WP_Query( $args);  ?>

                                                <?php $stt = 1; if ( $query->have_posts() ) : ?>

                                                <?php

			$quantity=0;

            $product_price=0;

            $total_price=0; /*Đặt các giá trị tính tiền bằng 0*/

	    	?>

                    <table width="100%"  style="    border-spacing: 0; font-size:13px; border:none;

    border-collapse: collapse;">

                                                <tr>

                                                    <td  style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px;background:#66ad44;"><strong>Sản phẩm</strong></td>

                                                    <td  style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px;background:#66ad44;"><strong>Đơn giá</strong></td>

                                                    <td  style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px;background:#66ad44;"><strong>Số lượng</strong></td>

                                                    <td  style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px;background:#66ad44;"><strong>Thành tiền</strong></td>

                                                </tr>



                                                <?php while ( $query->have_posts() ) : $query->the_post();?>

                                                <?php  if(get_field('s_product_price_sale')) {$product_price = get_field('s_product_price_sale'); } else { $product_price = get_field('s_product_price');  	}  ?>

                                                 <tr>

                                                    <td  style="padding:6px 9px;color:#444;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px;background:#eee;border-bottom:1px dashed #ccc;"><?php the_title(); ?></td>

                                                    <td  style="padding:6px 9px;color:#444;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px;background:#eee;border-bottom:1px dashed #ccc;"><?php echo number_format($product_price).' <span style="font-size:10px;color:#666;">  VNĐ</span>'; ?></td>

                                                    <td  style="padding:6px 9px;color:#444;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px;background:#eee;border-bottom:1px dashed #ccc;text-align:center;"><?php  echo $quantity = $result_product_quantity[get_the_ID()];  ?></td>

                                                    <td  style="padding:6px 9px;color:#444;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px;background:#eee;border-bottom:1px dashed #ccc;"><?php $sub_total_price =   $quantity*$product_price;  echo number_format($sub_total_price).' <span style="font-size:10px;color:#666;">  VNĐ</span>'; ?></td>

                                                </tr>

                                                <?php

		   $total_price+=$sub_total_price;?>

                                                <?php $stt++; endwhile; ?>

                                                <tr>

                                                    <td colspan="3"  style="padding:6px 9px;color:#444;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px;background:#e2e2e2;"><strong>Tổng giá trị đơn hàng</strong></td>

                                                    <td   style="padding:6px 9px;color:#444;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px;background:#e2e2e2;"><strong><?php echo number_format($total_price).' <span style="font-size:10px;color:#666;">  VNĐ</span>'; ?></strong></td>

                                                </tr>

                                                <?php  wp_reset_query(); ?>

                                            </table>

                                               <?php endif; ?>









                </div>





									<?php $detail_order = ob_get_contents(); ob_end_clean(); ?>





















                                        <form id="check_out_form" method="post" action="<?php echo get_template_directory_uri(); ?>/hoangsi_cart/mail_checkout/sendmail.php">

                                            <?php

									   $id_order =  mt_rand(11111111, 99999999);

									   $ngay_thang = '(Ngày '.get_the_time('d').' Tháng '.get_the_time('m').' Năm '.get_the_time('Y').' / '.get_the_time('g:i a').')';

									   ?>



                                            <input type="hidden" name="s_token" value="b3JkZXJfaWQ9NzkzNjd8dHlwZT1kZXZlbG9wZXJ8ZGF0ZT0yMDE2LTA0LTEyIDAyOjAyOjA5">

                                            <input type="hidden" name="s_mail_admin" value="<?php the_field('hs_email_cart', 'option'); ?>">

                                            <input type="hidden" name="s_ma_don_hang" value="<?php echo $id_order; ?>">

                                            <input type="hidden" name="s_ngay_thang" value="<?php echo $ngay_thang; ?>">

                                            <input type="hidden" name="s_ten_cong_ty" value="<?php bloginfo('name');?>">

                                            <input type="hidden" name="s_home_url" value="<?php bloginfo('home');?>">

                                            <input type="hidden" name="s_theme_url" value="<?php echo get_template_directory_uri(); ?>">

											<input type='hidden' name='s_detail_order' value='<?php echo $detail_order; ?>'>

                                             <input type="hidden" name="s_cam_on_mua_hang_url" value="<?php bloginfo('home');?>/cam-on-thanh-toan">













                                          <!-- end input hidden -->

                                            <div class="col-md-4 ">

                                                <div class="form-group">

                                                    <label class="info-title" for="s_name">Họ và tên <span style="color:#f00;">*</span></label>

                                                    <input name="s_name" type="text" class="form-control unicase-form-control text-input" id="s_name" required >

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="form-group">

                                                    <label class="info-title" for="s_tel">Số điện thoại <span style="color:#f00;">*</span></label>

                                                    <input type="tel" name="s_tel"  class="form-control unicase-form-control text-input" id="s_tel" required>

                                                </div>

                                            </div>

                                            <div class="col-md-4">

                                                <div class="form-group">

                                                    <label class="info-title" for="s_mail">Địa chỉ Email</label>

                                                    <input type="email" name="s_mail" class="form-control unicase-form-control text-input" id="s_mail">

                                                </div>

                                            </div>

                                            <div class="col-md-12">

                                                <div class="form-group">

                                                    <label class="info-title" for="s_address">Địa chỉ <span style="color:#f00;">*</span></label>

                                                    <input type="text" name="s_address" class="form-control unicase-form-control text-input" id="s_address" required>

                                                </div>

                                            </div>

                                            <div class="col-md-12">

                                                <div class="form-group">

                                                    <label class="info-title" for="s_checkout">Phương thức thanh toán <span style="color:#f00;">*</span></label>

                                                    <select  class="form-control" name="s_checkout" required id="s_check_out">

                                                        <option value="">Vui lòng chọn một phương thức thanh toán</option>

                                                        <option value="chuyen-khoan">Chuyển khoản ngân hàng</option>

                                                        <option value="tien-mat">Trả tiền mặt khi giao hàng</option>

                                                    </select>

                                                </div>

                                            </div>


                                            <div class="col-md-12" id="thong-tin-chuyen-khoan" style="display:none;">

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

                                                    <td  style="padding:9px 9px;color:#444;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px;background:#eee;border-bottom:1px dashed #ccc;">ACB ( Chi nhánh Tân Bình - PGD Võ Thàng Trang)</td>

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




                                            <div class="col-md-12">

                                                <div class="form-group">

                                                    <label class="info-title" for="s_note">Ghi chú về đơn hàng</label>

                                                    <textarea name="s_note" class="form-control unicase-form-control" id="s_note" style="height:150px;resize:vertical;"></textarea>

                                                </div>

                                            </div>
<div class="col-md-12">
                 
                    <div class="form-group">
                     <label> Vui lòng nhập câu trả lời bảo mật :  &nbsp; </label>
                    <input  style="width:70px;display:inline-block; text-align:center;"   class="form-control unicase-form-control text-input"  type="text" disabled="disabled" id="question_capcha"> &nbsp;=&nbsp; <input style="width:70px; display:inline-block;text-align:center;"  class="form-control unicase-form-control text-input"  type="text" id="answer_capcha" required>
            
                  </div>
                  
                </div>
                                            <div class="col-md-12" style="margin-bottom:0;">

                                                <button type="submit" class="pull-right btn-upper btn btn-primary checkout-page-button" >HOÀN TẤT & ĐẶT HÀNG</button>

                                            </div>

                                        </form>

                                    </div>





                                </div>

                            </div>

                        </div>

                         <?php } ?>

                    </div>

                </div>

                <!-- /.row -->

            </div>

        </div>

    </div>

</div>

<?php get_footer(); ?>
