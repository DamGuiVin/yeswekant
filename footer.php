<footer class="full-width-container primary-footer">

    <div class="container">

        <div class="row fat-footer footer-text" >

            

            <div class="column1 col-md-4" > <!-- beginning column1-->

                    <a href="<?php echo home_url( '/' ); ?>">

                        <img class="logo-inspirama" style="max-width:<?php echo esc_attr( get_theme_mod( 'themeora-img-upload-logo-width', '200' ) ); ?>px" src="<?php echo esc_url( get_theme_mod( 'themeora-img-upload-logo' ) );?>" alt="<?php the_title(); ?>" />

                    </a>

                    <br>

                    <h5 class="what-is-ywk"> Inspirama.co est une librairie en ligne. Découvrez sur ce site les livres qui ont marqué les personnalités qui vous inspirent.</h5>

            </div>



            <div class="emailpage">  

                <div id="widget-area" class="widget-area col-md-4">

                    <img src="<?php echo get_stylesheet_directory_uri() . '/img/mail.png' ; ?>" height="50" width="50" class="mail-icon" alt="Mail">

                        <br>

                        <h5 class="line-height"> Inspirama est en version Beta,<br/>partagez vos impressions sur le site : </h5><h5 class="what-is-ywk"> contact@inspirama.co </h5>

                    <?php dynamic_sidebar( 'footer-widget' ); ?>


                    <!--........................................................................
                       SOCIAL MEDIA SECTION
                    ........................................................................-->

                    <div class="social-media-container">
                        <a target="_blank" href="https://www.facebook.com/Inspirama.co" >
                            <img class="social-media-icon" alt="Facebook" title="Inspirama sur Facebook" src="<?php echo get_stylesheet_directory_uri() . '/img/social_media/official_facebook.png' ; ?>" width="40" height="40">  
                        </a>
                        <a target="_blank" href="mailto:contact@inspirama.co">
                            <img class="social-media-icon" alt="Email" title="Contacter Inspirama" src="<?php echo get_stylesheet_directory_uri() . '/img/social_media/official_email.png' ; ?>" width="40" height="40">
                        </a>
                        <a target="_blank" href="https://twitter.com/inspirama_co">
                            <img class="social-media-icon" alt="Twitter" title="Inspirama sur Twitter" src="<?php echo get_stylesheet_directory_uri() . '/img/social_media/official_twitter.png' ; ?>" width="40" height="40">
                        </a>
                    </div>

                    <!--........................................................................
                       END SOCIAL MEDIA SECTION
                    ........................................................................-->

                </div><!-- .widget-area -->

            </div>

            

            <div class="column3 col-md-4" > <!-- beginning column1-->

                    <img src="<?php echo get_stylesheet_directory_uri() . '/img/paperplane.png' ; ?>" height="40" width="40" class="newsletter-icon" alt="Mail">

                    <br>

                    <h5>Restons en contact !</h5>

                                    <!-- Begin MailChimp Signup Form -->

                    <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">

                    <style type="text/css">

                        #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif;}

                        #mc_embed_signup input.email{width:200px;border-radius: 30px 0px 0px 30px;font-family:'Source Sans Pro', sans-serif;}

                        #mc-embedded-subscribe.button{background-color: #77B8C1;border-radius: 0 30px 30px 0;font-family:'Source Sans Pro', sans-serif;max-width:60px;}

                        #mc-embedded-subscribe.button{background-color: #77B8C1;}

                        #mc_embed_signup form{padding: 0;}

                        @media (max-width: 767px) {

                        #mc_embed_signup input.email{width:200px;border-radius: 30px;font-family:'Source Sans Pro', sans-serif;}

                        #mc-embedded-subscribe.button{background-color: #77B8C1;border-radius: 30px;font-family:'Source Sans Pro', sans-serif;max-width:60px;margin-bottom: 10px;}

                        }

                        /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.

                           We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */

                    </style>

                    <div id="mc_embed_signup">

                    <form action="//yeswekant.us16.list-manage.com/subscribe/post?u=dba394d5ee8892c3589fd8431&amp;id=e58cbb8b69" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

                        <div id="mc_embed_signup_scroll">

                        

                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Mail" required>

                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_dba394d5ee8892c3589fd8431_e58cbb8b69" tabindex="-1" value=""></div>

                        <div class="clear"><input type="submit" value="YES!" name="subscribe" id="mc-embedded-subscribe" class="button"></div>

                        </div>

                    </form>

                    </div>



                    <!--End mc_embed_signup-->

                    </div>

        

        </div><!-- end row -->



        <div >

            <hr>
            <p class="about">© 2017 - Inspirama | <a href="<?php echo get_site_url(); ?>">Home</a> | <a href="<?php echo get_site_url() . '/a-propos/'; ?>">À propos</a>| <a href="<?php echo get_site_url() . '/presse/'; ?>">Presse</a>| <a href="<?php echo get_site_url() . '/mentions-legales/'; ?>">Mentions légales</a></p>

        </div>



        <?php if ( has_nav_menu( 'social_menu' ) ) : ?>

            <div class="row">

                <nav id="social-navigation" class="social-navigation" role="navigation">

                    <?php

                        // Social links navigation menu.

                        wp_nav_menu( array(

                            'theme_location' => 'social_menu',

                            'depth'          => 1,

                            'link_before'    => '<span class="screen-reader-text">',

                            'link_after'     => '</span>',

                        ) );

                    ?>

                </nav><!-- .social-navigation -->

            </div>

        <?php endif; ?>

        

        <div class="row footer-bottom">

            <?php

            $footer_text = '&copy; ' . date("Y") . ' <a href="' . esc_url( home_url() ) . '">' . get_bloginfo( 'name' ) . '</a>';

            $footer_text .= '<span class="sep"> | </span>';

            $footer_text .= get_bloginfo( "description" ); ?>

        </div>

        

    </div><!-- end container -->

</footer><!-- end full-width-container -->



    

</div><!-- end page wrapper -->



<?php wp_footer(); ?>



</body>

</html>