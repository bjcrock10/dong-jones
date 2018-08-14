<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('pic')->nullable();
            $table->string('designation')->default('Manager');
            $table->enum('status',['active','inactive'])->default('active');
            $table->string('fname')->nullable("yes");
            $table->string('lname')->nullable("yes");
            $table->string('mname')->nullable("yes");
            $table->string('currentaddress',255)->nullable("yes");
            $table->string('homeaddress',255)->nullable("yes");
            $table->string('bdate')->nullable("yes");
            $table->string('sex')->nullable("yes");
            $table->string('age')->nullable("yes");
            $table->string('maritalstatus')->nullable("yes");
            $table->string('gsisno')->nullable("yes");
            $table->string('tin')->nullable("yes");
            $table->string('telno')->nullable("yes");
            $table->string('celno')->nullable("yes");
            $table->string('coffice')->nullable("yes");
            $table->string('officeaddress',255)->nullable("yes");
            $table->string('employmentstatus')->nullable("yes");
            $table->string('csalaryamount')->nullable("yes");
            $table->string('cleavecredits')->nullable("yes");

            $table->string('sharecapital',255)->nullable("yes");
            $table->string('totalregularloan')->nullable("yes");
            $table->string('totalpettycashloan')->nullable("yes");
            $table->string('totalemergencyloan')->nullable("yes");
            $table->string('totalcommodityloan')->nullable("yes");
            $table->string('totalotherstloan')->nullable("yes");
            
            $table->string('signaturekey')->nullable("yes");
            $table->rememberToken();
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
        Schema::drop('admins');
    }
}
