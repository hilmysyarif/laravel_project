<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AboutUs;

class AboutUsController extends Controller
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
      $aboutus   = AboutUs::all();
      return view('aboutus.index', compact('aboutus'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $category = ProductCategory::where('slug', $category)->first();
        return view('aboutus.new');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
      // validate our input description
  		$this->validate($request, [	'key' => 'required', 'value' => 'required']);

      // we have a hamburger with a valid name

      // $category = ProductCategory::find($request->input('product_id'))->first();

      $data = [
  			// 'parent_id' => $request->input('product_id'),
  			'key' => $request->input('key'),
        'value' => $request->input('value'),
        'ext' => '',
        'file' => ''
  		];

      if ($request->hasfile('file')) {
          $file = $request->file('file');
          $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename = time() . '.' . $extension;
          $file->move('uploads/images/', $filename);
          $data['file'] = $filename;
      }

      AboutUs::create($data);

      // redirect
      \Session::flash('message', 'Successfully created About!');
      return redirect()->route('aboutus.index');

    }

    public function edit($aboutId)
  	{
  		$about = AboutUs::find($aboutId);
      return view('aboutus.edit', compact('about'));

  	}

    public function update(Request $request, $aboutId)
    {
      // validate our input description
  		$this->validate($request, [	'key' => 'required', 'value' => 'required']);

      // we have a hamburger with a valid name
      $data = [
        // 'parent_id' => $request->input('product_id'),
        'key' => $request->input('key'),
        'value' => $request->input('value'),
        'ext' => $request->input('ext')
      ];


      if ($request->hasfile('file')) {
          $file = $request->file('file');
          $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename = time() . '.' . $extension;
          $file->move('uploads/images/', $filename);
          $data['file'] = $filename;
      }

      $about = AboutUs::findOrFail($aboutId);
      $about->update($data);

      // redirect
      \Session::flash('message', 'Successfully update about!');
      return redirect()->route('aboutus.index');
    }

    public function destroy($aboutId)
  	{

  		AboutUs::destroy($aboutId);

      \Session::flash('message', 'Successfully delete about!');

      return redirect()->route('aboutus.index');

  	}

}
