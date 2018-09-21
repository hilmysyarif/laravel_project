<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EnterpriseBox;

class EnterpriseBoxController extends Controller
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
      $enterprisesBox = EnterpriseBox::all();
      return view('enterpriseBox.index', compact('enterprisesBox'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('enterpriseBox.new');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // validate our input thumbnail
  		$this->validate($request, [	'title' => 'required' ] );

      $data = [
  			'title' => $request->input('title'),
  			'url' => $request->input('url'),
  		];

      if ($request->hasfile('icon')) {
          $file = $request->file('icon');
          $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename = time() . '.' . $extension;
          $file->move('uploads/images/', $filename);
          $data['icon'] = $filename;
      }

      if ($request->hasfile('thumbnail')) {
          $file = $request->file('thumbnail');
          $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename = time() . '.' . $extension;
          $file->move('uploads/images/', $filename);
          $data['thumbnail'] = $filename;
      }

      EnterpriseBox::create($data);

      // redirect
      \Session::flash('message', 'Successfully created!');
      return redirect()->route('backend.enterpriseBox.index');

    }

    public function edit($id)
  	{
  		$enterpriseBox = EnterpriseBox::find($id);

      return view('enterpriseBox.edit', compact('enterpriseBox'));

  	}

    public function update(Request $request, $id)
    {
      // validate our input thumbnail
      $this->validate($request, [	'title' => 'required' ] );

      $data = [
        'title' => $request->input('title'),
        'url' => $request->input('url'),
      ];

      if ($request->hasfile('icon')) {
          $file = $request->file('icon');
          $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename = time() . '.' . $extension;
          $file->move('uploads/images/', $filename);
          $data['icon'] = $filename;
      }

      if ($request->hasfile('thumbnail')) {
          $file = $request->file('thumbnail');
          $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename = time() . '.' . $extension;
          $file->move('uploads/images/', $filename);
          $data['thumbnail'] = $filename;
      }

      $enterpriseBox = EnterpriseBox::findOrFail($id);
      $enterpriseBox->update($data);

      // redirect
      \Session::flash('message', 'Successfully update enterpriseBox!');
      return redirect()->route('backend.enterpriseBox.index');
    }

    public function destroy($id)
  	{
  		EnterpriseBox::destroy($id);

      \Session::flash('message', 'Successfully delete section!');

      return redirect()->route('backend.enterpriseBox.index');

  	}

}
