<?php

namespace Modules\EmailGmail\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\EmailGmail\Repositories\SettingEmailGmailRepository;


class SettingEmailServiceProvider extends ServiceProvider {

	public function boot() {
		$setting_email_gmail = SettingEmailGmailRepository::load();

		config(['mail.username' => $setting_email_gmail->username]);
        config(['mail.password' => $setting_email_gmail->password]);
	}

	public function register() {
        //
	}

}
