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
        Schema::create('orders', function (Blueprint $table) {
            $table->decimal('ord_num', 6, 0)->primary();
            $table->decimal('ord_amount', 12, 2);
            $table->decimal('advance_amount', 12, 2);
            $table->date('ord_date');
            $table->string('fk_cust_code', 6)->nullable();
            $table->char('fk_agent_code', 6)->nullable();
            $table->foreign('fk_cust_code')
                  ->references('cust_code')
                  ->on('customers')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreign('fk_agent_code')
                  ->references('agent_code')
                  ->on('agents')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
