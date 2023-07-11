<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_contacts', function (Blueprint $table) {
            $table->id();
          //  $table->string('name');
          $table->foreignId('customer_id')->nullable()->constrained('customers');
          $table->foreignId('site_id')->nullable()->constrained('sites')->after('id');
          $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
          $table->string('f_name');
         // $table->string('l_name');
          $table->string('phone');
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
        Schema::dropIfExists('site_contacts');
    }
}
