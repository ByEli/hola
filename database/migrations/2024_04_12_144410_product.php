<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('quantify');
            $table->double('price');
            $table->unsignedInteger('category_id');
            //$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down(): void
    {
    }
};
