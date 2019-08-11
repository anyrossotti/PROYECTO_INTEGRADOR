<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    //Se definen cuáles son las columnas que se pueden escribir
    protected $fillable = ['fullName', 'user', 'birthdate', 'email', 'password', 'repassword', 'country', 'avatar'];

    // Se aclara la relación (AGREGUE la s y cambie en nombre del modelo que estaba mal Mati)
    public function shoppingCarts(){
      return $this->hasMany("App\shoppingCart", "customer_id");

    }

}
