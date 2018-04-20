<?php session_start(); ?>
<?php /* Template Name: Liên hệ  */ ?>
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
            <div class="row">
              <div class="col-md-12 contact-map ">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1767299088815!2d106.63978356532941!3d10.797772592307087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175294c31fc5afb%3A0xf37f461cddd02d84!2zVGh14buRYyBt4buNYyB0w7Nj!5e0!3m2!1svi!2s!4v1500647434587"></iframe>
              </div>
              </div>
              <?php get_template_part( 'content', 'contact' ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
