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
            $table->enum('job_knowledge',['h','m','l'])->nullable()->comment('h=high,m=medium,l=low');
            $table->enum('work_quality',['h','m','l'])->nullable()->comment('h=high,m=medium,l=low');
            $table->enum('work_consistencies',['h','m','l'])->nullable()->comment('h=high,m=medium,l=low');
            $table->enum('enthusiasm',['h','m','l'])->nullable()->comment('h=high,m=medium,l=low');
            $table->enum('cooperation',['h','m','l'])->nullable()->comment('h=high,m=medium,l=low');
            $table->enum('attitude',['h','m','l'])->nullable()->comment('h=high,m=medium,l=low');
            $table->enum('initiative',['h','m','l'])->nullable()->comment('h=high,m=medium,l=low');
            $table->enum('work_relation',['h','m','l'])->nullable()->comment('h=high,m=medium,l=low');
            $table->enum('creativity',['h','m','l'])->nullable()->comment('h=high,m=medium,l=low');
            $table->enum('attendance',['h','m','l'])->nullable()->comment('h=high,m=medium,l=low');
            $table->enum('productivity',['h','m','l'])->nullable()->comment('h=high,m=medium,l=low');
            $table->enum('dependability',['h','m','l'])->nullable()->comment('h=high,m=medium,l=low');
            $table->enum('communication_skill',['h','m','l'])->nullable()->comment('h=high,m=medium,l=low');
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
