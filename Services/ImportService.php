<?php

namespace Modules\EmailGmail\Services;

use Modules\EmailGmail\Repositories\SettingEmailGmailRepository;

class ImportService {

    public function setting($data)
    {
        SettingEmailGmailRepository::update($data);
    }

    public function records()
    {

    }

}
