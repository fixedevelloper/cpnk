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
            $table->string("last_name")->nullable();
            $table->string("company_name")->nullable();
            $table->string("country")->nullable();
            $table->string("town")->nullable();
            $table->string("alternate_contact")->nullable();
            $table->string("address")->nullable();
            $table->boolean("two_factor")->default(false)->nullable();
            $table->string("face_card")->nullable();
            $table->string("recto_card")->nullable();
            $table->boolean("is_verified_card")->default(false)->nullable();
            $table->boolean("is_verified_phone")->default(false)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
