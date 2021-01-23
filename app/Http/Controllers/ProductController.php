<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function post(Request $request)
    {

        //elequent post data ke database
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->active = $request->active;
        $product->description = $request->description;

        $product->save();
        return response()->json(
            [
                "message"=>"Post method succes",
                "data"=>$product
            ]
        );
    }
    function get()
    {
    $data = Product::all();
       return response()->json(
            [
                "message"=>"method succes",
                "data"=>$data
            ]
        );
    }
    function getById($id)
    {
       $data = Product::where("id", $id)->first();
       if ($data){
           return response()->json(
                [
                    "message"=>"method succes",
                    "data"=>$data
                ]
            );
       }
       return response()->json(
        [
            "message"=>"method false because id " . $id . " not found",
            "status"=> 404
        ]
       );
    }

    function put($id, Request $request)
    {
        $product = Product::where("id", $id, )->first();
        if($product){

        $product->name = $request->name ? $request->name : $product->name;
        $product->price = $request->price ? $request->price : $product->price;
        $product->quantity = $request->quantity ? $request->quantity : $product->quantity;
        $product->active = $request->active ? $request->active : $product->active;
        $product->description = $request->description ? $request->description : $product->description;
        
        $product->save();
        return response()->json(
                [
                    "message"=>"method succes",
                    "data"=>$product
                ]
            );
        }
        return response()->json(
            [
                "message"=>"method false because method with id" . $id . "not found",
            ],
            400
        );
    }
    function delete($id)
    {
        $product = Product::where('id', $id)->first();
        $product->delete();
        if($product){
            return response()->json(
                [
                    "message"=>"DELETE Product succes". $id . " succes"
                ]
            );
        }
        return response()->json(
            [
                "message"=>"method false because method with id " . $id . " not found",
                "status"=> 404
            ],404
        );
    }
}
