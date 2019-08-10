<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    //Se definen cuáles son las columnas que se pueden escribir
    protected $fillable = ['fullName', 'user', 'birthdate', 'email', 'password', 'repassword', 'country', 'avatar'];

    // Se aclara la relación
    public function shoppingCart(){
      return $this->hasMany("App\shopping_cart", "customer_id");

    }

}
