<?php
/**
* phpBB Extension - marttiphpbb webpushnotifications
* @copyright (c) 2018 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\webpushnotifications\console;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use phpbb\console\command\command;
use phpbb\user;
use phpbb\db\driver\factory as db;

class info extends command
{
	/** @var db */
	protected $db;

	public function __construct(user $user, db $db)
	{
		$this->db = $db;
		parent::__construct($user);
	}

	protected function configure()
	{
		$this
			->setName('ext-webpushnotifications:info')
			->setDescription('show conflicting user email and username information.')
			->setHelp('Shows duplicate emails and non matching email-usernames of users.')
			->addOption('number', 'n', InputOption::VALUE_OPTIONAL, 'Maximum number of results shown (defaults to 50).', 50)
		;
	}

	/**
	* @param InputInterface
	* @param OutputInterface
	* @return void
	*/
	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$io = new SymfonyStyle($input, $output);

		$number = $input->getOption('number');

		if (!ctype_digit((string) $number))
		{
			$io->writeln('The number option can only be a number.');
			return;
		}

	}
}
