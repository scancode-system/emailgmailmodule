<?php

namespace Modules\EmailGmail\Entities;

use Illuminate\Database\Eloquent\Model;

class SettingEmailGmail extends Model
{
	protected $table = 'setting_email_gmail';
	protected $fillable = ['id', 'username', 'password', 'title', 'subject', 'body'];
}
