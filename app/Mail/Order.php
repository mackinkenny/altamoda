<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Order extends Mailable
{
    use Queueable, SerializesModels;

    public $transId;
    public $number;
    public $amount;
    public $cardBrand;
    public $card;
    public $authCode;
    public $date;

    /**
     * Create a new message instance.
     *
     * @param $transId
     * @param $number
     * @param $amount
     * @param $cardBrand
     * @param $card
     * @param $authCode
     * @param $date
     */
    public function __construct($transId, $number, $amount, $cardBrand, $card, $authCode, $date)
    {
        $this->transId = $transId;
        $this->number = $number;
        $this->amount = $amount;
        $this->cardBrand = $cardBrand;
        $this->card = $card;
        $this->authCode = $authCode;
        $this->date = $date;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.order');
    }
}
