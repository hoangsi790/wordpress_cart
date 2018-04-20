<?php session_start(); ?>
<?php /* Template Name: Từ khóa sản phẩm  */ ?>
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
          <div id="page_content" class=" product-tag">
          <div class="tag-list" >
        <?php  $terms_tags = get_terms( 'tu-khoa' ); if ( ! empty( $terms_tags ) && ! is_wp_error( $terms_tags ) ){ ?>
        <?php foreach ( $terms_tags as $term_tags ) { $term_tags_link = get_term_link( $term_tags->term_id ); ?>
        <a class="item" title="<?php echo $term_tags->name; ?>" href="<?php echo $term_tags_link; ?>"><?php echo $term_tags->name; ?></a>
        <?php  } ?>
        <?php } ?>
      </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
