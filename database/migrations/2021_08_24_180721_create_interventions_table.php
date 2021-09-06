<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interventions', function (Blueprint $table) {
            $table->id();
            $table->date('dateDebutIntervention');
            $table->date('dateFinIntervention');
            $table->foreignId('alerte_id')->nullable()->constrained('alertes');
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
        Schema::table('interventions',function(Blueprint $table){
            $table->dropForeign(["alerte_id"]);
        });

        Schema::dropIfExists('interventions');
    }
}
