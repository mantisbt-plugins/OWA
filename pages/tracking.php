<?php
$t_site_id = plugin_config_get( 'site_id' );
$t_owa_loc = plugin_config_get( 'owa_loc' );

$owa_file = $t_owa_loc.'owa_php.php'; 
  
if (file_exists($owa_file))  {
	require_once($owa_file);
	$owa = new owa_php();
	$owa->setSiteId($t_site_id);
	$owa->trackPageView();		
} else {
		trigger_error( ERROR_CONFIG_OWA, ERROR );

}