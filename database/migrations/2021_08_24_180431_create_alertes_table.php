<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlertesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alertes', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('niveau');
            $table->string('description_alerte');
            $table->double('longitude');
            $table->double('latitude');
            $table->string('ville')->nullable();
            $table->boolean('status')->nullable()->default('0');
            $table->foreignId('user_id')->constrained('users');
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

        Schema::table('alertes',function(Blueprint $table){
            $table->dropForeign(["user_id"]);
        });
        Schema::dropIfExists('alertes');
    }
}
