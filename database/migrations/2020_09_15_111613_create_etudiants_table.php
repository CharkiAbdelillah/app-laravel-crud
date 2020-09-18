<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
             $table->increments('id'); 
             $table->string('nom'); 
            $table->string('email'); 
            $table->text('branche');  
            $table->text('image'); 
            $table->timestamp('created_at')->useCurrent();
             $table->timestamp('updated_at')->nullable();
           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
