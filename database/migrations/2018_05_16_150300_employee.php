<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->unsignedInteger('employee_id');
            $table->unsignedInteger('uad_id');
            $table->unsignedInteger('position_type_id');
            $table->unsignedInteger('position_id');
            $table->unsignedInteger('skill_id');
            $table->unsignedInteger('sub_skill_id');
            $table->unsignedInteger('site_id');
            $table->unsignedInteger('supervisor_id');
            $table->unsignedInteger('tier_id');
            $table->unsignedInteger('work_pattern_id');
            $table->date('date_birth');
            $table->string('gender',6);
            $table->string('name',100);
            $table->timestamps();

            $table->primary('employee_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
