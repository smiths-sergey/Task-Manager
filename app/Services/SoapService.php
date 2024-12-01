<?php

namespace App\Services;
use SoapClient;
class SoapService
{
    private $client;

    public function __construct()
    {
        $wsdl = 'http://www.dataaccess.com/webservicesserver/NumberConversion.wso?WSDL'; // URL внешнего WSDL-файла

        $this->client = new SoapClient($wsdl, [
            'trace' => true,
            'exceptions' => true,
            'stream_context' => stream_context_create([
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                ],
            ]),
        ]);

    }


    public function numberToWords(int $number): string
    {
        $params = [
            'ubiNum' => $number,
        ];


        $response = $this->client->__soapCall('NumberToWords', [$params]);
        return $response->NumberToWordsResult;
    }
}
