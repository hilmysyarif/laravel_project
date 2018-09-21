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
      return view('news.new');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // validate our input description
  		$this->validate($request, [	'name' => 'required']);

      $data = [
  			'title' => $request->input('title'),
  			'description' => $request->input('description')
  		];


      News::create($data);

      // redirect
      \Session::flash('message', 'Successfully created news!');
      return redirect()->route('backend.news.index');

    }

    public function edit($id)
  	{
  		$news = News::find($id);

      return view('news.edit', compact('news'));

  	}

    public function update(Request $request, $id)
    {
      // validate our input description
  		$this->validate($request, [	'title' => 'required']);

      $data = [
  			'title' => $request->input('title'),
  			'description' => $request->input('description')
  		];

      // if ($request->hasfile('logo')) {
      //     $file = $request->file('logo');
      //     $extension = $file->getClientOriginalExtension(); // getting image extension
      //     $filename = time() . '.' . $extension;
      //     $file->move('uploads/images/', $filename);
      //     $data['logo'] = $filename;
      // }

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
