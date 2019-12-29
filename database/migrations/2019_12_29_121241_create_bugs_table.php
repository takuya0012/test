<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bugs', function (Blueprint $table) {
            $table->bigIncrements('bug_id');
            $table->date('date_reported');
            $table->string('summary', 80)->nullable();
            $table->string('description', 1000)->nullable();
            $table->string('resolution', 1000)->nullable();
            $table->string('status', 20)->default('NEW');
            $table->string('priority', 20)->nullable();
            $table->decimal('hours', 9, 2)->nullable();
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
        Schema::dropIfExists('bugs');
    }
}
