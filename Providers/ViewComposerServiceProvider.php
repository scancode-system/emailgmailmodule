<?php

namespace Modules\EmailGmail\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Modules\EmailGmail\Http\ViewComposers\Settings\SettingComposer;
use Modules\EmailGmail\Http\ViewComposers\Emails\OrderCompletedComposer;


class ViewComposerServiceProvider extends ServiceProvider {

	public function boot() {
		// setting
		View::composer('emailgmail::loader.settings.body', SettingComposer::class);

		// emails
		View::composer('emailgmail::emails.order_completed', OrderCompletedComposer::class);
	}

	public function register() {
        //
	}

}
