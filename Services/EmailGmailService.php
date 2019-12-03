<?php

namespace Modules\EmailGmail\Services;

use Illuminate\Support\Facades\Mail;

use Modules\EmailGmail\Emails\OrderCompletedMail;
use Modules\EmailGmail\Repositories\SettingEmailGmailRepository;
use Modules\Pdf\Services\PDFService;
use Modules\Order\Entities\Order;


class EmailGmailService
{

	private $pdf_path;
	private $setting_email_gmail;
	private $to;

	public function __construct($to, Order $order)
	{
		$pdf_service = new PDFService($order);
		$pdf_service->makePdf();

		$this->to = $to;
		$this->pdf_path = $pdf_service->path();
		$this->setting_email_gmail = SettingEmailGmailRepository::load();
	}


	public function send()
	{
		Mail::to($this->to)->send(new OrderCompletedMail($this->pdf_path, $this->setting_email_gmail));
	}

}