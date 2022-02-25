<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('status', [0, 1])->default(1);
            $table->unsignedBigInteger('persona_id')->unique()->nullable();
            $table->foreign('persona_id')
                ->references('id')
                ->on('personas')
                ->onDelete('SET NULL')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('status');
            // 1. Drop foreign key constraints
            $table->dropForeign(['persona_id']);
        });
    }
};
