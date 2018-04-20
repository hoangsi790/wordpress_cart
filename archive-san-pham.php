<div class="body-content outer-top-xs">
<div class="container">
    <div class="row">
        <?php get_sidebar(); ?>
        <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder" style="padding:0 15px;">
            <div id="hero" class="shopping-cart ">
             <h2 class="section-title"><?php echo single_cat_title( '', false  ); ?></h2>
                <section class="row section product-slider" >
                    <div >
                   <?php if ( have_posts() ) :  ?>
	<?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', 'product' ); ?>
                        <!-- /.item -->
                      <?php endwhile; ?>
                       <div class="clearfix"></div>
			<div class="wrap-pagi">
				<?php wp_pagenavi(); ?>
			</div>
<?php  wp_reset_query(); ?>
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