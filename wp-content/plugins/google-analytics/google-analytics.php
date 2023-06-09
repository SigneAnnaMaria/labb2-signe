<?php
/*
Plugin Name: Google Analytics
Description: Adds Google Analytics tracking code to your WordPress site.
Version: 1.0
Author: Signe Hellquist
*/

//Säkerhetskontroll att det är WP som anropar en funktion och inte en utomstående
if (!function_exists('add_action')) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

// Lägger till Google Analytics tracking code till wp_footer
function google_analytics_tracking_code()
{
    $tracking_id = 'UA-XXXXXXXXX-X'; // Ersätt med egen Google Analytics tracking ID
?>
    <!-- Google Analytics tracking code -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo esc_attr($tracking_id); ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', '<?php echo esc_attr($tracking_id); ?>');
    </script>
<?php
}
add_action('wp_footer', 'google_analytics_tracking_code');
