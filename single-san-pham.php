<?php session_start(); ?>
<?php get_header();?>
<?php if(get_bloginfo( 'home' )=='https://thuocmoctocnhatban.vn') : ?>
<div class="body-content outer-top-xs" id="top-banner-and-menu">
<div class="container">
    <div class="row">
        <?php get_sidebar(); ?>
        
        <div class="col-md-9">
        
        <?php if ( have_posts() ) :  ?>
	<?php while ( have_posts() ) : the_post(); ?>
            <div class="detail-block product">
				<div class=" ">
                
					     <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">




<div class="row thumbnails">
<?php  if(get_field('s_product_price_sale')) { ?>
<div class="tag hot " style="width:80px;border-radius:4px;"><span>Khuyến mãi</span></div>
<?php } ?>
                                <div id="bigthumbs" class="owl-carousel">
                                   
                                    <?php if ( has_post_thumbnail() ) { ?>
                                    <div class="item"><a href="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>" class="fancybox" rel="group">
                                     <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a></div>
                                    <?php } ?>
                                    
                                    <?php $bigthumbs = get_field('s_library_san_pham');if( $bigthumbs ): ?>
									<?php foreach( $bigthumbs as $bigthumb ): ?>
                                     <div class="item"><a href="<?php echo $bigthumb['url']; ?>" title="<?php the_title(); ?>" class="fancybox" rel="group">
                                                                 <img src="<?php echo $bigthumb['url']; ?>" alt="<?php the_title(); ?>"></a></div>
                                    <?php endforeach; ?>
                            		<?php endif; ?>

                                </div>
                                <div id="smallthumbs" class="owl-carousel">
                                
                                  <?php if ( has_post_thumbnail() ) { ?>
                                    <div class="item"><a href="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>" class="fancybox" rel="group">
                                     <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a></div>
                                    <?php } ?>
                                    
                                      <?php $smallthumbs = get_field('s_library_san_pham');if( $smallthumbs ): ?>
									<?php foreach( $smallthumbs as $smallthumb ): ?>
                                     <div class="item"><a href="<?php echo $smallthumb['url']; ?>" title="<?php the_title(); ?>" class="fancybox" rel="group">
                                                                 <img src="<?php echo $smallthumb['url']; ?>" alt="<?php the_title(); ?>"></a></div>
                                    <?php endforeach; ?>
                            		<?php endif; ?>
                                
                                </div>
                            </div>








</div>      			
					<div class='col-sm-6 col-md-7 product-info-block'>
						<div class="product-info">
							<h1 class="name" style="font-size:20px;color:#333;font-weight:lighter;"><?php the_title(); ?></h1>
							
							<div class="rating-reviews ">
								<div class="row">
                                
									<div class="col-sm-5">
										<div class="rating rateit-small"><span style="display:inline-block;margin-right:15px;padding:5px;" class="label label-success">CÒN HÀNG</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/rating.png"  alt="Rating" style="max-width:70px;"></div>
									</div>
									<div class="col-sm-7 hidsp">
										<div class="reviews">
											<a href="#review_link" class="lnk" style="color:#288ad6; ">(79 đánh giá về sản phẩm)</a>
										</div>
									</div>
								</div><!-- /.row -->		
							</div><!-- /.rating-reviews -->
                            <div class="price-container info-container m-t-20">
								<div class="row">
									

									<div class="col-sm-7">
										<div class="product-price"> 
            
            <span class="price" style="font-size:24px;">
             

<?php  if(get_field('s_product_price_sale')) { /* Nếu tồn tại giá khuyến mãi thì hiển thị */?>
<?php  $product_price_sale = get_field('s_product_price_sale'); echo number_format($product_price_sale); ?> 
    <?php } else { /* Ngược lại để giá bình thường */?>
    <?php  $product_price = get_field('s_product_price');  echo number_format($product_price); ?> 
                <?php } ?><span style="font-size:13px;color:#666;">VNĐ</span>
                   </span> 
                   
                   
                   
                 <?php  if(get_field('s_product_price_sale')) {  /* Nếu tồn tại giá khuyến mãi thì hiển thị giá thường và gạch ngang */ ?>
                 <span class="price-before-discount"> 
              <?php  $product_price = get_field('s_product_price');  echo number_format($product_price); ?>  </span> <span style="font-size:11px;color:#666;">  VNĐ</span>
               <?php } ?>
                
                
            </div>
									</div>

									<div class="col-sm-5 hidsp">
										<div class="favorite-button pull-right">
											<a class="btn btn-primary" href="#"  title="">
											    <i class="fa fa-heart"></i>
											</a>
											<a class="btn btn-primary" title="Add to Compare" href="#">
											   <i class="fa fa-signal"></i>
											</a>
											<a class="btn btn-primary" title="Gửi E-mail cho chúng tôi" href="<?php bloginfo( 'home' ); ?>/?page_id=128">
											    <i class="fa fa-envelope"></i>
											</a>
										</div>
									</div>

								</div><!-- /.row -->
							</div>

							

							<div class="description-container m-t-20" style="padding: 10px 20px;
    border: 1px dashed #59b210;
    border-radius: 5px;
    background: #f7fff0;">
							<?php the_field('s_cong_dung_properties_description'); ?>
							</div><!-- /.description-container -->

							<!-- /.price-container -->
<hr>
							<div class="quantity-container info-container" style="margin-top:20px;">
								<div class="row">
									
									<div class="col-sm-3 col-xs-5">
										<span style="padding-top: 7px;
    display: block;">SỐ LƯỢNG  :</span>
									</div>
									
									<div class="col-sm-2  col-xs-2">
                                    <div class="row">
										<div class="cart-quantity">
											<input type="number"  id="quantity_single" value="1" min="1" max="9" >
							            </div>
                                        </div>
									</div>
                                    <div class="col-xs-7 hidsp" style="line-height:160%;">
                                    Gọi đặt mua: <a href="tel:0947494343" style="color:#288ad6; text-decoration:underline;">0947.49.43.43</a> <span style="font-size:12px;color:#666;"> (7:30 - 22:00)</span><br>
<span class="flr buychat" style="display: block;"><a style="color:#288ad6;" href="javascript:void(0);"><i class="fa fa-comments" aria-hidden="true"></i> Chat với tư vấn viên <strong>Online</strong></a></span>
                                    </div>
                                    
</div>
<div class="row" style="margin-top:20px;">
									<div class="col-sm-7" style="margin-right:-8px;">
                                  
										<a href="javascript:void(0)"  id="<?php echo get_the_ID();  ?>" class=" btn-add-to-cart-single btn btn-primary single-add"><i class="fa fa-shopping-cart inner-right-vs"></i><strong>MUA NGAY</strong>
                                        <span style="display: block;
    font-size: 12px;
    color: #fff;
    text-transform: none;">Giao tận nơi hoặc đến công ty xem hàng</span>
                                        </a>
									</div>
                                    
                                    <div class="col-sm-5 hidsp">
                                    <div class="row">
										<a href="#" class="btn btn-primary single-support"><i style="    transform: rotate(-49deg);" class="fa fa-volume-control-phone" aria-hidden="true"></i> <strong>0901.40.80.86</strong>
                                        <span style="display: block;
    font-size: 12px;
    color: #fff;
    text-transform: none;">Liên hệ nhận tư vấn miễn phí</span>
                                        </a>
                                        </div>
									</div>
                                    

									
								</div><!-- /.row -->
							</div><!-- /.quantity-container -->

							

							

							
						</div><!-- /.product-info -->
					</div><!-- /.col-sm-7 -->
				</div><!-- /.row -->
                </div>
                <div class="clearfix"></div>
				
				<div class=" detail-block product-tabs outer-top-vs inner-bottom-xs" id="review_link">
					<div class="row">
						<div class="col-sm-12">
							<ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
								<li class="active"><a data-toggle="tab" href="#description">MÔ TẢ</a></li>
                                <li><a data-toggle="tab" href="#functions">CÔNG DỤNG</a></li>
								<li><a data-toggle="tab" href="#review" id="click_rv">ĐÁNH GIÁ</a></li>
								<li><a data-toggle="tab" href="#contact">LIÊN HỆ</a></li>
							</ul><!-- /.nav-tabs #product-tabs -->
						</div>
                        </div>
                        <div class="row">
						<div class="col-sm-12">

							<div class="tab-content" >
								
								<div id="description" class="tab-pane in active">
									<div class="product-tab">
										<div class="text">
                                        <?php the_content(); ?>
                                        </div>
									</div>	
								</div><!-- /.tab-pane -->
                                
                                <div id="functions" class="tab-pane">
									<div class="product-tab">
										<div class="text">
                                        <?php the_field('s_cong_dung_san_pham'); ?>
                                        </div>

									</div>	
								</div><!-- /.tab-pane -->
                                
								<div id="review" class="tab-pane">
									<div class="product-tab">
																				
										<div class="product-reviews">
											

											<div class="reviews">
												<div class="review">
													
													 <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="10" data-width="100%" data-order-by="reverse_time"></div>
																										</div>
											
											</div><!-- /.reviews -->
										</div><!-- /.product-reviews -->
										

										
										<!-- /.product-add-review -->										
										
							        </div><!-- /.product-tab -->
								</div><!-- /.tab-pane -->

								<div id="contact" class="tab-pane">
									<div class="product-tab">
										


<?php get_template_part( 'content', 'contact' ); ?>

									</div>	
								</div><!-- /.tab-pane -->

							</div><!-- /.tab-content -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.product-tabs -->


<?php endwhile; ?>
    <?php  wp_reset_query(); ?>
<?php  endif; ?>




			
<section class="section featured-product outer-top-vs">
	<h3 class="section-title">CÓ THỂ BẠN SẼ THÍCH</h3>
	
    <div style="margin-top:20px;">
                        <?php 	$args=array(	
					'post_type' => 'san-pham', 	
					'orderby' => 'rand', 
	'order'   => 'DESC', 
					'posts_per_page'=>3,
				);		
					$query = new WP_Query( $args); ?>
                        <?php if ( $query->have_posts() ) : ?>
                        <?php while ( $query->have_posts() ) : $query->the_post();?>
                        <?php get_template_part( 'content', 'product' ); ?>
                        <!-- /.item -->
                        <?php endwhile; ?>
                        <?php  wp_reset_query(); ?>
                        <?php  endif; ?>
                        <div class="clearfix"></div>
                    </div>
    
    
</section>
			
			</div>
        
    </div>
</div>
<?php endif; ?>
<?php get_footer(); ?>
