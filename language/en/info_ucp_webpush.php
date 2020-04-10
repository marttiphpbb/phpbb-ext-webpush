<?php

/**
* phpBB Extension - marttiphpbb webpush
* @copyright (c) 2018 - 2020 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'UCP_MARTTIPHPBB_WEBPUSH'
	=> 'Web push',
	'UCP_MARTTIPHPBB_WEBPUSH_SUBSCRIPTIONS'
	=> 'Web push subscriptions',
	'UCP_MARTTIPHPBB_WEBPUSH_ENABLE_OR_DISABLE'
	=> 'Web push en-/disable',
]);
