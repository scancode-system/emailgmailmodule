<?php

namespace Modules\EmailGmail\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\EmailGmail\Services\EmailGmailService;
use Modules\Order\Entities\Order;
use \Exception;


class EmailGmailController extends Controller
{

    public function send(Request $request, Order $order)
    {
        try{
            $mail_service = new EmailGmailService($request->to, $order);
            $mail_service->send();
            return back()->with('success', 'Email disparado.');    
        } catch (Exception $e){
            return back()->withErrors(['Houve algum problema nas configurações de email.']);
        }
    }

}
