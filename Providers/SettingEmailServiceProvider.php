<?php

namespace Modules\EmailGmail\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\EmailGmail\Repositories\SettingEmailGmailRepository;
use Illuminate\Support\Facades\Schema;


class SettingEmailServiceProvider extends ServiceProvider {

	public function boot() {
		$username = '';
		$password = '';
		if (Schema::hasTable('setting_email_gmail')) {
			$setting_email_gmail = SettingEmailGmailRepository::load();
			$username = $setting_email_gmail->username;
			$password = $setting_email_gmail->password;
		}
		
		config(['mail.username' => $username]);
		config(['mail.password' => $password]);
	}

	public function register() {
        //
	}

}
