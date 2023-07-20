<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $params = ['name', 'email', 'password', 're_password'];
        
        $this->validate_request($request, $params);

        return [
            'success' => true,
            'message' => 'Hello from signup',
        ];
    }

    /**
     * Validate the request
     * 
     * @param Request $request
     * @param array $params
     * 
     * @return void
     */
    private function validate_request(Request $request, $params)
    {
        foreach($request->all() as $key=>$value) {
            if(!in_array($key, $params)) {
                Log::alert('Invalid parameter: ' . $key);
                return;
            }
        }
    }
}
