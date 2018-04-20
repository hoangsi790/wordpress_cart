<?php session_start(); ?>
<?php get_header();?>

<div class="body-content outer-top-xs">
  <div class="container">
    <div class="row">
      <?php get_sidebar(); ?>
      
      <div class="col-xs-12 col-sm-12 col-md-6 homebanner-holder" style="padding:0 15px;">
        <section class="row" >
          <div class="blog-page">
            <?php if ( have_posts() ) :  ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', 'post' ); ?>
            <!-- /.item -->
            <?php endwhile; ?>
            <div class="clearfix"></div>
            <?php  wp_reset_query(); ?>
            <?php  endif; ?>
            <div class="clearfix"></div>
          </div>
          <!-- /.home-owl-carousel --> 
        </section>
      </div>
      
      <div class="col-md-3 sidebar">
      
     
      
      <?php
$terms = get_the_terms( get_the_ID(), 'category' );
if ( $terms && ! is_wp_error( $terms ) ) :  
foreach ( $terms as $term ) { ?>
        <?php if($term->slug == 'tin-tuc') { ?> 
		<div class="sidebar-widget outer-bottom-xs wow fadeInUp">
            <h3 class="section-title">Danh mục bài viết</h3>
            <div class="sidebar-widget-body m-t-10">
                <div class="accordion">
                   
<?php
$terms_child = get_terms(array('taxonomy' => 'category', 'parent' => 1));
if ( $terms_child && ! is_wp_error( $terms_child ) ) :  
foreach ( $terms_child as $term_child ) { ?>
                   
                    <div class="accordion-group">
                        <div class="accordion-heading">-  <a href="<?php echo esc_url(get_term_link($term_child));?>"><?php echo $term_child->name; ?></a> </div>
                     
                    </div>
                    <!-- /.accordion-group -->
                    
                       <?php } ?>

                    <?php endif; ?>
                </div>
                <!-- /.accordion --> 
            </div>
            <!-- /.sidebar-widget-body --> 
        </div>
		   <?php } ?>
   <?php } ?>
      
         <?php endif; ?>
      
      
         
        
        
        
        
        
        
        
      <div class="sidebar-widget outer-bottom-xs">
    
    
	<ul class="nav nav-tabs">
	  <li class="active"><a href="#popular" data-toggle="tab">NỔI BẬT</a></li>
	  <li><a href="#recent" data-toggle="tab">GẦN ĐÂY</a></li>
	</ul>
	<div class="tab-content" style="padding-left:0">
                <div class="tab-pane active m-t-20" id="popular">
                    <?php 
	$args=array(
	'post_type' => 'post', 
	'orderby' => 'meta_key', 
	'meta_key' => '_is_ns_featured_post', 
	'meta_value' => 'yes' ,
	'posts_per_page'=>3);
	$query = new WP_Query( $args); 
?>
                    <?php if ( $query->have_posts() ) : ?>
                    <?php while ( $query->have_posts() ) : $query->the_post();?>
                    <div class="blog-post inner-bottom-30 sidebar-post " ><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php if ( has_post_thumbnail() ) { ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-thumbnail">
                        <?php } else { ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sample-blog.png"  alt="<?php the_title(); ?>">
                        <?php } ?>
                        </a>
                        <h4><a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                            </a></h4>
                        <span class="review">
                        <?php $comments_count = wp_count_comments();echo $comments_count->approved; ?>
                        Bình luận</span> <span class="date-time">
                        <?php the_time('d/m/Y') ; ?>
                        </span>
                        <?php the_excerpt(); ?>
                    </div>
                    <?php endwhile; ?>
                    <?php  wp_reset_query(); ?>
                    <?php  endif; ?>
                </div>
                <div class="tab-pane m-t-20" id="recent">
                   <?php 
	$args=array(
	'post_type' => 'post', 
	'orderby' => 'rand', 
	'meta_key' => '_is_ns_featured_post', 
	'meta_value' => 'yes' ,
	'posts_per_page'=>3);
	$query = new WP_Query( $args); 
?>
                    <?php if ( $query->have_posts() ) : ?>
                    <?php while ( $query->have_posts() ) : $query->the_post();?>
                    <div class="blog-post inner-bottom-30 sidebar-post " ><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php if ( has_post_thumbnail() ) { ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-thumbnail">
                        <?php } else { ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sample-blog.png"  alt="<?php the_title(); ?>">
                        <?php } ?>
                        </a>
                        <h4><a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                            </a></h4>
                        <span class="review">
                        <?php $comments_count = wp_count_comments();echo $comments_count->approved; ?>
                        Bình luận</span> <span class="date-time">
                        <?php the_time('d/m/Y') ; ?>
                        </span>
                        <?php the_excerpt(); ?>
                    </div>
                    <?php endwhile; ?>
                    <?php  wp_reset_query(); ?>
                    <?php  endif; ?>
                </div>
            </div>
</div>

<div class="sidebar-widget product-tag  outer-top-vs">
    <h3 class="section-title">TỪ KHÓA</h3>
    <div class="sidebar-widget-body outer-top-xs">
      <div class="tag-list">
        <?php  $terms_tags = get_terms( 'post_tag' ); if ( ! empty( $terms_tags ) && ! is_wp_error( $terms_tags ) ){ ?>
        <?php foreach ( $terms_tags as $term_tags ) { $term_tags_link = get_term_link( $term_tags->term_id ); ?>
        <a class="item" title="<?php echo $term_tags->name; ?>" href="<?php echo $term_tags_link; ?>"><?php echo $term_tags->name; ?></a>
        <?php  } ?>
        <?php } ?>
      </div>
      <!-- /.tag-list --> 
    </div>
    <!-- /.sidebar-widget-body --> 
  </div>
      </div>
      
    </div>
  </div>
</div>
<?php get_footer(); ?>
