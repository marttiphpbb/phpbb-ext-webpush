<?php

/**
* phpBB Extension - marttiphpbb webpush
* @copyright (c) 2018 - 2020 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\webpush\method;

use phpbb\notification\type\type_interface;
use phpbb\notification\method\messenger_base;
use phpbb\user;
use phpbb\user_loader;
use phpbb\config\config;

class webpush extends messenger_base
{
	/** @var user */
	protected $user;

	/** @var config */
	protected $config;

	/**
	 * Notification Method email Constructor
	 *
	 * @param user_loader $user_loader
	 * @param user $user
	 * @param config $config
	 * @param string $phpbb_root_path
	 * @param string $php_ext
	 */
	public function __construct(
        user_loader $user_loader, 
        user $user, 
        config $config, 
        string $phpbb_root_path, 
        string $php_ext
    )
	{
		parent::__construct($user_loader, $phpbb_root_path, $php_ext);

		$this->user = $user;
		$this->config = $config;
	}

	/**
	* Get notification method name
	*
	* @return string
	*/
	public function get_type()
	{
		return 'notification.method.webpush';
	}

	/**
	* Is this method available for the user?
	* This is checked on the notifications options
	*
	* @param type_interface $notification_type  An optional instance of a notification type. If provided, this
	*											method additionally checks if the type provides an email template.
	* @return bool
	*/
	public function is_available(type_interface $notification_type = null)
	{
		return parent::is_available($notification_type) && $this->config['email_enable'] && $this->user->data['user_email'];
	}

	/**
	* Parse the queue and notify the users
	*/
	public function notify()
	{
		return $this->notify_using_messenger(NOTIFY_EMAIL);
	}
}
