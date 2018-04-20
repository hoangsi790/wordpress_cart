<?php session_start(); ?>
<?php /* Template Name: Trung tâm hỗ trợ  */ ?>
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
            
              <?php get_template_part( 'content', 'contact' ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
