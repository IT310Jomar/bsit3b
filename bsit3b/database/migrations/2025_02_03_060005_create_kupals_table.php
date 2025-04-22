<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kupals', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamps();
        });
    DB::table("kupals")->insert([
        [
        "name" => "K1"
        ],
        [
        "name" => "K2"
        ],
        [
        "name" => "K3"
        ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kupals');
    }
};
