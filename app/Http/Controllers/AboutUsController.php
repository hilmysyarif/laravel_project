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
      return view('aboutus.index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create($category)
    // {
    //     $category = ProductCategory::where('slug', $category)->first();
    //     return view('products.brands.new', compact('category'));
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //   // validate our input description
  	// 	$this->validate($request, [	'title' => 'required', 'logo' => 'required']);
    //
    //   // we have a hamburger with a valid name
    //
    //   $category = ProductCategory::find($request->input('product_id'))->first();
    //
    //   $data = [
  	// 		'parent_id' => $request->input('product_id'),
  	// 		'title' => $request->input('title'),
    //     'description' => $request->input('description')
  	// 	];
    //
    //   if ($request->hasfile('logo')) {
    //       $file = $request->file('logo');
    //       $extension = $file->getClientOriginalExtension(); // getting image extension
    //       $filename = time() . '.' . $extension;
    //       $file->move('uploads/images/', $filename);
    //       $data['logo'] = $filename;
    //   }
    //
    //   if ($request->hasfile('thumbnail')) {
    //       $file = $request->file('thumbnail');
    //       $extension = $file->getClientOriginalExtension(); // getting image extension
    //       $filename = time() . '.' . $extension;
    //       $file->move('uploads/images/', $filename);
    //       $data['thumbnail'] = $filename;
    //   }
    //
    //   ProductBrand::create($data);
    //
    //   // redirect
    //   \Session::flash('message', 'Successfully created brand!');
    //   return redirect()->route('brands.index', [$category->slug]);
    //
    // }

    // public function edit($category_id, $brandId)
  	// {
  	// 	$brand = ProductBrand::find($brandId);
    //   $category = ProductCategory::where('slug', $category_id)->first();
    //   return view('products.brands.edit', compact('category', 'brand'));
    //
  	// }

    // public function update(Request $request, $category_id, $brandId)
    // {
    //   // validate our input description
  	// 	$this->validate($request, [	'title' => 'required', 'logo' => 'required']);
    //
    //   // we have a hamburger with a valid name
    //
    //   $category = ProductCategory::where('slug', $category_id)->first();
    //
    //   $data = [
  	// 		'parent_id' => $request->input('product_id'),
  	// 		'title' => $request->input('title'),
    //     'description' => $request->input('description')
  	// 	];
    //
    //   if ($request->hasfile('logo')) {
    //       $file = $request->file('logo');
    //       $extension = $file->getClientOriginalExtension(); // getting image extension
    //       $filename = time() . '.' . $extension;
    //       $file->move('uploads/images/', $filename);
    //       $data['logo'] = $filename;
    //   }
    //
    //   if ($request->hasfile('thumbnail')) {
    //       $file = $request->file('thumbnail');
    //       $extension = $file->getClientOriginalExtension(); // getting image extension
    //       $filename = time() . '.' . $extension;
    //       $file->move('uploads/images/', $filename);
    //       $data['thumbnail'] = $filename;
    //   }
    //
    //   $product = ProductBrand::findOrFail($brandId);
    //   $product->update($data);
    //
    //   // redirect
    //   \Session::flash('message', 'Successfully update brand!');
    //   return redirect()->route('brands.index', [$category->slug]);
    // }

    // public function destroy($category_id, $brandId)
  	// {
    //   $category = ProductCategory::where('slug', $category_id)->first();
    //
  	// 	ProductBrand::destroy($brandId);
    //
    //   \Session::flash('message', 'Successfully delete brand!');
    //
    //   return redirect()->route('brands.index', [$category->slug]);
    //
  	// }

}
