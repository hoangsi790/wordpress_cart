
<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
  <div class="side-menu" style="position:relative;">
    <div class="head"><strong>HOTLINE</strong><br>
      <hr style="margin: 10px 0;">
      <div style="font-size:16px;line-height:150%;"> <i style="font-size:13px;" class="fa fa-tags" aria-hidden="true"></i><strong> <?php the_field('hs_tel_01', 'option'); ?></strong><br>
        <i style="font-size:13px;" class="fa fa-tags" aria-hidden="true"></i> <strong><?php the_field('hs_tel_02', 'option'); ?></strong></div>
    </div>
    <span> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hotline.png" alt="HOTLINE" style="position:absolute;z-index:1;right:0;bottom:0;"> </span></div>
  <!-- /.side-menu -->
  
  <div class="side-menu animate-dropdown outer-bottom-xs hidsp">
    <nav class="yamm megamenu-horizontal" role="navigation">
      <ul class="nav">
        <li class="menu-item">
        <a href="<?php bloginfo( 'home' ); ?>/?page_id=175">Phương Thức Thanh Toán</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-185">
        <a href="<?php bloginfo( 'home' ); ?>/?page_id=177">Giao hàng &amp; Nhận hàng</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-184">
        <a href="<?php bloginfo( 'home' ); ?>/?page_id=179">Đổi trả &amp; Hoàn tiền</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-183">
        <a href="<?php bloginfo( 'home' ); ?>/?page_id=181">Mẹo mua sắm</a></li>
        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-187">
        <a href="<?php bloginfo( 'home' ); ?>/?page_id=171">Trung tâm hỗ trợ</a></li>
      </ul>
    </nav>
  </div>
  <div class="sidebar-widget wow fadeInUp outer-top-vs outer-bottom-small ah hidsp" style="padding: 0;">
    <div class="advertisement "> <a href="<?php bloginfo( 'home' ); ?>/?page_id=132"> <img style="padding: 4px;border: 1px solid #ccc;width: 100%;" src="<?php echo get_template_directory_uri(); ?>/assets/images//faq.png" alt="Hỏi đáp"> </a> </div>
  </div>
  <div class="sidebar-widget  wow fadeInUp hidsp ">
    <h3 class="section-title">ĐÁNH GIÁ TỪ KHÁCH HÀNG</h3>
    <div id="advertisement" class="advertisement owl-review">
      <div class="item">
        <div class="avatar"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/danh-gia.jpg" alt="Hoàng Sĩ" class="img-thumbnail" style="margin-bottom:0;"></div>
        <div style="text-align:center;margin-bottom:5px;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/rating.png"  alt="Rating" style="max-width:70px;"></div>
        <div class="testimonials"><em>"</em> Hồi sinh viên thức khuya quá tóc hai bên trán rụng nhiều, may mà được Kaminomoto tư vấn sử dụng thuốc mọc tóc Kaminomoto General giúp mình mọc tóc trở lại nhanh chóng <em>"</em></div>
        <div class="clients_author">Hoàng Sĩ <span> Lập trình viên </span> </div>
        <!-- /.container-fluid --> 
      </div>
      <!-- /.item --> 
      
    </div>
    <div style="margin-bottom:15px;"> <a href="<?php bloginfo( 'home' ); ?>/?page_id=385" class="pull-right"><i class="fa fa-sign-in" aria-hidden="true"></i> Xem tất cả đánh giá</a> </div>
    
    <!-- /.owl-carousel --> 
  </div>
  <div class="sidebar-widget product-tag  outer-top-vs hidsp">
    <h3 class="section-title">TỪ KHÓA SẢN PHẨM</h3>
    <div class="sidebar-widget-body outer-top-xs">
      <div class="tag-list" style="height:315px;overflow:hidden;">
        <?php  $terms_tags = get_terms( 'tu-khoa' ); if ( ! empty( $terms_tags ) && ! is_wp_error( $terms_tags ) ){ ?>
        <?php foreach ( $terms_tags as $term_tags ) { $term_tags_link = get_term_link( $term_tags->term_id ); ?>
        <a class="item" title="<?php echo $term_tags->name; ?>" href="<?php echo $term_tags_link; ?>"><?php echo $term_tags->name; ?></a>
        <?php  } ?>
        <?php } ?>
      </div>
      <div class="clearfix"></div>
      <a href="<?php bloginfo( 'home' ); ?>/?page_id=1027" style="padding-top:7px;" class="pull-right"><i class="fa fa-sign-in" aria-hidden="true"></i> Xem tất cả từ khóa</a>
        <div class="clearfix"></div>
      <!-- /.tag-list --> 
    </div>
    <!-- /.sidebar-widget-body --> 
  </div>
  
  
  
  
  
  
  <div class="sidebar-widget product-tag  outer-top-vs hidsp">
    <h3 class="section-title">MẸO HAY MỖI NGÀY</h3>
    <div class="sidebar-widget-body outer-top-xs">
      <ul class="simple-post-list">
      
      
      <?php 
$args=array(
'post_type' => 'post', 
'orderby' => 'ID', 
'order'   => 'DESC', 
'cat' => 1,
'posts_per_page'=>5);
$query = new WP_Query( $args); 
?>
<?php if ( $query->have_posts() ) : ?>
<?php while ( $query->have_posts() ) : $query->the_post();?>
      
                             <li style="margin-bottom:10px; display:inline-block;width:100%;">
                            <div class="post-image col-xs-4">
                                <div  class="row" style="margin-right:-5px;">
                                
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
  <?php if ( has_post_thumbnail() ) { ?>
  <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"  class="img-thumbnail"  style="width:100%; height: 50px;
    object-fit: cover; " >
  <?php } else { ?>
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sample-blog.png"  alt="<?php the_title(); ?>"  class="img-responsive" >
  <?php } ?>
  </a>
                                
                                
                                
                               
                                                                        
                                                                        </div>
                            </div>
                            <div class="post-info  col-xs-8"> 
                            <div class="row" >
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <div class="post-meta" style="color:#555;font-size:10px;"> <i class="fa fa-calendar"></i>
                                  <?php the_time('d.m.Y') ; ?>                            </div>
                                    
                                    </div>
                            </div>
                        </li>
                                                
                                                
                              <?php endwhile; ?>
<?php  wp_reset_query(); ?>
<?php  endif; ?>                  
                                                
                                                                                            </ul>
      <div class="clearfix"></div>
      <a href="<?php bloginfo( 'home' ); ?>/?page_id=841" style="padding-top:7px;" class="pull-right"><i class="fa fa-sign-in" aria-hidden="true"></i> Xem tất bài viết</a>
        <div class="clearfix"></div>
      <!-- /.tag-list --> 
    </div>
    <!-- /.sidebar-widget-body --> 
  </div>
  
  <div class="sidebar-widget product-tag  outer-top-vs hidsp">
    <h3 class="section-title">BLOG</h3>
    <div class="sidebar-widget-body outer-top-xs">
      <ul class="simple-post-list">
      
      
      <?php 
$args=array(
'post_type' => 'post', 
'orderby' => 'ID', 
'order'   => 'DESC', 
'cat' => 2,
'posts_per_page'=>5);
$query = new WP_Query( $args); 
?>
<?php if ( $query->have_posts() ) : ?>
<?php while ( $query->have_posts() ) : $query->the_post();?>
      
                             <li style="margin-bottom:10px; display:inline-block;width:100%;">
                            <div class="post-image col-xs-4">
                                <div  class="row" style="margin-right:-5px;">
                                
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
  <?php if ( has_post_thumbnail() ) { ?>
  <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"  class="img-thumbnail"  style="width:100%; height: 50px;
    object-fit: cover; " >
  <?php } else { ?>
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sample-blog.png"  alt="<?php the_title(); ?>"  class="img-responsive" >
  <?php } ?>
  </a>
                                
                                
                                
                               
                                                                        
                                                                        </div>
                            </div>
                            <div class="post-info  col-xs-8"> 
                            <div class="row" >
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <div class="post-meta" style="color:#555;font-size:10px;"> <i class="fa fa-calendar"></i>
                                  <?php the_time('d.m.Y') ; ?>                            </div>
                                    
                                    </div>
                            </div>
                        </li>
                                                
                                                
                              <?php endwhile; ?>
<?php  wp_reset_query(); ?>
<?php  endif; ?>                  
                                                
                                                                                            </ul>
      <div class="clearfix"></div>
      <a href="<?php bloginfo( 'home' ); ?>/?page_id=271" style="padding-top:7px;" class="pull-right"><i class="fa fa-sign-in" aria-hidden="true"></i> Xem tất bài viết</a>
        <div class="clearfix"></div>
      <!-- /.tag-list --> 
    </div>
    <!-- /.sidebar-widget-body --> 
  </div>
  
  
</div>
