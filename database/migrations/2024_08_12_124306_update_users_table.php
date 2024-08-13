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
        //
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('profile_name');
            $table->timestamps();
        });

        //Schema::table('users', function (Blueprint $table) {
        //    $table->unsignedBigInteger('user_profile_id');
        //    $table->foreign('user_profile_id')->references('id')->on('user_profile');
        //});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the user profile schema on rollback
        Schema::drop('profiles');

        // Drop the associated column on the user's table
        //Schema::table('users', function (Blueprint $table) {
        //    $table->dropColumn(['user_profile_id']);
        //});
    }
};
