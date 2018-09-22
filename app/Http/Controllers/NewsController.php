<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\NewsCategory;

class NewsController extends Controller
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
      $news = News::all();
      return view('news.index', compact('news'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $category = NewsCategory::all();
      return view('news.new',compact('category'));
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
  			'description' => $request->input('description'),
  			'category_id' => $request->input('category_id')
  		];

      if ($request->hasfile('file')) {
          $file = $request->file('file');
          $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename = time() . '.' . $extension;
          $file->move('uploads/images/', $filename);
          $data['file'] = $filename;
      }

      News::create($data);

      // redirect
      \Session::flash('message', 'Successfully created news!');
      return redirect()->route('backend.news.index');

    }

    public function edit($id)
  	{
  		$news = News::find($id);
      $category = NewsCategory::all();

      return view('news.edit', compact('news','category'));

  	}

    public function update(Request $request, $id)
    {
      // validate our input description
  		$this->validate($request, [	'title' => 'required']);

      $data = [
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'category_id' => $request->input('category_id')
      ];

      if ($request->hasfile('file')) {
          $file = $request->file('file');
          $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename = time() . '.' . $extension;
          $file->move('uploads/images/', $filename);
          $data['file'] = $filename;
      }

      $news = News::findOrFail($id);
      $news->update($data);

      // redirect
      \Session::flash('message', 'Successfully update news!');
      return redirect()->route('backend.news.index');
    }

    public function destroy($id)
  	{
  		News::destroy($id);

      \Session::flash('message', 'Successfully delete news!');

      return redirect()->route('backend.news.index');

  	}

}
