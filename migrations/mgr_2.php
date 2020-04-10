<?php
/**
* phpBB Extension - marttiphpbb webpush
* @copyright (c) 2018 - 2020 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\webpush\migrations;

use marttiphpbb\webpush\util\cnst;

class mgr_2 extends \phpbb\db\migration\migration
{
	static public function depends_on():array
	{
		return [
			'\marttiphpbb\webpush\migrations\mgr_1',
		];
	}

	public function update_schema():array
	{
		return [
			'add_tables'    => [
				$this->table_prefix . cnst::TABLE_SUBSCRIPTIONS => [
					'COLUMNS'	=> [
						'id'			=> ['UINT', NULL, 'auto_increment'],
						'user_id'		=> ['UINT', 0],
						'subscription'	=> ['TEXT', '{}'],
					],
					'PRIMARY_KEY' 	=> 'id',
					'KEYS'		=> [
						'cmu_user_id'	=> ['INDEX', ['user_id']],
					],
				],
			],
		];
	}

	public function revert_schema():array
	{
		return [
			'drop_tables'			=> [
				$this->table_prefix . cnst::TABLE_SUBSCRIPTIONS,
			],
	   ];
	}
}
