<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRapportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapports', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('libelle');
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
        Schema::table('rapports',function(Blueprint $table){
            $table->dropForeign(["intervention_id"]);
        });

        Schema::dropIfExists('rapports');
    }
}
