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
            $table->string('pf_number')->unique();
            $table->string('surname_name');
            $table->string('other_names');
            $table->string('title')->nullable()->default(NULL); //Mr, Miss, Mrs, Dr, Prof, Sir
            $table->string('email')->unique();
            $table->timestamp('email_verified_at');
            $table->string('phone_number')->unique();
            $table->string('password'); //Hashed password
            $table->string('id_type')->nullable()->default(NULL); //National ID, Passort
            $table->string('id_number')->nullable()->default(NULL);
            $table->timestamp('dob')->nullable()->default(NULL);
            $table->string('kra_pin')->unique()->nullable()->default(NULL);
            $table->string('nssf_number')->unique()->nullable()->default(NULL);
            $table->string('nhif_number')->unique()->nullable()->default(NULL);
            $table->string('marital_status')->nullable()->default(NULL);//Single, Married
            $table->integer('department_id')->nullable()->default(NULL);
            $table->integer('leave_days')->default(0);
            $table->binary('profile_photo')->nullable()->default(NULL);
            $table->boolean('is_hod')->default(false); //Check for HOD privileges so as to view and approve leave for members of Dept
            $table->string('status')->nullable()->default(NULL); //Active, Dismissed, Suspended, Deleted
            $table->timestamp('last_login')->nullable()->default(NULL);
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
