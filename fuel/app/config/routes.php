<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'admin/client/:url/(:any)' => 'admin/client/$2',
	'admin/client/:url'        => 'admin/client/view'
);