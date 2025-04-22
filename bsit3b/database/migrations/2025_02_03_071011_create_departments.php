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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string("name",60);
            $table->unsignedBigInteger("test_id");
            $table->timestamps();
            $table->unsignedBigInteger("kupal_id");

            $table->foreign("kupal_id")->references("id")->on("kupals")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("test_id")->references("id")->on("tests")->onDelete("cascade")->onUpdate("cascade");
        });

        DB::table("departments")->insert([
            [
               "name" => "BSIT",
               "test_id" => 1,
               "kupal_id" => 1
            ],
            [
                "name" => "BSBA",
                "test_id" => 2,
                "kupal_id" => 2
            ],
            [
                "name" => "BSED",
                "test_id" => 3,
                "kupal_id" => 3
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
