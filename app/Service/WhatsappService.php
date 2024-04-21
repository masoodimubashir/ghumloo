<?php

namespace App\Service;


use Exception;
use GuzzleHttp\Promise\PromiseInterface;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class WhatsappService
{
    /**
     * Create a new class instance.
     */

    protected string $key = '37a0a6d2c9b06be6dfb5d488af340337';
    protected string $baseUrl = 'https://api.bulkcampaigns.com/api/wapi?apikey=';

    public function __construct()
    {
    }

    public function setData($mobile, $message): PromiseInterface|string|Response
    {
        return $this->sendBulkMessage($mobile, $message);
    }

    protected function sendBulkMessage($mobile, $message): PromiseInterface|string|Response
    {

        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Cookie' => 'PHPSESSID=n89rhn630jdia7jkcrm4736ueu',
            ])->get($this->baseUrl . 'json=true&apikey=' . $this->key . '&mobile=' . $mobile . '&msg=' . urlencode($message));

            return collect($response->json());

        } catch (Exception $e) {
            return 'something went wrong';
        }

    }


}


//$curl = curl_init();
//curl_setopt_array($curl, array(
//    CURLOPT_URL => 'https://api.bulkcampaigns.com/api/wapi?apikey=' . $this->key . '&mobile=' . $mobile . '&msg=' . urlencode($message),
//    CURLOPT_RETURNTRANSFER => true,
//    CURLOPT_ENCODING => '',
//    CURLOPT_MAXREDIRS => 10,
//    CURLOPT_TIMEOUT => 0,
//    CURLOPT_FOLLOWLOCATION => true,
//    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//    CURLOPT_CUSTOMREQUEST => 'GET',
//    CURLOPT_HTTPHEADER => array(
//        'Cookie: PHPSESSID=n89rhn630jdia7jkcrm4736ueu'
//    ),
//));
//$response = curl_exec($curl);
//curl_close($curl);
//return $response;
