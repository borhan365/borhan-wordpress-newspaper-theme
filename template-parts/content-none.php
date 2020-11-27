<?php
    if ( is_home() && current_user_can( 'publish_posts' ) ) {

        printf( 
            '<p>' .
            __( 'Ready to pusblish your first post? <a href="%1$s">Get started here.</a>', 'azad-x' )
            . '</p>',
            esc_url( admin_url( 'post-new.php' ) )
        );
        
    } else { ?>

        <p>No content found for now. You can try <a href="<?php site_url(); ?>"><?php bloginfo( 'name' ); ?></a></p>

    <?php get_search_form(); }

