<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    // —————————————————————————
    // Adding Objects - Inserting Data via API
    public $fillable=['product_id','body'];
    // —————————————————————————
    //Building the Data Model - Rolling Back & Resetting Migrations, Creating Database Seeders
    public function product()
        {
            return $this->belongsTo(Product::class);
        }
    //

    // Querying Data - Reading Data via API

    /**
    * Get the description records associated with the given product id.
    */
    public function scopeOfProduct($query, $productId)
    {
       return $query->where('product_id', $productId);
    }
    /**
    * Get the description records that match the given keyword.
    */
    public function scopeWithKeyword($query, $keyword)
    {
       return $query->where('body', 'like', '%'.$keyword.'%');
    }
    //

}
