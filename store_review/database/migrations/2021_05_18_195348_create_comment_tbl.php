<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_tbl', function (Blueprint $table) {
            $table->id();
            $table->string('comment_description')->nullable();
            $table->string('comment_user_id')->nullable();
            $table->string('comment_product_id')->nullable();
            $table->string('comment_order')->nullable();
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
        Schema::dropIfExists('comment_tbl');
    }
}
