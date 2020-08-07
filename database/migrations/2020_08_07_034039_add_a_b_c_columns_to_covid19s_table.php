<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddABCColumnsToCovid19sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('covid19s', function (Blueprint $table) {
            $table->date('date')->nullable();
            $table->string('country')->nullable();
            $table->integer('total')->nullable();
            $table->integer('active')->nullable();
            $table->integer('death')->nullable();
            $table->integer('recovered')->nullable();
            $table->float('a',16,2)->nullable();          
            $table->float('remark',16,2)->nullable();     
            $table->float('c',16,2)->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('covid19s', function (Blueprint $table) {
            //
        });
    }
}
