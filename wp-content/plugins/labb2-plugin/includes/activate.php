<?php
register_activation_hook(__FILE__, 's_plugin_activation');
?>

<!-- //Funkar ej nedan -->
function(){
if ( version_compare (getblog_info ('version'), '5.0', '<') ) }