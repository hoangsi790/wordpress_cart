<?php session_start(); ?>
<?php /* Template Name: Giỏ Hàng  */ ?>
<?php get_header(); ?>

<div class="loading-update-cart"><span><img src="<?php echo get_template_directory_uri() ?>/assets/images/loading-checkout.gif" alt="loading"></span>
</div>

<div class="body-content outer-top-xs">
    <div class="container">
        <div class="row">
            <?php get_sidebar(); ?>
            <div class=" col-xs-12 col-sm-12 col-md-9 " style="padding:0 15px;">
            <div class="shopping-cart">
            <h2 class="section-title">Giỏ hàng của bạn</h2>
                <div class="shopping-cart-table">
                    <div id="page-cart" class="table-responsive">
                        
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



if(!empty($result_product_id)) {
	$args=array(
	'post_type' => 'san-pham', 
	'orderby' => 'post__in', 
	'post__in' => $result_product_id,
	'posts_per_page'=>-1);

                        $query = new WP_Query( $args);  ?>
                        <?php $stt = 1; if ( $query->have_posts() ) : ?>
                        <table class="table" id="hoangsi_cart">
                            <tr>
                                <td style="width:4%;">STT</td>
                                <td style="width:8%;">Hình</td>
                                <td>Tên sản phẩm</td>
                                <td style="width:10%;">Số lượng</td>
                                <td style="width:15%;">Đơn giá</td>
                                <td>Thành tiền</td>
                                <td style="width:4%;">Xóa</td>
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
                                <td><?php   $quantity = $result_product_quantity[get_the_ID()]; /*Lấy số lượng sản phẩm từ Product_id của SESSION*/ ?>
                                    
                                    
                                    
                                    <select  class="quantity_cart">
                                    <?php for($iq=1; $iq<10; $iq++) { ?>
                                    <option value="<?php echo $iq; ?>" <?php if($quantity==$iq) {echo 'selected';}; ?> ><?php echo $iq; ?></option>
                                    <?php } ?>
                                    
                                    
                                    
                                    
                                    </td>
                                <td><?php echo number_format($product_price).' <span style="font-size:10px;color:#666;">  VNĐ</span>'; ?></td>
                                <td style="background:#fff;"><?php $sub_total_price =   $quantity*$product_price;  echo number_format($sub_total_price).' <span style="font-size:10px;color:#666;">  VNĐ</span>'; ?></td>
                                <td><a class="btn-delete-product" href="javascript:void(0)" id="<?php echo get_the_ID();  ?>" style="color:#f00;"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                            </tr>
                            <?php 
		   $total_price+=$sub_total_price;?>
                            <?php $stt++; endwhile; ?>
                            <tr>
                                <td colspan="5" style="text-align:right;">Tổng giá trị đơn hàng :</td>
                                <td><?php echo number_format($total_price).' <span style="font-size:10px;color:#666;">  VNĐ</span>'; ?></td>
                                <td></td>
                            </tr>
                            <?php  wp_reset_query(); ?>
                        </table>
                        <?php endif; ?>
                        <div style="margin-top:20px;">
                            <div class=""> <a href="<?php bloginfo( 'home' ); ?>/?page_id=867" class="lnk btn btn-primary pull-left"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Tiếp tục mua hàng</a> <a href="<?php bloginfo( 'home' ); ?>/thanh-toan" class="lnk btn btn-primary pull-right">Xác nhận thanh toán <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> </a> </div>
                        </div>
                        
                        
                        
                    <?php     } else { ?>
                    <div style="margin-top:20px;">
                    <div class="text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cart_empty.png" alt="Không có sản phẩm nào trong giỏ hàng của bạn."><br><br>


                    <div class="alert alert-info" role="alert"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Không có sản phẩm nào trong giỏ hàng của bạn. </div>
                    </div>
                    
                    
                            <div  class="text-center"> <a href="<?php bloginfo( 'home' ); ?>/?page_id=867" class="lnk btn btn-primary"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Quay lại cửa hàng</a>  </div>
                        </div>
                        <?php } ?>
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
