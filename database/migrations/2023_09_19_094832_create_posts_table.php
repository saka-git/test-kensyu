<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id'); //AI(auto increment) 自動的に連番で入る
            $table->string('title'); //varcharはlaravelでは"string"で定義
            $table->text('body');
            $table->integer('category_id');
            $table->timestamps(); //created_at と updated_at カラムが自動生成される
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
