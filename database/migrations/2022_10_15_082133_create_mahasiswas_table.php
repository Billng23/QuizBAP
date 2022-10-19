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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string("studentId");
            $table->string("nama");
            $table->string("matakuliah");
            $table->Interger("SKS");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string("studentId",50);
            $table->string("nama",20);
            $table->string("matakuliah", 20);
            $table->Interger("SKS");
            $table->timestamps();
        });
    }
};
