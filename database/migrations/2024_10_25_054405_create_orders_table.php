<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();  // Equivalent to `int(11) PRIMARY KEY AUTO_INCREMENT`
            $table->string('name')->nullable();  // Equivalent to `varchar(255) DEFAULT NULL`
            $table->string('email', 30)->nullable();  // Equivalent to `varchar(30) DEFAULT NULL`
            $table->string('phone', 20)->nullable();  // Equivalent to `varchar(20) DEFAULT NULL`
            $table->double('amount')->nullable();  // Equivalent to `double DEFAULT NULL`
            $table->text('address')->nullable();  // Equivalent to `text`
            $table->string('status', 10)->nullable();  // Equivalent to `varchar(10) DEFAULT NULL`
            $table->string('transaction_id', 255)->nullable();  // Equivalent to `varchar(255) DEFAULT NULL`
            $table->string('currency', 20)->nullable();  // Equivalent to `varchar(20) DEFAULT NULL`
            $table->timestamps();  // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
