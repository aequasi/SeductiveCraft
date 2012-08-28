<?php
if( $_SERVER[ 'REMOTE_ADDR' ] != '75.85.190.223' )
{
	$url = '/forum' . $_SERVER[ 'REQUEST_URI' ];
	header( 'Location: /forum' . $_SERVER[ 'REQUEST_URI' ] );
}
else
{
	/**
	 * This makes our life easier when dealing with paths. Everything is relative
	 * to the application root now.
	 */
	chdir(dirname(__DIR__));

	// Setup autoloading
	include 'init_autoloader.php';

	// Run the application!
	Zend\Mvc\Application::init(include 'config/application.config.php')->run();
}
