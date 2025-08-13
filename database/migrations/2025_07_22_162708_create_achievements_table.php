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
       Schema::create('achievements', function (Blueprint $table) {
           $table->id();
           $table->foreignId('user_id')->constrained()->onDelete('cascade');
           $table->string('name');
           $table->enum('type', ['award', 'certification', 'recognition']);
           $table->string('certification')->nullable();
           $table->string('organization');
           $table->timestamp('date');
           $table->json('images')->nullable();
           $table->enum('category', ['academic', 'professional', 'other']);
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
        Schema::dropIfExists('achievements');
    }
};
