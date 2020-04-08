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
	'MARTTIPHPBB_WEBPUSHNOTIFICATIONS_EMAIL'				=> 'Email',
	'MARTTIPHPBB_WEBPUSHNOTIFICATIONS_USERNAME_OR_EMAIL'	=> 'Username or Email',
]);
