<?php
/*
Plugin Name: labb2-plugin
Author: Signe Hellquist
*/

//Detta skrivs ut före functions.php

//Säkerhetskontroll att det är WP som anropar en function och inte en hacker
if (!function_exists('add_action')) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

// Hakar in 'admin_notices' och visar ett välkomstmeddelande på wp-panelen
add_action('admin_notices', 'custom_welcome_message');

// Funktion som visar välkomstmeddelandet
function custom_welcome_message()
{
    $welcome_message = 'Välkommen till Wordpress! Det här är ett meddelande från Signes plugin :).';
    echo '<div class="notice notice-success is-dismissible"><p>' . $welcome_message . '</p></div>';
}
