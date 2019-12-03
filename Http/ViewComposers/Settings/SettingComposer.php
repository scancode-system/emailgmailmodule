<?php

namespace Modules\EmailGmail\Http\ViewComposers\Settings;

use Modules\Dashboard\Services\ViewComposer\ServiceComposer;
use Modules\EmailGmail\Repositories\SettingEmailGmailRepository;


class SettingComposer extends ServiceComposer {

    private $setting_email_gmail;

    public function assign($view){
        $this->settingEmailGmail();
    }


    private function settingEmailGmail(){
        $this->setting_email_gmail = SettingEmailGmailRepository::load();
    }


    public function view($view){
        $view->with('setting_email_gmail', $this->setting_email_gmail);
    }

}