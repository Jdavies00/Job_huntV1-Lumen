<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//)->constrained()
class CreateMyJobsBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MyJobsBoard', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Job_id');
            $table->unsignedBigInteger('User_id')->nullable();
            // $table->text('Job Title');
            $table->text('Description');
            $table->text('Created By');
            $table->text('CompanyName');
            $table->text('Link');
            $table->text('Salary');
            
            $table->timestamps();
            
            $table->foreign('Job_id')
            ->references('id')
            ->on('CommJobsBoard')
            ->onDelete('cascade');

            $table->foreign('User_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            
            // $table->foreign('Job Title')
            // ->references('id')
            // ->on('CommJobsBoard')
            // ->onDelete('cascade');
            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('my_jobs_boards');
    }
}
