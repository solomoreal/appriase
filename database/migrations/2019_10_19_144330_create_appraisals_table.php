<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppraisalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appraisals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('reviewer_id')->nullable();
            $table->unsignedBigInteger('reviewee_id')->nullable();
            $table->integer('job_knowledge')->nullable();
            $table->integer('work_quality')->nullable();
            $table->integer('work_consistencies')->nullable();
            $table->integer('enthusiasm')->nullable();
            $table->integer('cooperation')->nullable();
            $table->integer('attitude')->nullable();
            $table->integer('initiative')->nullable();
            $table->integer('work_relation')->nullable();
            $table->integer('creativity')->nullable();
            $table->integer('attendance')->nullable();
            $table->integer('productivity')->nullable();
            $table->integer('dependability')->nullable();
            $table->integer('communication_skill')->nullable();
            $table->text('reviewer_comment')->nullable();
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
        Schema::dropIfExists('appraisals');
    }
}
