<?php
namespace ChangeThisNamespace; // change this...

class Plugin // ...don't change this.

extends \FatPanda\Illuminate\WordPress\Plugin {
	
	/**
	 * This function will be invoked on WordPress' "init" action; note
	 * that text translation features have already been configured by the
	 * baseclass: you don't need to do that yourself. 
	 * @see https://codex.wordpress.org/Plugin_API/Action_Reference/init
	 * @see https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
	 */
	function onInit()
	{

	}

	/**
	 * This function will be invoked when your plugin is activated.
	 * @see https://codex.wordpress.org/Function_Reference/register_activation_hook
	 */
	function onActivate()
	{
		
	}

	/**
	 * This function will be invoked when your plugin is deactivated.
	 * @see https://codex.wordpress.org/Function_Reference/register_deactivate_hook
	 */
	function onDeactivate()
	{

	}
	
}