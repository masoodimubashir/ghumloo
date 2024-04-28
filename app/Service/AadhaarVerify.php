<?php

namespace App\Service;

use Exception;
use Illuminate\Support\Facades\Http;

class AadhaarVerify
{
    /**
     * Create a new class instance.
     */
    protected string $key = 'mRkCFlRJFH7jl77J7PLUOhNWJunCsQxK';
    protected string $baseUrl = 'https://api-preproduction.signzy.app/api/v3/aadhaar/verify';

    public function __construct()
    {

    }

    public function setData(string $uid)
    {
        return $this->apiVerifyAadhaar($uid);
    }

    protected function apiVerifyAadhaar(string $uid)
    {

        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => $this->key,
            ])->post($this->baseUrl, [
                'uid' => $uid
            ]);

            $res = collect($response->json());

            if (isset($res['error'])) {
                $error = $res['error'];
                return [$error['message'], $error['statusCode']];
            } elseif (isset($res['result'])) {
                return $res['result'];
            } else {
                return ['Unexpected response format', 500];
            }

        } catch (Exception $e) {
            return response()->json(['error' => $e]);
        } catch (Exception $e) {
            return response()->json(['error' => 'Something went wrong'], 500);
        }

    }
}
