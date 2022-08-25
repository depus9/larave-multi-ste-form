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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            /**
             * Step 1
             */
            $table->string('company_status');
            $table->string('accreditation_level');
            $table->string('company_is_premium');
            $table->string('company_register_date');
            $table->string('company_expiry_date');
            $table->string('company_renewal_date');
            /*
            contact info Step 2
             */
            $table->string('contact_name');
            $table->string('contact_email');
            $table->string('contact_phone');
            /*
            Step 3 
            */
            $table->string('company_name');
            $table->string('company_address');
            $table->string('company_email');
            $table->string('company_phone');

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
        Schema::dropIfExists('companies');
    }
};
