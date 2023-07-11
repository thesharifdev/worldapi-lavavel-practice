<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signup(){
        return [
            'success' => true,
            'message' => 'Hello from signup',
        ];
    }
}
