<?php

namespace App\Mail;

use App\Models\Product;
use App\Models\Sku;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendSubscriptionMessage extends Mailable
{
    use Queueable, SerializesModels;

    // protected $product;

    /**
     * SendSubscriptionMessage constructor.
     * @param Product $product
     */
    /*public function __construct(Product $product)
    {
        $this->product = $product;
    }*/

    /**
     * Build the message.
     *
     * @return $this
     */
    /*public function build()
    {
        return $this->view('mail.subscription', ['product' => $this->product]);
    }*/

    protected $sku;

    /**
     * SendSubscriptionMessage constructor.
     * @param Sku $sku
     */
    public function __construct(Sku $sku)
    {
        $this->sku = $sku;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.subscription', ['product' => $this->sku]);
    }
}
