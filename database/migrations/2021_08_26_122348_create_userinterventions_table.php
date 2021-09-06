<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserinterventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userinterventions', function (Blueprint $table) {
            $table->foreignId('intervention-id')->nullable()->constrained('interventions');
            $table->foreignId('user_id')->nullable()->constrained('users');
        });

        Schema::enableForeignKeyConstraints();

        Schema::disableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('userinterventions',function(Blueprint $table){
            $table->dropForeign(["intervention_id","user_id"]);
        });


        Schema::dropIfExists('userinterventions');
    }
}

