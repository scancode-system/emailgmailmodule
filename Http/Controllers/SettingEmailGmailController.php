<?php

namespace Modules\EmailGmail\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\EmailGmail\Repositories\SettingEmailGmailRepository;

class SettingEmailGmailController extends Controller
{

    public function update(Request $request)
    {
        SettingEmailGmailRepository::update($request->all());
        return back()->with('success', 'Configuração do Email atualizado.');
    }


}
