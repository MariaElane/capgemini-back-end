<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movements', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('operation', ['DEPOSITO', 'SAQUE']);
            $table->float('value');
            $table->unsignedBigInteger('origin_account_id');
            $table->foreign('origin_account_id')
                ->references('id')
                ->on('accounts')
                ->onDelete('cascade');
            $table->unsignedBigInteger('destination_account_id');
            $table->foreign('destination_account_id')
                ->references('id')
                ->on('accounts')
                ->onDelete('cascade');
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
        Schema::dropIfExists('movements');
    }
}
