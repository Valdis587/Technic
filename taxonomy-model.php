<?php
get_header();
get_template_part( 'template-parts/content', 'head' );
?>
<div class="archive container">
    <div class="archive__sidebar-left">
        <div class="archive__content">
            <div class="archive__cart-col cart">
            <?php
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
     ?>
             
            </div>
            <?php wp_main_pagination() ?>
        </div>
       <div class="sidebar">
	<?php dynamic_sidebar( 'sidebar-catalog' ); ?>
</div><!-- #secondary -->
    </div>
</div>

<?php
get_footer();