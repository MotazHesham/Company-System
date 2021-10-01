<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingUserPivotTable extends Migration
{
    public function up()
    {
        Schema::create('meeting_user', function (Blueprint $table) {
            $table->unsignedBigInteger('meeting_id');
            $table->foreign('meeting_id', 'meeting_id_fk_5015081')->references('id')->on('meetings')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_5015081')->references('id')->on('users')->onDelete('cascade');
        });
    }
}
