<?php

class address
{
    protected $name = null;
    protected $street = null;
    protected $house_nr = null;
    protected $city = null;
    protected $country = null;
    protected $postal_code = null;

    protected static $local_country = null;

    public static function setLocalCountry($value)
    {
        static::$local_country = $value;

        // self::$local_country = $value;

        // address::$local_country = $value;
    }

    public function __construct($array)
    {
        foreach($array as $key => $value)
        {
            $this->$key = $value;
        }

        if(isset($array['name']))
        {
            $this->name = $array['name'];
        }

        if(isset($array['street']))
        {
            $this->street = $array['street'];
        }

        if(isset($array['house_nr']))
        {
            $this->house_nr = $array['house_nr'];
        }

        if(isset($array['city']))
        {
            $this->city = $array['city'];
        }

        if(isset($array['country']))
        {
            $this->country = $array['country'];
        }

        if(isset($array['postal_code']))
        {
            $this->postal_code = $array['postal_code'];
        }
    }

    public function isLocal()
    {
        // way 1:
        return $this->country == static::$local_country;

        // way 2:
        if($this->country == static::$local_country)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}


$address_1 = new address([
    'street' => 'Schorbachstrasse',
    'city' => 'Butzbach',
    'postal_code' => '35510',
    'country' => 'de'
]);

$address_2 = new address([
    'name' => 'Rahim Henderson',
    'street' => 'Diam Rd.',
    'house_nr' => 5037,
    'city' => 'Daly City',
    'country' => 'us',
    'postal_code' => '90255'
]);

$address_3 = new address([
    'name' => 'Czech Post',
    'street' => 'Prujezdna',
    'house_nr' => 9,
    'city' => 'Praha',
    'country' => 'cz',
    'postal_code' => '22599'
]);

$address_4 = new address([
    'street' => 'Kordačova',
    'house_nr' => 2912,
    'city' => 'Kladno',
    'country' => 'cz',
    'postal_code' => '27204'
]);