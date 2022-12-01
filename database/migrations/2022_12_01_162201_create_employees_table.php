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
        //Creates employees table
        Schema::create('employees', function (Blueprint $table) {
            $table->id();//Primary Key
            $table->string('pf_no', 20)->unique();
            $table->string('surname_name', 100);
            $table->string('other_names', 100);
            $table->string('title', 10); //Mr, Miss, Mrs, Dr, Prof, Sir
            $table->string('email', 100);
            $table->string('password', 40); //length of 40 for hashed password -SHA1
            $table->string('id_type', 30); //National ID, Passort
            $table->integer('id_number', 30);
            $table->timestamp('dob');
            $table->string('kra_pin', 30);
            $table->string('nssf_number', 30);
            $table->string('nhif_number', 30);
            $table->string('marital_status', 30);//Single, Married
            $table->integer('department_id');
            $table->integer('leave_days');
            $table->binary('profile_photo');
            $table->string('status', 30); //Active, Dismissed, Suspended, On leave, Deleted
            $table->timestamps('last_login');
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
        Schema::dropIfExists('employees');
    }
};
