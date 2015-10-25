    <footer id="main-footer">
        <?php get_sidebar( 'footer' ); ?>

        <div id="footer-bottom">
            <div class="container clearfix">
            <?php

            $footerNav = wp_nav_menu(
                array(
                    'theme_location' => 'footer-menu',
                    'container'      => '',
                    'fallback_cb'    => '',
                    'menu_class'     => $menuClass,
                    'menu_id'        => 'footer-menu',
                    'echo'           => false,
                )
            );

            if ( $footerNav !== '' ) {
                print $footerNav;
            }

            ?>

            <span class="copyright">Copyright &copy; 2014 Mitcham Rehab Clinic</span>
            </div>  <!-- .container -->
        </div>
    </footer> <!-- #main-footer -->

    <?php wp_footer(); ?>
</body>
</html>