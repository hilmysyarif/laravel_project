<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SlidersController extends Controller
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
      $sliders = Slider::all();
      return view('slider.index', compact('sliders'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('slider.new');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // validate our input description
  		$this->validate($request, [	'featured' => 'required']);

      $data = [
  			'title' => $request->input('title'),
  			'icon' => $request->input('icon'),
  			'description' => $request->input('description'),
  		];


      Enterprise::create($data);

      // redirect
      \Session::flash('message', 'Successfully created section!');
      return redirect()->route('backend.slider.index');

    }

    public function edit($id)
  	{
  		$slide = Slider::find($id);

      return view('slider.edit', compact('slide'));

  	}

    public function update(Request $request, $id)
    {
      // validate our input description
  		$this->validate($request, [	'featured' => 'required']);

      $data = [
  			'title' => $request->input('title'),
  			'icon' => $request->input('icon'),
  			'description' => $request->input('description')
  		];

      $slide = Slider::findOrFail($id);
      $slide->update($data);

      // redirect
      \Session::flash('message', 'Successfully update slide!');
      return redirect()->route('backend.slider.index');
    }

    public function destroy($id)
  	{
  		Enterprise::destroy($id);

      \Session::flash('message', 'Successfully delete slide!');

      return redirect()->route('backend.slider.index');

  	}

}
