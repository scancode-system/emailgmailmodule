<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\EmailGmail\Repositories\SettingEmailGmailRepository;

class InsertSettingEmailGmailRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        SettingEmailGmailRepository::init();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        SettingEmailGmailRepository::end();
    }
}
