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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('transaction_code');
            $table->foreignId('delivery_address_id')->constrained('delivery_addresses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('payment_method_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->double('total_price');
            $table->double('total_weight');
            $table->double('delivery_price');
            $table->double('total_pay');
            $table->string('transaction_status'); // Dikemas - dikirim - selesai - dibatalkan -pengambilan

            $table->softDeletes();
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
        Schema::dropIfExists('transactions');
    }
};
