<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Querying Data - Reading Data via API
use App\Product;
//
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

      // Querying Data - Reading Data via API
      public function index(Request $request)
         {
             return Product::withKeyword($request->input('keyword'))
                 ->paginate(15);
         }
      //

     // —————————————————————————
     // Adding Objects - Inserting Data via API

         /**
          * Store a newly created resource in storage.
          *
          * @param  Request  $request
          * @return Response
          */
         public function store(Request $request)
         {
             $this->validate($request, [
                 'name' => 'required|unique:products|productQuality',
             ]);
             return Product::create([
                 'name' => $request->input('name')
             ]);
         }
     // —————————————————————————

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {

    }
}
