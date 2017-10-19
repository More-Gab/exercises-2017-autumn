<?php

require_once 'q2.php'; // just to have the class address

class delivery
{
    protected $address = null;
    protected $is_sent = false;
    protected $sent_at = null;
    protected $is_delivered = false;
    protected $delivered_at = null;

    // typehinting is optional
    public function __construct(address $address)
    {
        $this->address = $address;
    }

    public function getPrice()
    {
        if($this->address->isLocal())
        {
            return 0;
        }
        else
        {
            return 8.99;
        }
    }

    public function send()
    {
        $this->is_sent = true;
        $this->sent_at = date('Y-m-d H:i:s');
    }

    public function delivered($datetime)
    {
        $this->is_delivered = true;
        $this->delivered_at = $datetime;
    }
}

$address_array = [
    'name' => 'Rahim Henderson',
    'street' => 'Diam Rd.',
    'house_nr' => 5037,
    'city' => 'Daly City',
    'country' => 'us',
    'postal_code' => '90255'
];

$my_address = new address($address_array);
$my_delivery = new delivery($my_address);
$my_delivery->send();
$my_delivery->delivered('2017-02-20 09:00:00');

var_dump($my_delivery);