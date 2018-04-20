<?php session_start(); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<title>
<?php wp_title(''); ?>
</title>
<link rel="stylesheet"  type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
<?php if(is_singular('san-pham')) { ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.fancybox.css">
<?php }  else { ?>
<link rel="stylesheet"  type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
<link rel="stylesheet"  type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
<?php } ?>
<link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-97658995-1', 'auto');
  ga('send', 'pageview');
</script>
</head>
<body <?php body_class(" cnt-home "); ?>>
<?php if(is_front_page()) { ?>
<h1 style="height: 0px;margin: 0;padding: 0;font-size: 0;">
  <?php bloginfo('name'); ?>
</h1>
<?php }  elseif(is_single() or is_singular('san-pham') or is_post_type_archive('san-pham')) {  } else { ?>
<h1 style="height: 0px;margin: 0;padding: 0;font-size: 0;">
  <?php wp_title(''); ?>
</h1>
<?php } ?>
<header class="header-style-1">
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-block pull-left hidsp">
          <ul class="list-unstyled list-inline">
            <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value"><i class="fa fa-heart" aria-hidden="true"></i> Chăm sóc khách hàng </span><b class="caret"></b></a>
              <ul class="dropdown-menu" style="padding:10px;">
                <li class="menu-item"><a href="<?php bloginfo( 'home' ); ?>/?page_id=175">Phương Thức Thanh Toán</a></li>
                <li class="menu-item"><a href="<?php bloginfo( 'home' ); ?>/?page_id=177">Giao hàng &amp; Nhận hàng</a></li>
                <li class="menu-item"><a href="<?php bloginfo( 'home' ); ?>/?page_id=179">Đổi trả &amp; Hoàn tiền</a></li>
                <li class="menu-item"><a href="<?php bloginfo( 'home' ); ?>/?page_id=181">Mẹo mua sắm</a></li>
                <li class="menu-item"><a href="<?php bloginfo( 'home' ); ?>/?page_id=171">Trung tâm hỗ trợ</a></li>
              </ul>
            </li>
            <li class=""> <a href="<?php bloginfo( 'home' ); ?>/?page_id=159"><span class="value"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Hướng dẫn mua hàng</span> </a></li>
          </ul>
          <!-- /.list-unstyled -->
        </div>
        <div class="cnt-account">
          <ul class="list-unstyled">
            <li><a href="<?php bloginfo( 'home' ); ?>/gio-hang" title="Giỏ hàng"><i class="icon fa fa-shopping-cart"></i>Giỏ hàng</a></li>
            <li><a href="<?php bloginfo( 'home' ); ?>/thanh-toan" title="Thanh toán"><i class="icon fa fa-check"></i>Thanh toán</a></li>
          </ul>
        </div>
        <!-- /.cnt-account -->

        <!-- /.cnt-cart -->
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.header-top -->

  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
          <div class="logo"> <a href="<?php bloginfo( 'home' ); ?>" title="<?php bloginfo( 'name' ); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?>"> </a> </div>
          <!-- /.logo -->
        </div>
        <!-- /.logo-holder -->

        <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
          <!-- /.contact-row -->

          <div class="search-area">
            <form role="search" method="get" id="form-search" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" >
              <div class="control-group hidsp">
                <ul class="categories-filter animate-dropdown">
                  <li class="dropdown"> <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html"> &nbsp; Danh mục <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" >
                      <?php $terms = get_terms( 'danh-muc-san-pham' ); foreach ( $terms as $term ) { $term_link = get_term_link( $term );?>
                      <li class="menu-header"><a href="<?php echo esc_url( $term_link ); ?>"><i class="fa fa-tags" aria-hidden="true"></i> <?php echo $term->name; ?></a></li>
                      <?php } ?>
                    </ul>
                  </li>
                </ul>
                <input class="search-field biginput" placeholder="Nhập từ khóa tìm kiếm..." name="s" id="s" value="<?php echo get_search_query(); ?>" required>
                <button type="submit" class="search-button" ></button> </div>
            </form>
          </div>
          <!-- /.search-area -->
        </div>
        <!-- /.top-search-holder -->

        <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row" style="position:relative;">
          <div class="dropdown dropdown-cart"> <a href="<?php bloginfo( 'home' ); ?>/gio-hang" class=" lnk-cart">
            <div class="items-cart-inner">
              <div class="basket"> </div>
              <div class="basket-item-count"><span class="count"><i class="glyphicon glyphicon-shopping-cart"></i></span></div>
              <div class="total-price-basket"> <span class="lbl" style="font-size:12px;"> &nbsp;XEM GIỎ HÀNG</span> </div>
            </div>
            </a> </div>
          <!-- /.dropdown-cart -->

        </div>

        <!-- /.top-cart-row -->
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

  </div>
  <!-- /.main-header -->

  <div class="header-nav animate-dropdown ">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                <li class="<?php if(is_front_page())  { echo ' active '; } ?>  yamm-fw"> <a href="<?php bloginfo( 'home' ); ?>" ><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Trang chủ</a> </li>
                <li class="<?php if(get_the_ID()=='135')  { echo ' active '; } ?>"> <a href="<?php bloginfo( 'home' ); ?>/?page_id=135" >Giới thiệu</a> </li>
<li class="<?php if(get_the_ID()=='135')  { echo ' active '; } ?>"> <a href="https://thuocmoctocnhatban.vn/thuoc-moc-toc-kaminomoto/" >Thuốc mọc tóc</a> </li>
                <li class="dropdown <?php if(get_the_ID()=='867' or is_singular('san-pham'))  { echo ' active '; } ?>" id="nav-san-pham"> <a href="<?php bloginfo( 'home' ); ?>/?page_id=867" >Sản Phẩm <b class="caret"></b><span class="menu-label hot-menu hidden-xs">hot</span></a>
                  <ul class="dropdown-menu pages" id="sub-nav-san-pham">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-menu">
                            <ul class="links">
                              <?php
	$args=array(
	'post_type' => 'san-pham',
	'posts_per_page'=>-1);
	$query = new WP_Query( $args);
?>
                              <?php if ( $query->have_posts() ) : ?>
                              <?php while ( $query->have_posts() ) : $query->the_post();?>
                              <li><a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                                </a></li>
                              <?php endwhile; ?>
                              <?php  wp_reset_query(); ?>
                              <?php  endif; ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="<?php if(get_the_ID()=='132')  { echo ' active '; } ?>"> <a href="<?php bloginfo( 'home' ); ?>/?page_id=132" >Hỏi đáp & Tư vấn<span class="menu-label new-menu hidden-xs">hot</span></a> </li>
                <li class="<?php if(get_the_ID()=='841')  { echo ' active '; } ?>"> <a href="<?php bloginfo( 'home' ); ?>/?page_id=841" >Tin tức</a> </li>
                <li class="<?php if(get_the_ID()=='271')  { echo ' active '; } ?>"> <a href="<?php bloginfo( 'home' ); ?>/?page_id=271" >Blog</a> </li>
                <li class="<?php if(get_the_ID()=='128')  { echo ' active '; } ?>"> <a href="<?php bloginfo( 'home' ); ?>/?page_id=128" >Liên hệ</a> </li>
                <li class="pull-right  special-menu"> <a href="<?php bloginfo( 'home' ); ?>/?page_id=148">Khuyến mãi<span class="menu-label hot-menu hidden-xs">sale</span></a> </li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer -->
          </div>
          <!-- /.navbar-collapse -->

        </div>
        <!-- /.nav-bg-class -->
      </div>
      <!-- /.navbar-default -->
    </div>
    <!-- /.container-class -->

  </div>
  <!-- /.header-nav -->

  <?php if(!is_front_page() and !is_singular('san-pham')) { ?>
  <div class="hidsp" style="background: #fff; margin-bottom: 10px; box-shadow: 0 2px 4px 0 rgba(0,0,0,.08); padding: 15px; overflow: hidden;">
    <div class="container">
      <div class="row"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.png" alt="<?php bloginfo( 'name' ); ?>"> </div>
    </div>
  </div>
  <?php } ?>
</header>
<?php if(is_front_page()) { ?>
<?php } elseif(is_404()) { ?>
<div class="breadcrumb hidsp">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="<?php bloginfo( 'home' ); ?>" title="Trang chủ">Trang chủ</a></li>
        <li>Lỗi không tìm thấy trang</li>
      </ul>
    </div>
  </div>
</div>
<?php } elseif(is_archive()) { ?>
<div class="breadcrumb hidsp">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="<?php bloginfo( 'home' ); ?>" title="Trang chủ">Trang chủ</a></li>
        <li><?php echo single_cat_title( '', false  ); ?></li>
      </ul>
    </div>
  </div>
</div>
<?php } else { ?>
<div class="breadcrumb hidsp">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <?php   $get_name_post_type = get_post_type($post->ID ) ; ?>
        <?php $term_list = wp_get_post_terms($post->ID, 'danh-muc-san-pham', array("fields" => "all")); ?>
        <li><a href="<?php bloginfo( 'home' ); ?>" title="Trang chủ">Trang chủ</a></li>
        <?php   if($get_name_post_type=='san-pham') { ?>
        <li><a href="<?php bloginfo( 'home' ); ?>/?page_id=867" title="Sản phẩm">Sản phẩm</a></li>
        <?php }?>
        <?php   if($term_list[0]->name) { ?>
        <li><a href="<?php bloginfo( 'home' ); ?>/danh-muc-san-pham/<?php echo  $term_list[0]->slug; ?>" title="<?php echo  $term_list[0]->name; ?>"><?php echo  $term_list[0]->name; ?></a></li>
        <?php }?>
        <li><?php the_title(); ?></li>
      </ul>
    </div>
  </div>
</div>
<?php } ?>
