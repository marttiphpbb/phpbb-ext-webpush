<?php
/**
* phpBB Extension - marttiphpbb webpush
* @copyright (c) 2018 - 2020 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\webpush\ucp;

use marttiphpbb\webpush\util\cnst;

class main_info
{
	function module()
	{
		return [
			'filename'	=> '\marttiphpbb\webpush\ucp\main_module',
			'title'		=> cnst::L_UCP . '_SUBSCRIPTIONS' ,
			'modes'		=> [
				'webpush_subscriptions'	=> [
					'title'	=> cnst::L_UCP . '_SUBSCRIPTIONS',
					'auth'	=> 'ext_marttiphpbb/webpush && acl_u_',
					'cat'	=> ['UCP_PREFS'],
				],
			],
		];
	}
}
