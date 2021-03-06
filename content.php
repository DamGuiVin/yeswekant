<?php

/*

 * Used for both audio, video and standard post types

 */

// Get the layout set in theme options



$post_classes = array('post-teaser');

?>



<article id="post-<?php the_ID(); ?>" <?php post_class($post_classes); ?>>

    <div class="col-md-6">

        <?php themeora_post_media( $post->ID, 'themeora-thumbnail-span-9' ); ?>

    </div>

        <div class="content">

            <header>

    <div class="col-md-6">


                <?php if ( is_single() ) : ?>

                    <h1 class="title"><?php the_title(); ?></h1>

                <?php else : ?>

                    <h2 class="title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <?php endif; ?>

                <?php themeora_entry_meta(); ?>

    </div>

            </header>

            <?php

                if ( is_single() ) {

                    the_content();

                    wp_link_pages('before=<div id="page-links">&after=</div>');

                }

                else {

                    the_excerpt();

                }

            ?>

        </div>

</article><!-- end post-teaser -->