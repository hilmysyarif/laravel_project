<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\NewsCategory;

class NewsCategoriesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = NewsCategory::all();
      return view('news.categories.index', compact('categories'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('news.categories.new');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // validate our input description
  		$this->validate($request, [	'title' => 'required']);

      $data = [
  			'title' => $request->input('title'),
  		];


      NewsCategory::create($data);

      // redirect
      \Session::flash('message', 'Successfully created news category!');
      return redirect()->route('backend.news.categories.index');

    }

    public function edit($id)
  	{
  		$category = NewsCategory::find($id);

      return view('news.categories.edit', compact('category'));

  	}

    public function update(Request $request, $id)
    {
      // validate our input description
  		$this->validate($request, [	'title' => 'required']);

      $data = [
  			'title' => $request->input('title')
  		];

      $news = NewsCategory::findOrFail($id);
      $news->update($data);

      // redirect
      \Session::flash('message', 'Successfully update category!');
      return redirect()->route('backend.news.categories.index');
    }

    public function destroy($id)
  	{
  		NewsCategory::destroy($id);

      \Session::flash('message', 'Successfully delete category!');

      return redirect()->route('backend.news.categories.index');

  	}

}
