<?php
/**
* phpBB Extension - marttiphpbb Archive Forum
* @copyright (c) 2015 - 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\webpush\util;

class cnst
{
	const FOLDER = 'marttiphpbb/webpush';
	const ID = 'marttiphpbb_webpush';
	const L = 'MARTTIPHPBB_WEBPUSH';
	const L_ACP = 'ACP_' . self::L;
	const L_MCP = 'MCP_' . self::L;
	const L_UCP = 'UCP_' . self::L;
	const L_UCP_SUBSCRPTIONS = self::L_UCP . '_SUBSCRIPTIONS';
	const TPL = '@' . self::ID . '/';
	const TABLE_SUBSCRIPTIONS = 'webpush_subscriptions';
}
