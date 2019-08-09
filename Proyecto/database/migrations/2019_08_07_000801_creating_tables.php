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
       Schema::create('customers', function (Blueprint $table) {
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

       Schema::create("categories", function (Blueprint $table){
         $table->bigIncrements("id");
         $table->string("name", 50);
         $table->timestamps();
       });

       Schema::create("products", function (Blueprint $table){
         $table->bigIncrements("id");
         $table->string("name", 50);
         $table->decimal("rating", 2, 2);
         $table->string("description", 300);
         $table->decimal("price", 4, 2);
         $table->integer("stock");
         $table->unsignedBigInteger('category_id')->nullable();
     		 $table->foreign('category_id')->references('id')->on('categories');
         $table->string("image");
         $table->timestamps();
     });

     Schema::create('shopping_carts', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('customer_id')->nullable();
        $table->foreign('customer_id')->references('id')->on('customers');
        $table->decimal("purchase_amount", 5, 2);
        $table->timestamps();
    });

     Schema::create('shopping_lists', function (Blueprint $table) {
				$table->unsignedBigInteger('shopping_cart_id')->nullable();
    		$table->foreign('shopping_cart_id')->references('id')->on('shopping_carts');
				$table->unsignedBigInteger('product_id')->nullable();
    		$table->foreign('product_id')->references('id')->on('products');
        $table->integer("quantity");
				$table->timestamps();
});
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
      Schema::table('shopping_lists', function (Blueprint $table) {
      				$table->dropForeign('product_id');
      				$table->dropColumn('product_id');
      				$table->dropForeign('shopping_cart_id');
      				$table->dropColumn('shopping_cart_id');
    });

    Schema::dropIfExists('shopping_lists');

    Schema::table('shopping_carts', function (Blueprint $table) {
            $table->dropForeign('customer_id');
            $table->dropColumn('customer_id');
    });

    Schema::dropIfExists('shopping_carts');

    Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('category_id');
            $table->dropColumn('category_id');
    });

    Schema::dropIfExists('products');

    Schema::dropIfExists('categories');

    Schema::dropIfExists('customers');

}
}
