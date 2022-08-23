<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('job_title')->nullable();
            $table->string('job_location')->nullable();
            $table->string('salary')->nullable();
            $table->string('job_post_date')->nullable();
            $table->string('application_deadline')->nullable();
            $table->string('vacancy')->nullable();
            $table->string('job_responsibilities')->nullable();
            $table->string('employment_status')->nullable();
            $table->string('educational_requirements')->nullable();
            $table->string('additional_requirements')->nullable();
            $table->string('other_benifits')->nullable();
            $table->string('application_note')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('jobs');
    }
}
