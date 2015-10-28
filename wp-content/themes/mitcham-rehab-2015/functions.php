<?php

register_nav_menus(
    array(
        'footer-menu' => __( 'Footer Menu', 'Divi' ),
    )
);

add_action('wp_head', 'mitcham_rehab_wp_head');

function mitcham_rehab_wp_head()
{
    print '<link href="http://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet" type="text/css">' . PHP_EOL;
    print '<script src="https://use.typekit.net/vls2los.js"></script>' . PHP_EOL;
    print '<script>try{Typekit.load({ async: true });}catch(e){}</script>' . PHP_EOL;
}
