<?php the_time('F j, Y'); ?>

<?php if(get_post_type( $post ) == 'portfolio'): ?>

 | <?php printf( __('Posted by %1$s in %2$s', 'theme') , get_the_author(), get_the_term_list( $post->ID, 'portfolio_cat', '', ', ', '' ) ); ?>
 
 <?php else: ?> 
 
 | <a href="<?php comments_link(); ?>"><?php comments_number(__( 'No Comments', 'theme' ), __( '1 Comment', 'theme' ), __( '% Comments', 'theme' ) ); ?></a>
 | <?php printf( __('Posted by %1$s in %2$s', 'theme') , get_the_author(), get_the_category_list( ', ' ) ); ?>
 
 <?php endif; ?>