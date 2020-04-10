<?php
/**
* phpBB Extension - marttiphpbb webpush
* @copyright (c) 2018 - 2020 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\webpush\migrations;

use marttiphpbb\webpush\util\cnst;

class mgr_3 extends \phpbb\db\migration\migration
{
	static public function depends_on():array
	{
		return [
			'\marttiphpbb\webpush\migrations\mgr_2',
		];
	}

	public function update_data():array
	{
		return [
			['module.add', [
				'ucp',
				'UCP_PREFS',
				cnst::L_UCP_SUBSCRPTIONS,
			]],

			['module.add', [
				'ucp',
				cnst::L_UCP_SUBSCRPTIONS,
				[
					'module_basename'	=> '\marttiphpbb\webpush\ucp\main_module',
					'modes'				=> [
						'webpush_subscriptions',
					],
				],
			]],
		];
	}
}
