<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function sendResponse($code, $status, $data = array())
    {
        return response()->json([
            'code' => $code,
            'success' => "Success",
            'message' => $status,
            'data' => $this->normalize_result($data),
        ], 200);
    }
    public function sendError($code, $status, $errorMessages = array())
    {
        $response = [
            'code' => $code,
            'status' => "Error",
            'message' => $status,
        ];

        $response['data'] = $errorMessages;

        return response()->json($response, 400);
    }
    public function errorAuth($code, $status, $errorMessages = array())
    {
        $response = [
            'code' => $code,
            'status' => "Error",
            'message' => $status,
        ];

        $response['data'] = $errorMessages;

        return response()->json($response, 403);
    }
    public function errorNotFound($code, $status, $errorMessages = array())
    {
        $response = [
            'code' => $code,
            'Status' => "Error",
            'message' => $status,
        ];

        $response['data'] = $errorMessages;

        return response()->json($response, 404);
    }
    public function errorEmpty($code, $status, $errorMessages = array())
    {
        $response = [
            'code' => $code,
            'Status' => "Error",
            'message' => $status,
        ];

        $response['data'] = $errorMessages;

        return response()->json($response, 401);
    }

    public function noAuth()
    {
        $response = [
            'code' => 3,
            'status' => "Error",
            'message' => 'Unauthenticated',
        ];

        return response()->json($response, 401);
    }

    public function normalize_result($result)
    {

        $result = json_decode(json_encode($result), true);

        array_walk_recursive($result, function (&$value) {
            $value = !is_null($value) ? $value : "";
        });

        return $result;
    }
}