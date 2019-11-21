<?php

use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\RequestOptions;
use Illuminate\Support\Facades\Crypt;

/**
 *
 * 1) Function for sending Api Requets Using GuzzleHttp Library
 *
 */
if (!function_exists('sendRequest')) {
	function sendRequest($method, $url, $data = [], $urlencoded = false, $code = null){
        if(Session::get('authentication')){
            $authData = Session::get('authentication');
            $data['token'] = $authData->access_token;
            $data['id_token'] = $authData->id_token;
        }

        $data['auth_name'] = env('Auth_Name');
	    $requestArray = [
            'method' => $method,
            'params' => [
                // 'auth' => [Crypt::encryptString(env('APP_MIDDLEWARE_CLIENT_ID')), Crypt::encryptString(env('APP_MIDDLEWARE_CLIENT_SECRET'))],
                'auth' => ['eyJpdiI6InNYMjFaV3dmUjZGWjVyUE1XK1FyWWc9PSIsInZhbHVlIjoiNisreU1acUNqR21Qc3dYXC9od3M1QjZXTWhieURNajlMYXVpMWxaTExnaDJRNHY1QTcxTE5tT28xSzlCb3dxN0giLCJtYWMiOiI0MzgyY2M1N2IxYWIwNWY1MDBhOTljOGFjMzIyODlmNWFiODQzNjI2NzE2ZmVlODgzZGY5YzkyZjI0N2M3MWQ5In0=', 'eyJpdiI6IndQS3J1TnYrckhzaDhhdkEwK1RjU2c9PSIsInZhbHVlIjoiWGo5Z3FCaU1qaWtsdHBmV1wva2kzTmtld2hNelBYSlFLeU9JMGk2eG00MzF4VFRCR0tHUXVuZFUxc2VqZzZUaWciLCJtYWMiOiIwYjlkNDE3NTZiN2UyNWE4YzE0ZTgwNjU2Mzg4YjM4MTJhMzEwN2ZkNDJlNjkwOTVjZjRkZDY1YjIzOTlhMGIyIn0='],
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json'
                ],
                'json' => $data
            ],
            'urlencoded' => $urlencoded,
        ];
        try {
            $client = new Client();
            $response = $client->request($requestArray['method'], env('XOX_MIDDLEWARE_PATH').$url, $requestArray['params']);
            $responseBody = json_decode((string) $response->getBody());
            // if(!$responseBody->status){

            // }
            return $responseBody;
        } catch (Exception $e) {
            return ['status' => false, 'data' => $e->getMessage()];
        }
	}
}

/**
 *
 * 2) Function for Sending Email
 *
 */
if (!function_exists('sendEmail')) {
    function sendEmail($data = []){
        Mail::send('email.custome_email_template', $data, function ($message) use ($data) {
            $message->from(env('COMPANY_EMAIL_ADDRESS'), 'XOX Mobile (User Feedback)');
            $message->to($data['email']);
            $message->subject($data['subject']);
        });
    }
}

/**
 *
 * 3) Function for Handling Response Data (Success and Error)
 *
 */
if (!function_exists('responseRecord')) {
    function responseRecord($responseData){
        /**

            TODO:
            - 1) Add Config to list the error code with the message.
            - 2) From the List get Message details and error Details.
            - 3) Get Record Listed.

         */
        try {
            // Config Data
        } catch (Exception $e) {

        }
    }
}
