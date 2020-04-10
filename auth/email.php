<?php
/**
* phpBB Extension - marttiphpbb webpush
* @copyright (c) 2018 - 2020 marttiphpbb <info@martti.be>
* @license GNU General Public License, version 2 (GPL-2.0)
*/

namespace marttiphpbb\webpush\auth;

use marttiphpbb\webpush\auth\base;

class email extends base
{
	public function login($email, $password)
	{
		$listener = $this->phpbb_container->get('marttiphpbb.webpush.listener');

		if ($listener->is_admin_login())
		{
			return parent::login($email, $password);
		}

        if (!$email)
        {
			error_log('no email');
	
            return [
				'status'	=> LOGIN_ERROR_USERNAME,
				'error_msg'	=> 'MARTTIPHPBB_WEBPUSH_ERROR_NO_EMAIL',
				'user_row'	=> ['user_id' => ANONYMOUS],
            ];
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
			error_log('no valid email: ' . $email);

            return [
				'status'	=> LOGIN_ERROR_USERNAME,
				'error_msg'	=> 'MARTTIPHPBB_WEBPUSH_ERROR_NO_VALID_EMAIL',
				'user_row'	=> ['user_id' => ANONYMOUS],
				'marttiphpbb_webpush_err_sprintf' 
					=> $this->get_email_err_sprintf_args($email),
            ];
		}
		
		return parent::login_by_email($email, $password);
	}
}
