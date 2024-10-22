<?php echo get_header(); ?> 

  <div class="main-content"> 
       <div class="side-content">
          <div>
              <div class="title-content">
                  <div class="main-title">
                    <h1>Title: <?php the_title(); ?></h1>
                    <hr>
                 </div>
                    <li  style="padding-top:20px;">Numerologsign</li>
               </div>

            <div class="date-blog">
                  <h4 class=""><a href="http://site-senses/en/">Archives</a></h4>
                    <ol class="date-blog" id="myMenu">

                  <?php
                      wp_nav_menu(array(
                          'theme_location' => 'primary',
                          'container_class' => 'container-menu-class',
                        ));
                          
                  ?>
                  </ol>
             </div>
        </div>

        <div class="ADVERSITE">
                ADVERSITE
          <div class="adds">

          </div>

        </div>

     </div>

      
    <div class="tried-content">

      <?php if ( have_posts() ) : while( have_posts()  ) : the_post(); ?> 
        <div class="content">
            <p class="blog-date"><?php the_time( 'l, F jS, Y' ); ?></p> 
          <div class="content-Post">
                  
            <a href="<?php the_permalink();?>"> <h1><?php the_title(); ?></h1></a>
                <?php  the_content(); //the_excerpt();  ?>
                    </div>
                       <div class="thumd-under" style=" width: 100% ;">
                           <p> <?php the_post_thumbnail(); ?></p>
                       </div>
                    </div>

           <?php endwhile; endif; ?>

        </div> 
    </div> 
       <!--/.blog-post-->


     
<?php echo get_footer(); ?>
             
 
