<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aides', function (Blueprint $table) {
            $table->id();
            $table->string('typeAide');
            $table->string('description1');
            $table->foreignId('intervention_id')->nullable()->constrained('interventions');
            $table->timestamps();
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
        Schema::table('aides',function(Blueprint $table){
            $table->dropForeign(["intervention_id"]);
        });

        Schema::dropIfExists('aides');
    }
}
