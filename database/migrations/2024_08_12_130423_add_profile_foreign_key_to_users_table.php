<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->unique()->nullable();
            $table->unsignedBigInteger('user_profile_id')->nullable();
            $table->foreign('user_profile_id')->references('id')->on('profiles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Schema::disableForeignKeyConstraints();
        // Drop the associated column on the user's table
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['user_profile_id']);
        });
    }
};
