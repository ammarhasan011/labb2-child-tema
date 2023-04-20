<?php

// anpassning av kassan
add_filter('woocommerce_checkout_fields', 'kassa_funktion');
function kassa_funktion($fields)
{
    $fields['order']['order_comments']['placeholder'] = 'Har du ett meddelande till oss';
    return $fields;
}

// add action with hook
add_action('woocommerce_before_single_product', 'my_message');
function my_message()
{
    echo 'Tack för ditt intresse. Som en uppskattning för att du valt oss, erbjuder vi dig en rabattkod på din nästa beställning💫. Rabattkoden är "SAVE10".';
}

//remove action
//remove the sales word
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
