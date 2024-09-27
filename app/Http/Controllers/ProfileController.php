<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request, $id)
    {
        $name = "Donal Trump";
        $age = "75";

        $data = [
            "id" => $id,
            "name" => $name,
            "age" => $age,
        ];

        // Define cookie parameters
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;


        $cookie = cookie($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);


        return response()->json($data, 200)->cookie($cookie);
}
}
