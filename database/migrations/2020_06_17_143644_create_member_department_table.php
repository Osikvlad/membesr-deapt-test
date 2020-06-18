<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_department', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('member_id')->unsigned()->nullable();
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
            $table->unsignedBigInteger('department_id')->unsigned()->nullable();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
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
        Schema::dropIfExists('member_department');
    }
}
