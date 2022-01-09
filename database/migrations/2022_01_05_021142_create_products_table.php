<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('title');
            $table->string('alias')->unique();
            $table->text('description')->nullable();
            $table->decimal('price', 5, 2);
            $table->integer('views')->default(0);
            $table->integer('shows')->default(0);
            $table->integer('clicks')->default(0);
//            $table->enum('status', ['show', 'hide', 'delete'])->default('show')->change();
            $table->string('status')->default('show');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
