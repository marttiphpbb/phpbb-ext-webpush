<?php
/**
* phpBB Extension - marttiphpbb webpushnotifications
* @copyright (c) 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\webpushnotifications\acp;

use marttiphpbb\webpushnotifications\util\cnst;

class main_info
{
	function module()
	{
		return [
			'filename'	=> '\marttiphpbb\webpushnotifications\acp\main_module',
			'title'		=> cnst::L_ACP,
			'modes'		=> [			
				'select_forum'	=> [
					'title'	=> cnst::L_ACP . '_SELECT',
					'auth'	=> 'ext_marttiphpbb/webpushnotifications && acl_a_board',
					'cat'	=> [cnst::L_ACP],
				],			
			],
		];
	}
}
