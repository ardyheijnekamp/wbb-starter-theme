<?php if ( ! defined ( 'WPINC' ) )
{
	header ( 'HTTP/1.0 404 Not Found' , TRUE , 404 );
	die( "404 Not Found" );
}

/*
| ----------------------------------------------------------------------------------------------------------------------
| Required by WordPress.
| ----------------------------------------------------------------------------------------------------------------------
| Keep this file clean and only use it for requires.
|
*/

if ( ! defined ( '__DIR__' ) )
{
	define( '__DIR__' , dirname ( __FILE__ ) );
}

/**********************************************************************************************************************
 * Load Theme extra libraries ....
 *********************************************************************************************************************/
require_once locate_template ( 'config/theme-lib-includes.php' );

/**********************************************************************************************************************
 * Load system helpers ..
 *********************************************************************************************************************/
require_once locate_template ( 'system/WBB-Core/WBB-System-helpers.php' );

/**********************************************************************************************************************
 * Load Theme Configuration
 *********************************************************************************************************************/
require_once locate_template ( 'config/theme-config.php' );

/**********************************************************************************************************************
 * Load Theme Scripts
 *********************************************************************************************************************/
require_once locate_template ( 'config/theme-scripts.php' );

/**********************************************************************************************************************
 * Load Theme Core Functions
 *********************************************************************************************************************/
require_once locate_template ( 'system/WBB-Core/WBB-System-Core.php' );

WBB_System_Core::init ();