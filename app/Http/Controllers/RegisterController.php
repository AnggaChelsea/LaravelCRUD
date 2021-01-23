<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    function post(request $request)
    {
        $register = new Register();
        $register->name = $request->name;
        $register->email = $request->email;
        $register->password = $request->password;

        $register->save();
        return response()->json(
            [
                "message"=>"Register Successfully",
                "data"=>$register
            ]
        );
    }
}
