<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shoppingList extends Model
{
  //Se define cuáles son las columnas que se pueden escribir
  protected $fillable = ['quantity'];

  // Se aclara la relación con product
  public function product(){
    return $this->belongsTo("App\product", "product_id");
  }

  // Se aclara la relación con shoppingLists
  public function shoppingCart(){
    return $this->belongsTo("App\shoppingCart", "shopping_cart_id");
  }
}
