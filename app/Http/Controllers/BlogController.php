<?php namespace App\Http\Controllers;



class BlogController extends Controller {

	public function exec()
	{
		$blogView = view('blog');
		$blogView->with('pageTitle',ParameterDAO::getAllParametersOfKey('blog_page_title')->first()->value);
		$blogView->with('title',ParameterDAO::getAllParametersOfKey('blog_title')->first()->value);
		$blogView->with('subtitle',ParameterDAO::getAllParametersOfKey('blog_subtitle')->first()->value);
		return $blogView;
		//return view('blog');
		//return ParameterDAO::getAllParametersOfTypeWhithKey('link','key2')->first()->value;
	}

}
