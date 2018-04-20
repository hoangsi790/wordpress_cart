<div class="body-content outer-top-xs">
<div class="container">
    <div class="row">
        <?php get_sidebar(); ?>
        <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder" style="padding:0 15px;">
            <div id="hero" class="shopping-cart ">
             <h2 class="section-title">Kết quả tìm kiếm phù hợp với từ khóa : "<?php echo get_search_query(); ?>"</h2>
                <section class="row section product-slider" >
                    <div >
                      <?php if ( have_posts() ) :  ?>
                      <?php while ( have_posts() ) : the_post(); ?>
                      <?php if ( 'san-pham' == get_post_type() ) : ?>
                        <?php get_template_part( 'content', 'product' ); ?>
                        <!-- /.item -->
                      <?php endwhile; ?>
                       <div class="clearfix"></div>
			<div class="wrap-pagi">
				<?php wp_pagenavi(); ?>
			</div>
<?php  wp_reset_query(); ?>
  <?php else:  echo '<h2>Xin lỗi, không có kết quả phù hợp với từ khóa "'.get_search_query().'"</h2>';   endif; ?>
  <?php  endif; ?>
                        <div class="clearfix"></div>
                    </div>
                    <!-- /.home-owl-carousel -->
                </section>


            </div>
        </div>
    </div>
</div>
</div>
