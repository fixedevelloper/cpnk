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
        Schema::create('investiments', function (Blueprint $table) {
            $table->id();
            $table->string('amount');
            $table->string('status')->comment("pending/accepted/payable")->default("pending");
            $table->date("created_date")->nullable(true);
            $table->dateTime("end_date")->nullable(true);
            $table->integer("month")->nullable(true);
            $table->float('pourcentage');
            $table->foreignId("user_id")->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investiments');
    }
};
