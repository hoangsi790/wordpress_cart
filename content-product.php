<div class="products col-sm-4">
    <div class="product">
       
        <div class="product-image">
            <div class="image"> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php if ( has_post_thumbnail() ) { ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-thumbnail" >
                <?php } else { ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sample-product.png"  alt="<?php the_title(); ?>" class="img-thumbnail" >
                <?php } ?>
                </a> </div>
           <?php /*?> <?php  if(get_field('s_product_price_sale')) { ?>
<div class="tag hot " style="width:80px;border-radius:4px;"><span>Khuyến mãi</span></div>
<?php } ?><?php */?>
        </div>
        <!-- /.product-image -->
        <div class="product-info text-left">
            <h3 class="name" style=" height:35px;overflow-y:hidden;"><a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icon-hot.gif"  alt="<?php the_title(); ?>" class="img-thumbnail" > </a></h3>
            <div class="rating rateit-small"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/rating.png"  alt="Rating" style="max-width:70px;"></div>
            <div class="description"></div>
            <div class="product-price"> 
            <?php 
			$product_price = get_field('s_product_price');
			$product_price_sale = get_field('s_product_price_sale');
			?>
            <span class="price">
               <?php 
			   if($product_price_sale) {
			   echo number_format($product_price_sale); 
			   } else {
				   echo number_format($product_price); 
				   }
			   ?> <span style="font-size:11px;color:#666;">VNĐ</span>
                </span> 
                
                 <?php  if($product_price_sale)  { ?>
                 <span class="price-before-discount"> 
               <?php  
			   echo number_format($product_price); ?> </span><span style="font-size:11px;color:#666;">  VNĐ</span>
               <?php } ?>
                
                
            </div>
            <!-- /.product-price -->
            <div class="description ah" style="text-align: justify;height: 70px; margin-bottom:20px; overflow-y:hidden;"> <?php echo wp_trim_words( get_field('s_cong_dung_short_description'), 40, '...' );?> </div>
        </div>
        <!-- /.product-info -->
        <div class="cart clearfix animate-effect">
            <div class="action">
                <ul class="list-unstyled">
                    <li class="add-cart-button btn-group"> <a id="<?php echo get_the_ID();?>" href="javascript:void(0)" data-toggle="tooltip" class="btn-add-to-cart  btn btn-primary icon" type="button" title="Mua ngay"> <i class="fa fa-shopping-cart"></i> </a></li>
                    <li class="lnk wishlist"> <a data-toggle="tooltip" class="add-to-cart" href="<?php the_permalink(); ?>" title="Chi tiết"> <i class="fa fa-search" aria-hidden="true"></i> </a> </li>
                    <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="<?php bloginfo('home'); ?>/lien-he" title="Liên hệ"> <i class="fa fa-phone" aria-hidden="true"></i> </a> </li>
                </ul>
            </div>
            <!-- /.action --> 
        </div>
        <!-- /.cart --> 
    </div>
    <!-- /.product --> 
</div>
<!-- /.products -->