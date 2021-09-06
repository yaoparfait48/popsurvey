<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUseralertesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('useralertes', function (Blueprint $table) {
            $table->foreignId('alerte-id')->nullable()->constrained('alertes');
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
        Schema::table('useralertes',function(Blueprint $table){
            $table->dropForeign(["alerte_id","user_id"]);
        });

        Schema::dropIfExists('useralertes');
    }
}
