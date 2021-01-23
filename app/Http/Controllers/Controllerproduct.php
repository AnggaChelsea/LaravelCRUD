<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controllerproduct extends Controller
{
     function post()
    {
        return response()->json(
            [
                "message"=>"Post method succes"
            ]
        );
    }
    function get()
    {
       return response()->json(
            [
                "message"=>"method succes"
            ]
        );
    }
    function put($id)
    {
        return response()->json(
            [
                "message"=>"method succes". $id
            ]
        );
    }
    function delete($id)
    {
        return response()->json(
            [
                "message"=>"method succes".$id
            ]
        );
    }
}
