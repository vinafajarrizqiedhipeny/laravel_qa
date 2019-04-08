<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
   Schema::create('answers', function (Blueprint $table) {
   	$table->increments('id');
   	$table->unsignedInteger('question_id');
   	$table->unsignedInteger('user_id');
   	$table->text('body');
   	$table->integer('votes_count')->default(0);
   	$table->timestamp();

   });
}
