<?php
/**
* phpBB Extension - marttiphpbb webpush
* @copyright (c) 2018 - 2020 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\webpush\migrations;

use marttiphpbb\webpush\util\cnst;

class mgr_1 extends \phpbb\db\migration\migration
{
	static public function depends_on():array
	{
		return [
			'\marttiphpbb\calendarmonoinput\migrations\mgr_1',
		];
	}

	public function update_data():array
	{
		return [
			['config_text.add', [cnst::ID, serialize([])]],

			['module.add', [
				'acp',
				'ACP_CAT_DOT_MODS',
				cnst::L_ACP,
			]],

			['module.add', [
				'acp',
				cnst::L_ACP,
				[
					'module_basename'	=> '\marttiphpbb\webpush\acp\main_module',
					'modes'				=> [
						'select_forum',
					],
				],
			]],
		];
	}

	public function update_schema()
	{
		return [
			'add_columns'        => [
				$this->table_prefix . 'topics' => [
					cnst::FROM_FORUM_ID_COLUMN  => ['UINT', NULL],
				],
			],
		];
	}

	public function revert_schema()
	{
		return [
			'drop_columns'        => [
				$this->table_prefix . 'topics'	=> [
					cnst::FROM_FORUM_ID_COLUMN,
				],
			],
		];
	}
}
