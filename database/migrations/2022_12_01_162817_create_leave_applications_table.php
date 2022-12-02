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
        //Creates table leave_applications to store employee leave requests
        Schema::create('leave_applications', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id');
            $table->integer('leave_type_id'); //Selected from the leave type
            $table->timestamps('application_date'); //Date the application was made
            $table->leave_days('leave_type_id', 3);
            $table->timestamps('start_date');
            $table->timestamps('end_date');
            $table->integer('handover_employee_id'); //Staff being handed over the work
            $table->binary('handover_report'); //file uploaded as handover report 
            $table->text('request_comments');
            $table->string('status'); //Approved, Declined, Deleted
            $table->integer('responding_employee_id');
            $table->text('response_comment');
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
        Schema::dropIfExists('leave_applications');
    }
};
