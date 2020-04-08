<?php
/**
* phpBB Extension - marttiphpbb webpush
* @copyright (c) 2018 - 2020 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\webpush\acp;

use marttiphpbb\webpush\util\cnst;

class main_info
{
	function module()
	{
		return [
			'filename'	=> '\marttiphpbb\webpush\acp\main_module',
			'title'		=> cnst::L_ACP,
			'modes'		=> [			
				'select_forum'	=> [
					'title'	=> cnst::L_ACP . '_SELECT',
					'auth'	=> 'ext_marttiphpbb/webpush && acl_a_board',
					'cat'	=> [cnst::L_ACP],
				],			
			],
		];
	}
}
