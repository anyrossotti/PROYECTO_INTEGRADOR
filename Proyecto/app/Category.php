<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //Se definen cuáles son las columnas que se pueden escribir
    protected $fillable = ['name'];

    //Se aclara la relación
    public function product() {
      return $this->hasMany("App\product", "category_id");
    }
}
