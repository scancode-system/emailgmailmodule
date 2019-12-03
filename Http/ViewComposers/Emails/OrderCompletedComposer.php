<?php

namespace Modules\EmailGmail\Http\ViewComposers\Emails;

use Modules\Dashboard\Services\ViewComposer\ServiceComposer;
use Modules\EmailGmail\Repositories\SettingEmailGmailRepository;


class OrderCompletedComposer extends ServiceComposer {

    private $body;

    public function assign($view){
        $this->body();
    }


    private function body(){
        $this->body = (SettingEmailGmailRepository::load())->body;
    }


    public function view($view){
        $view->with('body', $this->body);
    }

}