<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applies', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->index();

            $table->increments('id');
            $table->string('applyName');
            $table->string('applyAge');
            $table->string('applyGender');
            $table->string('applyJapanese');
            $table->string('applyVisa');
            $table->string('applyHistory');
            $table->string('applySns');
            $table->string('applyJava1')->nullable();
            $table->string('applyJava2')->nullable();
            $table->string('applyJava3')->nullable();
            $table->string('applyWeb1')->nullable();
            $table->string('applyWeb2')->nullable();
            $table->string('applyWeb3')->nullable();

            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applies');
    }
}
