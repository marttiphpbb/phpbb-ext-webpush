<?php
/**
* phpBB Extension - marttiphpbb webpushnotifications
* @copyright (c) 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\webpushnotifications\migrations;
use marttiphpbb\webpushnotifications\util\cnst;

class v_0_1_0 extends \phpbb\db\migration\migration
{
	public function update_data()
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
					'module_basename'	=> '\marttiphpbb\webpushnotifications\acp\main_module',
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
