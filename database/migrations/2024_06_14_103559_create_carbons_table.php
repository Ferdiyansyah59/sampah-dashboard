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
        Schema::create('carbons', function (Blueprint $table) {
            $table->id();
            $table->float('electriccity');
            $table->float('gas');
            $table->float('transportation');
            $table->string('food_type');
            $table->float('food');
            $table->float('organic_waste');
            $table->float('inorganic_waste');
            $table->float('carbon_footprint');
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carbons');
    }
};



// ln -s /home/reviensm/public_html/laravel/planetku/storage/app/public /home/reviensm/public_html/planetku/public/storage

// ln -s /home/reviensm/public_html/planetku/storage/app/public/post-images /home/reviensm/public_html/planetku/public/storage

// cd /home/reviensm/public_html/planetku