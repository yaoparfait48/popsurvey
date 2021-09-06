<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserrolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userroles', function (Blueprint $table) {
            $table->foreignId('user-id')->nullable()->constrained('users');
            $table->foreignId('role_id')->nullable()->constrained('roles');
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

        Schema::table('userroles',function(Blueprint $table){
            $table->dropForeign(["user_id","role_id"]);
        });

        Schema::dropIfExists('userroles');
    }
}
