<?php session_start(); ?>
<?php get_header();?>

<div class="body-content outer-top-xs" id="top-banner-and-menu">
<div class="container">
    <div class="row">
        <?php get_sidebar(); ?>
        <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
            <div id="hero">
                <div class="slide hidsp">
                    <div class="owl-carousel owl-theme owl-slider">
                        <?php if( have_rows('hs_slide', 'option') ): while ( have_rows('hs_slide', 'option') ) : the_row(); ?>
                        <div class="item"><img src="<?php  the_sub_field('hs_image_slide', 'option'); ?>" alt="<?php bloginfo('name'); ?>"></div>
                        <?php  endwhile; else : echo 'Đang cập nhật dữ liệu.'; endif; ?>
                    </div>
                </div>
                <div class="info-boxes hidsp ">
                    <div class="info-boxes-inner">
                        <div class="row">
                            <div class="col-md-6 col-sm-4 col-lg-4">
                                <div class="info-box">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h4 class="info-box-heading green"> <img src=" <?php echo get_template_directory_uri(); ?>/assets/images/icon-hot.gif" alt="<?php bloginfo('name'); ?>" class="img-thumbnail"> Cam kết giá </h4>
                                        </div>
                                    </div>
                                    <h6 class="text" style="margin-top: 5px;">
                                        <p>Cam kết bán hàng với giá tốt nhất</p>
                                    </h6>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-4 col-lg-4">
                                <div class="info-box">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h4 class="info-box-heading green"> <img src=" <?php echo get_template_directory_uri(); ?>/assets/images/icon-hot.gif" alt="<?php bloginfo('name'); ?>" class="img-thumbnail"> Cam kết chất lượng </h4>
                                        </div>
                                    </div>
                                    <h6 class="text" style="margin-top: 5px;">
                                        <p>Đảm bảo 100% chất lượng sản phẩm</p>
                                    </h6>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-4 col-lg-4">
                                <div class="info-box">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h4 class="info-box-heading green"> <img src=" <?php echo get_template_directory_uri(); ?>/assets/images/icon-hot.gif" alt="<?php bloginfo('name'); ?>" class="img-thumbnail"> Miễn phí giao hàng </h4>
                                        </div>
                                    </div>
                                    <h6 class="text" style="margin-top: 5px;">
                                        <p>Miễn phí giao hàng toàn quốc</p>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.info-boxes-inner --> 
                    
                </div>
                <!-- /.info-boxes -->
                
                <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                    <div class="more-info-tab clearfix ">
                    
                        <h3 class="new-product-title pull-left">Sản phẩm mới</h3>
                        <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                            <li class="active"><a  href="#all" data-toggle="tab">Tất cả</a></li>
                            <li><a  href="#sale" data-toggle="tab">Khuyến mãi</a></li>
                            <li><a  href="#featured" data-toggle="tab">Nổi bật</a></li>
                            
                        </ul>
                        <!-- /.nav-tabs --> 
                    </div>
                    <div class="tab-content outer-top-xs" style="padding-top:0;">
                        <div class="tab-pane in active" id="all">
                            <div class="product-slider">
                               <div>
                        <?php 
	$args=array(
	'post_type' => 'san-pham', 
	'posts_per_page'=>3);
	$query = new WP_Query( $args); 
?>
<?php if ( $query->have_posts() ) : ?>
	<?php while ( $query->have_posts() ) : $query->the_post();?>
                                     <?php get_template_part( 'content', 'product' ); ?>
                                     <!-- /.item -->
                                    <?php endwhile; ?>
	<?php  wp_reset_query(); ?>
<?php  endif; ?>
                                </div>
                                <div class="clearfix"></div>
                                <!-- /.home-owl-carousel --> 
                            </div>
                            <!-- /.product-slider --> 
                        </div>
                        <!-- /.tab-pane -->
                        
                        <div class="tab-pane" id="sale">
                            <div class="product-slider">
                               <div>
                        <?php 
	$args=array(
	'post_type' => 'san-pham', 
	'orderby' => 'rand', 
	'order'   => 'DESC', 
	'posts_per_page'=>3);
	$query = new WP_Query( $args); 
?>
<?php if ( $query->have_posts() ) : ?>
	<?php while ( $query->have_posts() ) : $query->the_post();?>
    <?php  if(get_field('s_product_price_sale')) { ?>    
                                     <?php get_template_part( 'content', 'product' ); ?>
                                     <!-- /.item -->
                                     <?php } ?>
                                    <?php endwhile; ?>
	<?php  wp_reset_query(); ?>
<?php  endif; ?>
                                </div>
                                <div class="clearfix"></div>
                                <!-- /.home-owl-carousel --> 
                            </div>
                            <!-- /.product-slider --> 
                        </div>
                        <!-- /.tab-pane -->
                        
                        <div class="tab-pane" id="featured">
                            <div class="product-slider">
                               <div>
                        <?php 
	$args=array(
	'post_type' => 'san-pham', 
	'orderby' => 'meta_key', 
	'meta_key' => '_is_ns_featured_post', 
	'meta_value' => 'yes',
	'posts_per_page'=>3);
	$query = new WP_Query( $args); 
?>
<?php if ( $query->have_posts() ) : ?>
	<?php while ( $query->have_posts() ) : $query->the_post();?>
                                     <?php get_template_part( 'content', 'product' ); ?>
                                     <!-- /.item -->
                                    <?php endwhile; ?>
	<?php  wp_reset_query(); ?>
<?php  endif; ?>
                                </div>
                                <div class="clearfix"></div>
                                <!-- /.home-owl-carousel --> 
                            </div>
                            <!-- /.product-slider --> 
                        </div>
                        <!-- /.tab-pane -->
                     
                        
                    </div>
                    <!-- /.tab-content --> 
                </div>
                <!-- /.scroll-tabs -->
                
                <div class="wide-banners wow fadeInUp outer-bottom-xs hidsp">
                    <div class="row">
                         <?php if( have_rows('hs_banner_home', 'option') ): while ( have_rows('hs_banner_home', 'option') ) : the_row(); ?>
                      
                           <div class="col-md-6 col-sm-6">
                            <div class="wide-banner cnt-strip">
                                <div class="image"> <img class="img-responsive" src="<?php  the_sub_field('hs_image_banner_home', 'option'); ?>" alt="<?php bloginfo('name'); ?>"> </div>
                            </div>
                            <!-- /.wide-banner --> 
                        </div>
                        <!-- /.col -->
                        <?php  endwhile; else : echo 'Đang cập nhật dữ liệu.'; endif; ?>
                        
                     
                        
                        
                    </div>
                    <!-- /.row --> 
                </div>
                <!-- /.wide-banners -->
                
                <?php $terms = get_terms( 'danh-muc-san-pham' );
foreach ( $terms as $term ) {
 $term_link = get_term_link( $term );
    if ( is_wp_error( $term_link ) ) {
        continue;
    } ?>
                <section class="section featured-product   ">
                    <h2 class="section-title"> <?php echo $term->name; ?> <a  style="font-size: 13px;text-decoration: underline; text-transform:none;font-weight:lighter;" href="<?php echo esc_url( $term_link ); ?>" class="pull-right"><i class="fa fa-check-square-o" aria-hidden="true"></i> Xem tất cả</a> </h2>
                    <div class="description_cat ah" style="padding: 20px;"> <?php echo category_description($term->term_id); ?> </div>
                    <div >
                        <?php 	$args=array(	
					'post_type' => 'san-pham', 	
					'posts_per_page'=>3,
					'tax_query' => array( array(			
							'taxonomy' => 'danh-muc-san-pham',	
							'field' => 'slug',
							'terms' => $term->slug, ),),);		
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
                    <!-- /.home-owl-carousel --> 
                </section>
                <!-- /.section -->
                <?php } ?>
                
                
                
                <div class="wide-banners wow fadeInUp outer-bottom-xs">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="wide-banner cnt-strip">
                                <div class="image"> <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner3.png" alt="<?php bloginfo('name'); ?>"> </div>
                            </div>
                         
                        </div>
                    </div>
                   
                </div>
                
                
                <section class="section latest-blog outer-bottom-vs ">
                    <h3 class="section-title">Tin tức mới<a  style="font-size: 13px;text-decoration: underline; text-transform:none;font-weight:lighter;" href="
                  <?php echo esc_url( $term_link ); ?>" class="pull-right"><i class="fa fa-check-square-o" aria-hidden="true"></i> Xem tất cả</a></h3>
                    <div class="blog-slider-container outer-top-xs">
                    <?php 
	$args=array(
	'post_type' => 'post',  
	'cat' => '1',
	'posts_per_page'=>3);
	$query = new WP_Query( $args); 
?>
<?php if ( $query->have_posts() ) : ?>
	<?php while ( $query->have_posts() ) : $query->the_post();?>

                            <div class="col-sm-4  outer-bottom-xs">
                                <div class="blog-post">
                                            <div class="blog-post-image">
                                                <div class="image ctsm"> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                  <?php if ( has_post_thumbnail() ) { ?>
                                                  <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                                  <?php } else { ?>
                                                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sample-blog.png"  alt="<?php the_title(); ?>">
                                                  <?php } ?>
                                              </a> </div>
                                          </div>
                                          <!-- /.blog-post-image -->
                                          <div class="blog-post-info text-left">
                                            <h3 class="name"  style="height: 30px;overflow-y: hidden;"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>
                                            <span class="info"><i class="fa fa-user" aria-hidden="true"></i> <?php the_author() ; ?>&nbsp;|&nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> <?php the_time('d/m/Y') ; ?>
                                            </span>
                                            <div class="text" style="height: 72px;overflow-y: hidden;margin-bottom:5px;">
                                                <?php if(get_the_excerpt()) {echo wp_trim_words( get_the_excerpt(), 30 ); } else {echo wp_trim_words( get_the_content(), 100 );  }?>
                                            </div>
                                            <a href="
                                            <?php the_permalink(); ?>" class="lnk btn btn-primary">Chi tiết <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> </a> </div>
                                            <!-- /.blog-post-info --> 
                                        </div>
                                <!-- /.blog-post --> 
                            </div>
                            <!-- /.item -->
               	<?php endwhile; ?>
	<?php  wp_reset_query(); ?>
<?php  endif; ?>
                    
                    </div>
                    <div class="clearfix"></div>
                    <!-- /.blog-slider-container --> 
                </section>
                <!-- /.section -->
                
                
                 <section class="section latest-blog outer-bottom-vs ">
                    <h3 class="section-title">Blog<a  style="font-size: 13px;text-decoration: underline; text-transform:none;font-weight:lighter;" href="
                  <?php echo esc_url( $term_link ); ?>" class="pull-right"><i class="fa fa-check-square-o" aria-hidden="true"></i> Xem tất cả</a></h3>
                    <div class="blog-slider-container outer-top-xs">
                    <?php 
	$args=array(
	'post_type' => 'post',  
		'cat' => '2',
	'posts_per_page'=>3);
	$query = new WP_Query( $args); 
?>
<?php if ( $query->have_posts() ) : ?>
	<?php while ( $query->have_posts() ) : $query->the_post();?>

                            <div class="col-sm-4  outer-bottom-xs">
                                <div class="blog-post">
                                            <div class="blog-post-image">
                                                <div class="image ctsm"> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                  <?php if ( has_post_thumbnail() ) { ?>
                                                  <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                                  <?php } else { ?>
                                                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sample-blog.png"  alt="<?php the_title(); ?>">
                                                  <?php } ?>
                                              </a> </div>
                                          </div>
                                          <!-- /.blog-post-image -->
                                          <div class="blog-post-info text-left">
                                            <h3 class="name"  style="height: 30px;overflow-y: hidden;"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>
                                            <span class="info"><i class="fa fa-user" aria-hidden="true"></i> <?php the_author() ; ?>&nbsp;|&nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> <?php the_time('d/m/Y') ; ?>
                                            </span>
                                            <div class="text" style="height: 72px;overflow-y: hidden;margin-bottom:5px;">
                                                <?php if(get_the_excerpt()) {echo wp_trim_words( get_the_excerpt(), 30 ); } else {echo wp_trim_words( get_the_content(), 100 );  }?>
                                            </div>
                                            <a href="<?php the_permalink(); ?>" class="lnk btn btn-primary">Chi tiết <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> </a> </div>
                                            <!-- /.blog-post-info --> 
                                        </div>
                                <!-- /.blog-post --> 
                            </div>
                            <!-- /.item -->
               	<?php endwhile; ?>
	<?php  wp_reset_query(); ?>
<?php  endif; ?>
                    
                    </div>
                    <div class="clearfix"></div>
                    <!-- /.blog-slider-container --> 
                </section>
                <!-- /.section -->
                
                
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
