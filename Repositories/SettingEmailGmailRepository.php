<?php

namespace Modules\EmailGmail\Repositories;

use Modules\EmailGmail\Entities\SettingEmailGmail;


class SettingEmailGmailRepository
{
	// CREATES
	public static function init(){
		return SettingEmailGmail::create(['username' => 'scancodesistemas@gmail.com', 'password' => 'index@@12', 'title' => 'Pedido Scancode Sistemas', 'title' => 'Scancode', 'subject' => 'Detalhes do pedido', 'body' => 'Segue em anexo seu pedido em PDF.']);
	}

	// LOADS
	public static function load(){
		return $setting_pdf = SettingEmailGmail::first();
	}

	// UPDATES
	public static function update($data){
		(SettingEmailGmail::first())->update($data);
	}


	// DESTOY
	public static function end(){
		return SettingEmailGmail::truncate();
	}

}
