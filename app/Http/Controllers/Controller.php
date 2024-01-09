<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    const SUCCESS = true;
    const ERROR = false;

    public static function sendResponse($message, $status = 1)
    {
        Session::flash('response_message', ['message' => $message, 'status' => $status]);
    }
}
