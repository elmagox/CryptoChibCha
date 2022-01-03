<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePreferredCryptoUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preferred_crypto_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cryptocurrency_id')->unsigned();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('cryptocurrency_id')->references('id')->on('cryptocurrencies');
            $table->foreign('user_id')->references('id')->on('users');
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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Schema::dropIfExists('preferred_crypto_user');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
