<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
  //Se define cuáles son las columnas que se pueden escribir
  protected $fillable = ['name','rating','description', 'price', 'stock'];

    // Se aclara la relación con category
    public function category(){
      return $this->belongsTo("App\category", "category_id");
    }

    // Se aclara la relación con shoppingList
    public function shoppingList(){
      return $this->hasMany("App\shoppingList", "product_id");
    }



}
