<?php

// BAD WAY

interface Gateway
{
    // Tokenize
    public function setConfig();

    // Data that will be send
    public function setDataRequest();

    // Credit card payment method
    public function creditCardMethod();

    // Baloto payment method
    public function balotoMethod();

    // Gana payment method
    public function ganaMethod();

    // Transfer paymethod
    public function transferMethod();

    // Email paymethod
    public function emailMethod();

    // Set payment method
    public function setPaymentMethod();

    // Send request
    public function sendRequest();

}

class epaycoGateWay implements Gateway{

    const EPAYCO_GATEWAY = 'EPAYCO';
    private $api_key;
    private $private_key;
    private $password;
    public $payment_method;
    private $payment_info;
    private $data_request;

    /**
     * Set credentials for access to api
     *
     * @return array
     */
    public function setConfig()
    {
            $this->api_key = '23423434523423';
            $this->private_key = '4234fd3423423';
            $this->password = 'sdfsdfsdsfm';
    }

    public function setDataRequest()
    {
        $this->data_request = array(
            'PAYMENT_GATEWAY' => self::EPAYCO_GATEWAY,
            'api_key' => $this->api_key,
            'private_key' => $this->private_key,
            'password' => $this->password,
            'payment_method' => $this->payment_method,
            'payment_info' => $this->payment_info,
        );
    }

    public function creditCardMethod()
    {
        $this->payment_info = array(
            'method' => $this->payment_method,
            'customer' => 'Customer_name',
        );
    }

    public function balotoMethod()
    {
        $this->payment_info = array(
            'method' => $this->payment_method,
            'customer' => 'Customer_name',
        );
    }

    public function ganaMethod()
    {
        $this->payment_info = array(
            'method' => $this->payment_method,
            'customer' => 'Customer_name',
        );
    }

    public function transferMethod()
    {
        $this->payment_info = array(
            'method' => $this->payment_method,
            'customer' => 'Customer_name',
        );
    }

    public function emailMethod()
    {
        $this->payment_info = array(
            'method' => $this->payment_method,
            'customer' => 'Customer_name',
        );
    }

    public function sendRequest()
    {
        $endpoint = new endPointPayments();
        $endpoint->epaycoEndPoint($this->data_request);
    }

    public function setPaymentMethod()
    {
        switch ($this->payment_method) {
            case 'credit_card':
                $this->creditCardMethod();
                break;

            case 'baloto':
                $this->balotoMethod();
                break;

            case 'gana':
                $this->balotoMethod();
                break;

            case 'transfer':
                $this->balotoMethod();

        }
    }
}

class payuGateWay implements Gateway{
    const PAYU_GATEWAY = 'PAYÚ';
    private $public_key;
    private $pass;
    public $payment_method;
    private $payment_info;
    private $data_request;


    public function setConfig()
    {
            $this->public_key = '4553453';
            $this->pass = '3242342342';
    }

    public function setDataRequest()
    {
        $this->data_request = array(
            'PAYMENT_GATEWAY' => self::PAYU_GATEWAY,
            'public_key' => $this->public_key,
            'pass' => $this->pass,
            'payment_method' => $this->payment_method,
            'payment_info' => $this->payment_info,
        );
    }

    public function creditCardMethod()
    {
        $this->payment_info = array(
            'method' => $this->payment_method,
            'customer' => 'Customer_name',
        );
    }

    public function balotoMethod()
    {
        $this->payment_info = array(
            'method' => $this->payment_method,
            'customer' => 'Customer_name',
        );
    }

    public function ganaMethod()
    {
        $this->payment_info = array(
            'method' => $this->payment_method,
            'customer' => 'Customer_name',
        );
    }

    public function transferMethod()
    {
        $this->payment_info = array(
            'method' => $this->payment_method,
            'customer' => 'Customer_name',
        );
    }

    public function emailMethod()
    {
        $this->payment_info = array(
            'method' => $this->payment_method,
            'customer' => 'Customer_name',
        );
    }

    public function setPaymentMethod()
    {
        switch ($this->payment_method){
            case 'credit_card':
                $this->creditCardMethod();
                break;

            case 'baloto':
                $this->balotoMethod();
                break;

            case 'gana':
                $this->balotoMethod();
                break;

            case 'transfer':
                $this->balotoMethod();
                break;
        }
    }

    public function sendRequest()
    {
        $endpoint = new endPointPayments();
        $endpoint->payuEndPoint($this->data_request);
    }
}

class payPalGateWay implements Gateway{
    const PAYPAL__GATEWAY = 'PAYPAL';
    private $public_key;
    private $email_login;
    private $pass;
    public $payment_method;
    private $payment_info;
    private $data_request;


    public function setConfig()
    {
        $this->public_key = '4553453';
        $this->pass = '3242342342';
    }

    public function setDataRequest()
    {
        $this->data_request = array(
            'PAYMENT_GATEWAY' => self::PAYPAL__GATEWAY,
            'public_key' => $this->public_key,
            'email_login' => $this->email_login,
            'pass' => $this->pass,
            'payment_method' => $this->payment_method,
            'payment_info' => $this->payment_info,
        );
    }

    public function creditCardMethod()
    {
        $this->payment_info = array(
            'method' => $this->payment_method,
            'customer' => 'Customer_name',
        );
    }

    public function balotoMethod()
    {

    }

    public function ganaMethod()
    {

    }

    public function transferMethod()
    {

    }

    public function emailMethod()
    {
        $this->payment_info = array(
            'method' => $this->payment_method,
            'customer' => 'Customer_name',
        );
    }

    public function setPaymentMethod()
    {
        switch ($this->payment_method){
            case 'email':
                $this->emailMethod();
                break;
        }
    }

    public function sendRequest()
    {
        $endpoint = new endPointPayments();
        $endpoint->payuEndPoint($this->data_request);
    }

}

// For a beauty print_r
echo '<pre>';

//Epayco
$epayco = new epaycoGateWay();

$epayco->setConfig();
$epayco->payment_method = 'credit_card';
$epayco->setPaymentMethod();
$epayco->setDataRequest();
$epayco->sendRequest();

//Payú

$payu = new payuGateWay();

$payu->setConfig();
$payu->payment_method = 'gana';
$payu->setPaymentMethod();
$payu->setDataRequest();
$payu->sendRequest();

//PayPal

$paypal = new payPalGateWay();

$paypal->setConfig();
$paypal->payment_method = 'email';
$paypal->setPaymentMethod();
$paypal->setDataRequest();
$paypal->sendRequest();

// Payments - Fake Endpoint
class endPointPayments{

    /**
     * Endpoint for epayco
     *
     * @param $config|Array
     */
    function epaycoEndPoint($config){

        print_r($config);
    }

    /**
     * @param $config|Array
     */
    function payuEndPoint($config){
        print_r($config);
    }

    /**
     * @param $config|Array
     */
    function paypalEndPoint($config){
        print_r($config);
    }
}

// GOOD WAY
interface Main_Gateway
{
    // Tokenize
    public function setConfig();

    // Data that will be send
    public function setDataRequest();

    // Set payment method
    public function setPaymentMethod();

    // Send request
    public function sendRequest();

}

interface Ext_Gateway
{
    // Email paymethod
    public function emailMethod();
}

class goodPayPalGateWay implements Main_Gateway, Ext_Gateway{
    const PAYPAL__GATEWAY = 'GOOD_PAYPAL';
    private $public_key;
    private $email_login;
    private $pass;
    public $payment_method;
    private $payment_info;
    private $data_request;


    public function setConfig()
    {
        $this->public_key = '4553453';
        $this->pass = '3242342342';
    }

    public function setDataRequest()
    {
        $this->data_request = array(
            'PAYMENT_GATEWAY' => self::PAYPAL__GATEWAY,
            'public_key' => $this->public_key,
            'email_login' => $this->email_login,
            'pass' => $this->pass,
            'payment_method' => $this->payment_method,
            'payment_info' => $this->payment_info,
        );
    }

    public function emailMethod()
    {
        $this->payment_info = array(
            'method' => $this->payment_method,
            'customer' => 'Customer_name',
        );
    }

    public function setPaymentMethod()
    {
        switch ($this->payment_method){
            case 'email':
                $this->emailMethod();
                break;
        }
    }

    public function sendRequest()
    {
        $endpoint = new endPointPayments();
        $endpoint->payuEndPoint($this->data_request);
    }

}

//Good PayPal Implements Two interfaces

$good_paypal = new goodPayPalGateWay();

$good_paypal->setConfig();
$good_paypal->payment_method = 'email';
$good_paypal->setPaymentMethod();
$good_paypal->setDataRequest();
$good_paypal->sendRequest();

