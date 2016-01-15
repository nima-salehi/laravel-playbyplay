<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    //Building the Data Model - Rolling Back & Resetting Migrations, Creating Database Seeders
    return $this->belongsTo(Product::class);
    //
}
