<?php get_header();?>
<!---slider--->
<div id="carouselControls" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
   
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo get_bloginfo('template_url'); ?>/images/bg.jpg" alt="First slide"> 
       <div class="carousel-caption">
          <h1 class="display-1">Slide 1</h1>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_bloginfo('template_url'); ?>/images/bg-2.jpg" alt="Second slide">
      <div class="carousel-caption">
          <h1  class="display-1">Slide 2</h1>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_bloginfo('template_url'); ?>/images/bg-3.jpg" alt="Third slide">
      <div class="carousel-caption">
          <h1  class="display-1">Slide 3</h1>
        </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 

&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
<!--widget-->
<h3 >Widget To Be Displayed</h3>
<div class="container">
  
      <div class="row">

      <div class="col-md-3 mx-auto mb-4">
              <?php if (is_active_sidebar('sidebar-1')) : ?>
              <div id ="secondary" class="sidebar-container" role="complementary">
              <div class="widget-area">
              <?php dynamic_sidebar('sidebar-1'); ?>
              <?php endif; ?>
              </div>
              </div>
      </div>


     <div class="col-md-3 mx-auto mb-4">
              <?php if (is_active_sidebar('sidebar-2')) : ?>
              <div id ="secondary" class="sidebar-container" role="complementary">
              <div class="widget-area">
              <?php dynamic_sidebar('sidebar-2'); ?>
              <?php endif; ?>
              </div>
              </div>
        </div>
       

        <div class="col-md-3 mx-auto mb-4">
            <?php if (is_active_sidebar('sidebar-3')) : ?>
            <div id ="secondary" class="sidebar-container" role="complementary">
            <div class="widget-area">
            <?php dynamic_sidebar('sidebar-3'); ?>
            <?php endif; ?>
            </div>
            </div>
        </div>


        </div>
      </div>
</div>
 
<!--Post Display-->
<h3>Post To Be Display Here</h3>
<?php

 $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish'));
 ?>
 <?php 
 if ( $wpb_all_query->have_posts()) : 
 ?> 
 <ul>
 
     <?php 
       while (  $wpb_all_query->have_posts()) :
       $wpb_all_query->the_post();
      ?>

     <li>
      <a href="<?php the_permalink(); ?>" style="color: black;">
      <?php the_title(); ?>
      </a>
     </li>
     <?php endwhile; ?>
 </ul>

<?php else : ?>
<p><?php _e( 'Sorry, no posts '); ?></p>
<?php endif; ?>
<!--Post end-->

<?php get_footer();?>


