<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enterprise;

class EnterpriseController extends Controller
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
      $enterprises = Enterprise::all();
      return view('enterprise.index', compact('enterprises'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('enterprise.new');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // validate our input description
  		$this->validate($request, [	'title' => 'required', 'icon' => 'required', 'description' => 'required']);

      $data = [
  			'title' => $request->input('title'),
  			'icon' => $request->input('icon'),
  			'description' => $request->input('description'),
  		];


      Enterprise::create($data);

      // redirect
      \Session::flash('message', 'Successfully created section!');
      return redirect()->route('backend.enterprise.index');

    }

    public function edit($id)
  	{
  		$enterprise = Enterprise::find($id);

      return view('enterprise.edit', compact('enterprise'));

  	}

    public function update(Request $request, $id)
    {
      // validate our input description
  		$this->validate($request, [	'title' => 'required', 'icon' => 'required', 'description' => 'required']);

      $data = [
  			'title' => $request->input('title'),
  			'icon' => $request->input('icon'),
  			'description' => $request->input('description')
  		];

      $enterprise = Enterprise::findOrFail($id);
      $enterprise->update($data);

      // redirect
      \Session::flash('message', 'Successfully update enterprise!');
      return redirect()->route('backend.enterprise.index');
    }

    public function destroy($id)
  	{
  		Enterprise::destroy($id);

      \Session::flash('message', 'Successfully delete section!');

      return redirect()->route('backend.enterprise.index');

  	}

}
