<div class="blog-post " style="margin-bottom:15px;" id="<?php the_ID(); ?>"> 

<?php if(!is_single()) { ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
  <?php if ( has_post_thumbnail() ) { ?>
  <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"  class="img-responsive" style="width:100%;   height: 380px;
    object-fit: cover;" >
  <?php } else { ?>
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sample-blog.png"  alt="<?php the_title(); ?>"  class="img-responsive" >
  <?php } ?>
  </a>
  
  
  <h2><a style="font-size:18px;text-transform:uppercase;" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_title(); ?></a></h2>
  <?php } else { ?>
   <h1 style="margin-top:0;font-size:18px;text-transform:uppercase;"> <?php the_title(); ?></h1>
  <?php } ?>
   
  <div class="info_post"> <span class="author">
    <?php the_author() ; ?>
    </span> &nbsp; <span class="date-time">
    <?php the_time('d/m/Y') ; ?>
    </span> </div>
    <?php if(!is_single()) { ?>
  <div class="info_excerpt" style="margin-bottom:15px; margin-top:10px;">
    <?php if(get_the_excerpt()) {echo wp_trim_words( get_the_excerpt(), 100 ); } else {echo wp_trim_words( get_the_content(), 100 );  }?>
  </div>
  <a href="<?php the_permalink(); ?>" class="lnk btn btn-upper btn-primary read-more">Chi tiết <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> </a>
  <?php } else { ?>
  <hr>
  <div id="page_content">
               
    	<?php the_content(); ?>
    
                </div>
    <?php } ?>
  </div>
