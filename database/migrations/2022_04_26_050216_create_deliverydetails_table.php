<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliverydetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliverydetails', function (Blueprint $table) {
            $table->id();
            $table->string('storage_address',255);
            $table->string('storage_city',255);
            $table->string('storage_state',255);
            $table->string('storage_zip_code',255);
            $table->string('delivery_address',255);
            $table->string('delivery_city',255);
            $table->string('delivery_state',255);
            $table->string('delivery_zip_code',255);
            $table->string('residence',20);
            $table->string('delivery_notes',20);
            $table->string('time',20);
            $table->string('first_name',20);
            $table->string('last_name',20);
            $table->string('phone_number',20);
            $table->string('email',20);
            $table->string('monthly_charges',20);
            $table->string('container_storage',20);
            $table->string('container_insurance',20);
            $table->text('One_Time_Charges',20);
            $table->text('options',20);
            $table->string('total',20);
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
        Schema::dropIfExists('deliverydetails');
    }
}
