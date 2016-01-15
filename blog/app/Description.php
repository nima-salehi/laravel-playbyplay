<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    //Building the Data Model - Rolling Back & Resetting Migrations, Creating Database Seeders
    public function product()
        {
            return $this->belongsTo(Product::class);
        }
    //
}
