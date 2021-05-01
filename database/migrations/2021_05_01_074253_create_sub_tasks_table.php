<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tbl_subtask', function (Blueprint $table) {
            $table->integer('id'); 
            $table->string('task_id',200);
            $table->string('field_name',5000);
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
        Schema::dropIfExists('tbl_subtask');
    }
}
