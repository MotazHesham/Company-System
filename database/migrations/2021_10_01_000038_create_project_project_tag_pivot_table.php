<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectProjectTagPivotTable extends Migration
{
    public function up()
    {
        Schema::create('project_project_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id', 'project_id_fk_5015114')->references('id')->on('projects')->onDelete('cascade');
            $table->unsignedBigInteger('project_tag_id');
            $table->foreign('project_tag_id', 'project_tag_id_fk_5015114')->references('id')->on('project_tags')->onDelete('cascade');
        });
    }
}
