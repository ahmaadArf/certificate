<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers')->cascadeOnDelete();
            $table->string('address')->nullable();
            $table->string('street_num')->nullable();
            $table->foreignId('country_id')->nullable()->constrained('countries');
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->foreignId('tax_id')->nullable()->constrained('tax_settings')->cascadeOnDelete();
            $table->string('credit_limit')->nullable();
            $table->enum('send_statement', ['yes', 'no'])->nullable()->default('yes');
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
        Schema::dropIfExists('billing_details');
    }
}
