<?php /*used to display posts */ ?>
<?php /*used to display page */ ?>
<?php /*displayed only if files does not exist */ ?>
<?php
    get_header();
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
    endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;
    get_footer(); 
?>
