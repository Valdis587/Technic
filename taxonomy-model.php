<?php
get_header();
get_template_part( 'template-parts/content', 'head' );

do_action( 'start_wrapper_arhive_sidebar_left' );

              $termId   = get_queried_object_id();        
             $args = array(
                'order' 	 => 'DESC',
                'post_type' 	 => 'katalog',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'model',
                        'field'    => 'id',
                        'terms'    => $termId
                    )
              )
              
            );

                         $MY_QUERY = new WP_Query( $args );
                         if ( $MY_QUERY->have_posts() ) :
                             while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); 
                             get_template_part( 'template-parts/content', 'catalog' );
         endwhile;
     endif;
     do_action( 'end_wrapper_arhive_sidebar_left' );
get_footer();