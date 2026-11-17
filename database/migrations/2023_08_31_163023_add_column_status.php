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
        Schema::table('fees_choiceables', function (Blueprint $table) {
            $table->tinyInteger('status')->default('0')->after('payment_transaction_id')->comment('0 - failed 1 - succeed');
        });
        Schema::table('paid_installment_fees', function (Blueprint $table) {
            $table->tinyInteger('status')->default('0')->after('payment_transaction_id')->comment('0 - failed 1 - succeed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fees_choiceables', function (Blueprint $table) {
            //
        });
        Schema::table('paid_installment_fees', function (Blueprint $table) {
            //
        });
    }
};
