<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shoppingCart extends Model
{
  //Se define cuáles son las columnas que se pueden escribir
  protected $fillable = ['purchase_amount'];

  // Se aclara la relación con customer
  public function customer(){
    return $this->belongsTo("App\customer", "customer_id");
  }

  // Se aclara la relación con shoppingLists
  public function shoppingList(){
    return $this->hasMany("App\shoppingList", "shopping_cart_id");
  }

}
