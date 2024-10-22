<?php echo get_header(); ?> 
  <div class="main-content"> 

         <div class="adversiter">
              s
         </div>

         <div class="container">
           <div class="row">
               <?php if ( have_posts() ) : while( have_posts()  ) : the_post(); ?> 
                     <div class="column">
                         <div class="card">
                            <a href="<?php the_permalink();?>">
                             <?php  the_content(); //the_excerpt();  ?>
                         </div>
                     </div>
                   <?php endwhile; ?>
            </div>
                <?php endif; ?>
                
         </div>

   </div> 
         <!--/.blog-post-->
     
</main>


             
 
