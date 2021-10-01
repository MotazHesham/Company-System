<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTagsTable extends Migration
{
    public function up()
    {
        Schema::create('project_tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tag');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
