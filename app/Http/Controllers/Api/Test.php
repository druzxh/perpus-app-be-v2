<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class Test extends ApiController
{
    public function test(Request $request)
    {
        $result = $this->sendResponse(1, "Test Success", []);
        return $result;
    }
    public function testError(Request $request)
    {
        $result = $this->sendError(2, "Test Error", []);
        return $result;
    }
    public function notFound(Request $request)
    {
        $result = $this->errorNotFound(2, "Test Not found", []);
        return $result;
    }
}