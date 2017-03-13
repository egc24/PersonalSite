<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PopulateBaseModel extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*
			Id's:
			1 - Link
			2 - Image
			3 - Color
			4 - Text
			5 - Title
			6 - File
			7 - Icon
			8 - Map
		*/

		DB::table('parameters')->insert(array('key'=>'blog_page_title','value'=>'Blog - Eduardo Gonzalez Calderon','type_id'=>'5'));
		DB::table('parameters')->insert(array('key'=>'blog_title','value'=>'Loblog','type_id'=>'5'));
		DB::table('parameters')->insert(array('key'=>'blog_subtitle','value'=>'Un Blog de Tecnologia','type_id'=>'5'));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('parameters')->delete();
	}

}
