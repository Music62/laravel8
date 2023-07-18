<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNongtakraisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nongtakrais', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('name')->nullable();
            $table->float ('age')->nullable();
            $table->string('address')->nullable();
            $table->date('ID number')->nullable();
            $table->text('favorite thing')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nongtakrais');
    }
}
