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
	'UCP_MARTTIPHPBB_WEBPUSH_SUBSCRIPTIONS'
	=> 'Web push subscriptions',
	'UCP_MARTTIPHPBB_WEBPUSH_EXPLAIN'
	=> '<strong>Web Push Notifications</strong> or
	<strong>Browser Notifications</strong> are
	clickable rich content messages sent to your
	device by a website or a web app.
	<strong>Web Push notifications</strong> can be delivered to
	your device, mobile or desktop, even when you
	are not on the website.',
	'UCP_MARTTIPHPBB_WEBPUSH_SUBSCRIBE_EXPLAIN'
	=> 'You can here enable your browser for receiving
	<strong>Web Push Notifications</strong> from the board. Your browser
	will then ask to confirm the subscription. You can
	always later disable the <strong>Web Push Notifications</strong> here
	in the User Control Panel. In the UCP Notification Settings
	you can define for which events you wish
	to receive <strong>Web Push Notifications</strong>.',
	'UCP_MARTTIPHPBB_WEBPUSH_ENABLE_OR_DISABLE'
	=> 'Web push en-/disable',
]);
