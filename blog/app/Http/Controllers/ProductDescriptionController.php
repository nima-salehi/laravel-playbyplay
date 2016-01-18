<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Querying Data - Reading Data via API
use App\Description;
// —————————————————————————
// Adding Objects - Inserting Data via API
use App\Product;
// —————————————————————————
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  int  $productId
     * @return Response
     */
     // Querying Data - Reading Data via API
     public function index($productId, Request $request)
     {
      return Description::ofProduct($productId)
          ->withKeyword($request->input('keyword'))
          ->paginate(15);
     }
     //

    /**
     * Store a newly created resource in storage.
     *
     * @param  int      $productId
     * @param  Request  $request
     * @return Response
     */
    public function store($productId, Request $request)
    {
      // —————————————————————————
      // Adding Objects - Inserting Data via API
      // —————————————————————————
      // return Description::create([
      //   'product_id'=>$productId,
      //   'body'=>$request->input('body')
      // ]);
      $product=Product::findOrFail($productId);
      $product->descriptions()->save(new Description([
        'body'=>$request->input('body')
      ]));
      return $product->descriptions;
    }
}
