<?php
 
 namespace App\Helpers;

 class apiFormatter {
    protected static $response = [
        'code' =>  NULL,
        'message' => NULL,
        'data' => NULL,
    ];

    public static function createApi($code = NULL, $message = NULL, $data = NULL) {
        self::$response['code'] = $code;
        self::$response['message'] = $message;
        self::$response['data'] = $data;
        return response()->json(self::$response, self::$response['code']);
    }
 }
 
 ?>