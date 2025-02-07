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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->foreignId('service_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('preferred_date');
            $table->string('preferred_time');
            $table->string('phone_number');
            $table->string('slug')->nullable();
            $table->string('position')->nullable();
            $table->boolean('status')->nullable()->default(0);
            $table->foreignId('customer_id')->nullable()->constrained()->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
