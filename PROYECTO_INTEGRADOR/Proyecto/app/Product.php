<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
  //Se define cuáles son las columnas que se pueden escribir (AGREGUE IMAGE Mati)
  protected $fillable = ['name','rating','description', 'price', 'stock', 'image'];

    // Se aclara la relación con category
    public function category(){
      return $this->belongsTo("App\Category", "category_id");
    }

    // Se aclara la relación con shoppingList (AGREGUE la s tambien Mati)
    public function shoppingLists(){
      return $this->hasMany("App\shoppingList", "product_id");
    }



}
