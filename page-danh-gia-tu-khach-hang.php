<?php session_start(); ?>
<?php /* Template Name: Đánh giá từ khách hàng  */ ?>
<?php get_header(); ?>

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
            <?php if ( have_posts() ) :  ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
            <?php  wp_reset_query(); ?>
            <?php  endif; ?>
                
          </div>
          
          
          
          
          <div class="row">
            <div class="col-md-2 col-sm-2" style="margin-right:-15px;"> <img style="    border: 1px solid #59b210;
    padding: 2px;
    border-radius: 2px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/danh-gia.jpg" alt="Responsive image" class="img-rounded img-responsive"> </div>
            <div class="col-md-10 col-sm-10 blog-comments">
              <div class="blog-comments " style="position:relative;">
                <h5 style="margin-top:5px; margin-bottom:5px;"><strong>Hoàng Sĩ</strong>  <small>( Lập trình viên )</small></h5>
                <div style="margin-bottom:10px;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/rating.png"  alt="Rating" style="max-width:70px;"></div>
                <p>Hồi sinh viên thức khuya quá tóc hai bên trán rụng nhiều, may mà được Kaminomoto tư vấn sử dụng thuốc mọc tóc Kaminomoto General giúp mình mọc tóc trở lại nhanh chóng, may mà được Kaminomoto tư vấn sử dụng thuốc mọc tóc Kaminomoto General giúp mình mọc tóc trở lại nhanh chóng</p>
              </div>
              
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12">
              <hr style="margin-top:5px;">
            </div>
          </div>
          <!-- end -->
          
            <div class="row">
            <div class="col-md-2 col-sm-2" style="margin-right:-15px;"> <img style="    border: 1px solid #59b210;
    padding: 2px;
    border-radius: 2px;" src="https://thuocmoctocnhatban.vn/wp-content/uploads/reviewthuocmoctockaminomoto1.jpg" alt="danh-gia-thuoc-moc-toc" class="img-rounded img-responsive"> </div>
            <div class="col-md-10 col-sm-10 blog-comments">
              <div class="blog-comments " style="position:relative;">
                <h5 style="margin-top:5px; margin-bottom:5px;"><strong>Thúy Vy</strong>  <small>( Nhân viên sale )</small></h5>
                <div style="margin-bottom:10px;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/rating.png"  alt="Rating" style="max-width:70px;"></div>
                <p>Tóc Vy trước đây sơ xác lắm hay rụng nhiều nữa, sau khi chuyển sang sử dụng bộ dầu gội & dầu xã của Kaminomoto tóc Vy đã giảm gãy rụng và chắc khỏe trở lại. Vy thấy bộ dầu gội dầu xã của Kaminomoto rất hợp với tóc của mình nên Vy sử dụng gội đầu hàng ngày để dưỡng tóc.</p>
              </div>
              
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12">
              <hr style="margin-top:5px;">
            </div>
          </div>
          <!-- end -->
          
        <div class="row">
            <div class="col-md-2 col-sm-2" style="margin-right:-15px;"> <img style="    border: 1px solid #59b210;
    padding: 2px;
    border-radius: 2px;" src="https://thuocmoctocnhatban.vn/wp-content/uploads/reviewthuocmoctockaminomoto2.jpg" alt="danh-gia-thuoc-moc-toc" class="img-rounded img-responsive"> </div>
            <div class="col-md-10 col-sm-10 blog-comments">
              <div class="blog-comments " style="position:relative;">
                <h5 style="margin-top:5px; margin-bottom:5px;"><strong>Bà của Phương Thảo</strong>  <small>( Nội trợ )</small></h5>
                <div style="margin-bottom:10px;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/rating.png"  alt="Rating" style="max-width:70px;"></div>
                <p>Bà của Thảo mấy năm trước do tuồi già nên tóc bị rụng khá nhiều lộ cả da đầu. Thảo có mua tặng bà chai LadiesChic lúc đầu bà không chịu sử dụng vì bà nghĩ thuốc sẽ không có tác dụng với người lớn tuổi, nhưng Thảo đã khuyên và giúp bà thoa thuốc mỗi ngày bây giờ tóc bà đã mọc đều trở lại tuy có hơi bạc nhưng Thảo thấy bà vẫn còn đẹp lão lắm.</p>
              </div>
              
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12">
              <hr style="margin-top:5px;">
            </div>
          </div>
          <!-- end -->
           <div class="row">
            <div class="col-md-2 col-sm-2" style="margin-right:-15px;"> <img style="    border: 1px solid #59b210;
    padding: 2px;
    border-radius: 2px;" src="https://thuocmoctocnhatban.vn/wp-content/uploads/reviewthuocmoctockaminomoto3.jpg" alt="danh-gia-thuoc-moc-toc-kaminomoto-nhat-ban" class="img-rounded img-responsive"> </div>
            <div class="col-md-10 col-sm-10 blog-comments">
              <div class="blog-comments " style="position:relative;">
                <h5 style="margin-top:5px; margin-bottom:5px;"><strong>Công Minh</strong>  <small>( Nhân viên IT )</small></h5>
                <div style="margin-bottom:10px;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/rating.png"  alt="Rating" style="max-width:70px;"></div>
                <p>Tóc mình trước đây sợi mỏng rụng khá nhiều, da đầu nhờn rất khó chịu, sau khi sử dụng bộ sản phẩm Kaminomoto General Hair Growth tóc mình đã mọc nhiều và dày hơn. Nghe theo tư vấn của shop sau khi tóc hồi phục mình đã cắt ngắn đi để tóc mới mọc đều và đẹp hơn.
Cảm ơn shop đã tư vấn rất tận tình</p>
              </div>
              
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12">
              <hr style="margin-top:5px;">
            </div>
          </div>
          <!-- end -->
<div class="row">
            <div class="col-md-2 col-sm-2" style="margin-right:-15px;"> <img style="    border: 1px solid #59b210;
    padding: 2px;
    border-radius: 2px;" src="https://thuocmoctocnhatban.vn/wp-content/uploads/reviewthuocmoctockaminomoto4.jpg" alt="danh-gia-thuoc-moc-toc-kaminomoto-nhat-ban" class="img-rounded img-responsive"> </div>
            <div class="col-md-10 col-sm-10 blog-comments">
              <div class="blog-comments " style="position:relative;">
                <h5 style="margin-top:5px; margin-bottom:5px;"><strong>Thu Yến</strong>  <small>( Nhân viên văn phòng )</small></h5>
                <div style="margin-bottom:10px;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/rating.png"  alt="Rating" style="max-width:70px;"></div>
                <p>Tóc mình rụng nhiều làm lộ cả da trên đỉnh đầu làm mình thiếu tự tin khi giao tiếp với khách hàng. Mặc dù đã sử dụng nhiều loại thuốc mọc tóc khác nhau nhưng không có kết quả. Từ khi sử dụng Kaminomoto Ladies EX giờ đây tóc mình đã mọc đều trở lại mình vui lắm. </p>
              </div>
              
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12">
              <hr style="margin-top:5px;">
            </div>
          </div>
          <!-- end -->
<div class="row">
            <div class="col-md-2 col-sm-2" style="margin-right:-15px;"> <img style="    border: 1px solid #59b210;
    padding: 2px;
    border-radius: 2px;" src="https://thuocmoctocnhatban.vn/wp-content/uploads/reviewthuocmoctockaminomoto5.jpg" alt="danh-gia-thuoc-moc-toc-kaminomoto-nhat-ban" class="img-rounded img-responsive"> </div>
            <div class="col-md-10 col-sm-10 blog-comments">
              <div class="blog-comments " style="position:relative;">
                <h5 style="margin-top:5px; margin-bottom:5px;"><strong>Hồng Nhung</strong>  <small>( Nhân viên bất động sản )</small></h5>
                <div style="margin-bottom:10px;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/rating.png"  alt="Rating" style="max-width:70px;"></div>
                <p>Lúc đầu Nhung vào website kaminomoto thấy nhiều loại thuốc mọc tóc làm Nhung bối rối lắm không biết loại nào phù hợp với mình. Sau khi được nhân viên của Kaminomoto tư vấn tận tình Nhung rất hài lòng, giao hàng thì đúng chất lượng, đóng gói cẩn thận.
Nhung cảm ơn shop nhé  </p>
              </div>
              
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12">
              <hr style="margin-top:5px;">
            </div>
          </div>
          <!-- end -->
<div class="row">
            <div class="col-md-2 col-sm-2" style="margin-right:-15px;"> <img style="    border: 1px solid #59b210;
    padding: 2px;
    border-radius: 2px;" src="https://thuocmoctocnhatban.vn/wp-content/uploads/reviewthuocmoctockaminomoto6.jpg" alt="danh-gia-thuoc-moc-toc-kaminomoto-nhat-ban" class="img-rounded img-responsive"> </div>
            <div class="col-md-10 col-sm-10 blog-comments">
              <div class="blog-comments " style="position:relative;">
                <h5 style="margin-top:5px; margin-bottom:5px;"><strong>Anh Khoa</strong>  <small>( Nhà báo )</small></h5>
                <div style="margin-bottom:10px;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/rating.png"  alt="Rating" style="max-width:70px;"></div>
                <p>Trước đây tóc mình mỏng rụng nhiều, mái tóc thưa thớt, da đầu thì bị nhờn rất khó chịu làm mình ngại giao tiếp lắm. Mình đã sử dụng nhiều thuốc mọc tóc khác nhau nhưng hiệu quả không được như mong đợi,  sau khi được bạn giới thiệu sử dụng thuốc mọc tóc general hair growth tóc mình đã mọc lại nhiều, hiện giờ mình tự tin lắm.  </p>
              </div>
              
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12">
              <hr style="margin-top:5px;">
            </div>
          </div>
          <!-- end -->
<div class="row">
            <div class="col-md-2 col-sm-2" style="margin-right:-15px;"> <img style="    border: 1px solid #59b210;
    padding: 2px;
    border-radius: 2px;" src="https://thuocmoctocnhatban.vn/wp-content/uploads/reviewthuocmoctockaminomoto7.jpg" alt="danh-gia-thuoc-moc-toc-kaminomoto-nhat-ban" class="img-rounded img-responsive"> </div>
            <div class="col-md-10 col-sm-10 blog-comments">
              <div class="blog-comments " style="position:relative;">
                <h5 style="margin-top:5px; margin-bottom:5px;"><strong>Kim Trang</strong>  <small>( Nhân viên Sale )</small></h5>
                <div style="margin-bottom:10px;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/rating.png"  alt="Rating" style="max-width:70px;"></div>
                <p>Trang đã từng sử dụng bộ combo của Kaminomoto Ladies Ex thấy tóc mình giảm rụng rõ rệt và tóc mới cũng mọc lên nhiều Trang vui lắm.
Cảm ơn Kaminomoto đã tư vấn tận tình. </p>
              </div>
              
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12">
              <hr style="margin-top:5px;">
            </div>
          </div>
          <!-- end -->
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
