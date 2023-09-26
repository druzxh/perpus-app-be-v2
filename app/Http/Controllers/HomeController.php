<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function noAuth()
    {
        return response()->json([
            'code' => 3,
            'status' => "Error",
            'message' => 'Not Authenticate.',
        ], 401);
    }

    public function notFound()
    {
        return response()->json([
            'code' => 4,
            'status' => "Error",
            'message' => 'Not Found.',
        ], 404);
    }

    public function noRoute()
    {
        return response()->json([
            'code' => 5,
            'status' => "Error",
            'message' => 'Bad request',
        ], 400);
    }
}