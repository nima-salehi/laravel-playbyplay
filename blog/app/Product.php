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

  // Querying Data - Reading Data via API

  /**
  * Get the product records that match the given keyword.
  */
  public function scopeWithKeyword($query, $keyword)
  {
     return $query->where('name', 'like', '%'.$keyword.'%');
  }
  //
}
