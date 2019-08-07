<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatingTables extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up(){
       Schema::create('users', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('fullName');
           $table->string('user', 50);
           $table->date('birthdate');
           $table->string('email')->unique();
           $table->string('password');
           $table->string("repassword");
           $table->string("country", 50);
           $table->string("avatar");
           $table->rememberToken();
           $table->timestamps();

       });

       Schema::create("products", function (Blueprint $table){
         $table->bigIncrements("id");
         $table->string("name", 50);
         $table->decimal("rating", 2, 2);
         $table->string("description", 300);
         $table->decimal("price", 4, 2);
         $table->string("image");
         $table->timestamps();
     });

     Schema::create('user_product', function (Blueprint $table) {
				$table->bigIncrements('id');
				$table->unsignedBigInteger('user_id')->nullable();
    		$table->foreign('user_id')->references('id')->on('users');
				$table->unsignedBigInteger('product_id')->nullable();
    		$table->foreign('product_id')->references('id')->on('products');
				$table->timestamps();
});
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
      Schema::table('user_product', function (Blueprint $table) {
      				$table->dropForeign('product_id');
      				$table->dropColumn('product_id');
      				$table->dropForeign('user_id');
      				$table->dropColumn('user_id');
    });

    Schema::dropIfExists('user_product');

    Schema::dropIfExists('products');
    Schema::dropIfExists('users');

}
}
