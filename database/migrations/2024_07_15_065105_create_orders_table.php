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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->float('sub_total')->nullable();
            $table->float('grand_total')->nullable();
            $table->float('vat')->nullable();
            $table->float('pay_bill')->nullable();
            $table->float('pay_due')->nullable();
            $table->string('payment_method')->nullable();
            $table->enum('order_type', ['customer', 'pos'])->default('pos');
            $table->enum('payment_status', ['paid', 'pending', 'cancelled'])->default("pending");
            $table->enum('order_status', ['pending','received','process','shipped','delivered','cancel'])->default("pending");
            $table->date('order_date')->nullable();
            $table->timestamps();
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
