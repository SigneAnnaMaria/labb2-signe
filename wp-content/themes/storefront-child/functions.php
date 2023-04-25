<?php

//Lägger till en skyndande text brevid Lägg i varukorg-knapp
add_action('woocommerce_after_add_to_cart_button', 'hurry_buy');

function hurry_buy()
{
    echo 'Köp! Skynda dig innan den tar slut!';
}


add_action('after_setup_theme', 'remove_result', 99);


//Tar bort hur många siffer-resultat som visas
function remove_result()
{
    remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
    remove_action('woocommerce_after_shop_loop', 'woocommerce_result_count', 20);
}
