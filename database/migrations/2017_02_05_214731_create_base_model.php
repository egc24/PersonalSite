<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaseModel extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create('parameter_types', function (Blueprint $table) {
	        $table->increments('id');
	        $table->string('type');
	    });

	    Schema::create('parameters', function($table) {
	    	$table->increments('id');
	    	$table->string('key');
	    	$table->string('value');
	    	$table->integer('type_id')->unsigned()->index();
	    });

	    Schema::table('parameters', function($table) {
	        $table->foreign('type_id')->references('id')->on('parameter_types');
	    });

	    Schema::create('articles', function($table) {
	    	$table->increments('id');
	    	$table->string('title');
	    	$table->string('author');
	    	$table->string('brief');
	    	$table->dateTime('date');
	    	$table->string('content');
	    	$table->integer('image_id')->unsigned()->index();
	    });

	    Schema::table('articles', function($table) {
	        $table->foreign('image_id')->references('id')->on('parameters');
	    });

	    Schema::create('comments', function($table) {
	    	$table->increments('id');
	    	$table->string('author');
	    	$table->dateTime('date');
	    	$table->string('content');
	    	$table->integer('image_id')->unsigned()->index();
	    	$table->integer('article_id')->unsigned()->index();
	    });

	    Schema::table('comments', function($table) {
	        $table->foreign('image_id')->references('id')->on('parameters');
	        $table->foreign('article_id')->references('id')->on('articles');
	    });

	    Schema::create('time_line_items', function($table) {
	    	$table->increments('id');
	    	$table->string('title');
	    	$table->dateTime('date');
	    	$table->string('content');
	    	$table->integer('image_id')->unsigned()->index();
	    });

	    Schema::table('time_line_items', function($table) {
	        $table->foreign('image_id')->references('id')->on('parameters');
	    });	    

	    Schema::create('galleries', function($table) {
	    	$table->increments('id');
	    	$table->string('description');
	    });

	    Schema::create('gallery_images', function($table) {
	    	$table->increments('id');
	    	$table->integer('image_id')->unsigned()->index();
	    	$table->integer('gallery_id')->unsigned()->index();
	    });	

		Schema::table('gallery_images', function($table) {
	        $table->foreign('image_id')->references('id')->on('parameters');
	        $table->foreign('gallery_id')->references('id')->on('galleries');
	    });	

	    DB::table('parameter_types')->insert(array('type'=>'link'));
	    DB::table('parameter_types')->insert(array('type'=>'image'));
	    DB::table('parameter_types')->insert(array('type'=>'color'));
	    DB::table('parameter_types')->insert(array('type'=>'text'));
	    DB::table('parameter_types')->insert(array('type'=>'title'));
	    DB::table('parameter_types')->insert(array('type'=>'file'));
	    DB::table('parameter_types')->insert(array('type'=>'icon'));
	    DB::table('parameter_types')->insert(array('type'=>'map'));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gallery_images');
		Schema::drop('galleries');
		Schema::drop('time_line_items');
		Schema::drop('comments');
		Schema::drop('articles');
		Schema::drop('parameters');
	    Schema::drop('parameter_types');
	}

}
