<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
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
      $customers = Customer::all();
      return view('customers.index', compact('customers'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('customers.new');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // validate our input description
  		$this->validate($request, [	'name' => 'required', 'logo' => 'required']);

      $data = [
  			'name' => $request->input('name')
  		];

      if ($request->hasfile('logo')) {
          $file = $request->file('logo');
          $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename = time() . '.' . $extension;
          $file->move('uploads/images/', $filename);
          $data['logo'] = $filename;
      }


      Customer::create($data);

      // redirect
      \Session::flash('message', 'Successfully created customer!');
      return redirect()->route('customers.index');

    }

    public function edit($id)
  	{
  		$customer = Customer::find($id);

      return view('customers.edit', compact('customer'));

  	}

    public function update(Request $request, $id)
    {
      // validate our input description
  		$this->validate($request, [	'name' => 'required', 'logo' => 'required']);

      $data = [
  			'name' => $request->input('name')
  		];

      if ($request->hasfile('logo')) {
          $file = $request->file('logo');
          $extension = $file->getClientOriginalExtension(); // getting image extension
          $filename = time() . '.' . $extension;
          $file->move('uploads/images/', $filename);
          $data['logo'] = $filename;
      }

      $customer = Customer::findOrFail($id);
      $customer->update($data);

      // redirect
      \Session::flash('message', 'Successfully update customer!');
      return redirect()->route('customers.index');
    }

    public function destroy($id)
  	{
  		Customer::destroy($id);

      \Session::flash('message', 'Successfully delete customer!');

      return redirect()->route('customers.index');

  	}

}
