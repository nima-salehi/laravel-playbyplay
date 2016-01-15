<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   //Building the Data Model - Rolling Back & Resetting Migrations, Creating Database Seeders
   public function descriptions()
       {
           return $this->hasMany(Description::class);
       }
   //
}
