<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class ProfileController extends Controller
{

    public function index($id)
    {
        
        $name = "Donald Trump";
        $age = "75";

        
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = request()->getHost(); 
        $secure = false;
        $httpOnly = true;

        
        $cookie = cookie($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);

        
        return response()->json($data, 200)->cookie($cookie);
    }
}
