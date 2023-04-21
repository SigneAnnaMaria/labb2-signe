<?php

//Lägger till en skyndande text ovanför köp knapp
add_action('woocommerce_single_variation', 'hurry_buy');

function hurry_buy()
{
    echo 'Köp! Skynda dig innan den tar slut!';
}


add_action('after_setup_theme', 'remove_result', 99);


//Tar bort hur många resultat som visas
function remove_result()
{
    remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
    remove_action('woocommerce_after_shop_loop', 'woocommerce_result_count', 20);
}
//Tar bort produktbild 
// remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail');

// remove_action('woocommerce_after_shop_loop
// ', 'storefront_sorting_wrapper');
