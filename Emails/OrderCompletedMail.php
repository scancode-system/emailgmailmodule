<?php

namespace Modules\EmailGmail\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Modules\EmailGmail\Entities\SettingEmailGmail;


class OrderCompletedMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    private $pdf_path;
    private $setting_email_gmail;

    public function __construct($pdf_path, $setting_email_gmail)
    {
        $this->pdf_path = $pdf_path;
        $this->setting_email_gmail = $setting_email_gmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('scancode@scancode.com.br', $this->setting_email_gmail->title)->
        subject($this->setting_email_gmail->subject)->
        view('emailgmail::emails.order_completed')->
        attach($this->pdf_path);
    }
}
