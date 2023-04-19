<?php
/*
Plugin Name: labb2-plugin
Author: Signe Hellquist
*/

//Säkerhetskontroll att det är WP som anropar en function och inte en hacker
if (!function_exists('add_action')) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

//Setup(Aktivering)
//Includes
//Krokar(Hooks)
//Kortkoder(Shortcodes)






//Skrivs ut före functions.php, före allt 
echo 'Mitt första tillägg';


//Fungerar ej nedan, ska ta en funktion från functions.php i mitt tema
add_action('wp_footer', 'runfunktion');

function runfunktion()
{
    info_funktion();
}
