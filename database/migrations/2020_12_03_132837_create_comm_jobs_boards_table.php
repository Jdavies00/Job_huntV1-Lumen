<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommJobsBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CommJobsBoard', function (Blueprint $table) {
            $table->id();
            $table->text('JobTitle');
            $table->text('CreatedBy');
            $table->text('CompanyName');//fk company id
            // $table->boolean("Status");
            $table->text('Link');
            $table->double('Salary');
            $table->text('Description');
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
        Schema::dropIfExists('CommJobsBoard');
    }
}
