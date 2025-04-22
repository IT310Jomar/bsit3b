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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string("name",100);
            $table->boolean("status")->default(0);
            $table->timestamps();
        });

        DB::table("locations")->insert([
           [
            "name"   => "Opol",
            "status" => 1
           ],
           [
            "name"   => "CDO",
            "status" => 0
           ],
           [
            "name"   => "Iligan",
            "status" => 1
           ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
