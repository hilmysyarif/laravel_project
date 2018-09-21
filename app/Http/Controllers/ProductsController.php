<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
use App\ProductBrand;
use App\Product;

class ProductsController extends Controller
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
    public function index($category, $brandId)
    {
      $category = ProductCategory::where('slug', $category)->first();
      $brand = ProductBrand::find($brandId);
      $products = Product::where('brands_id', $brand->id)->get();
      return view('products.product.index', compact('category', 'brand', 'products'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($category, $brandId)
    {
        $category = ProductCategory::where('slug', $category)->first();
        $brand = ProductBrand::find($brandId);
        return view('products.product.new', compact('category', 'brand'));
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

      // we have a hamburger with a valid name
      $category = ProductCategory::where('slug', $request->input('category_id'))->first();
      $brand = ProductBrand::find($request->input('brands_id'))->first();
      $data = [
  			'brands_id' => $request->input('brands_id'),
  			'title' => $request->input('title')
        // 'description' => $request->input('description')
  		];

      // if ($request->hasfile('logo')) {
      //     $file = $request->file('logo');
      //     $extension = $file->getClientOriginalExtension(); // getting image extension
      //     $filename = time() . '.' . $extension;
      //     $file->move('uploads/images/', $filename);
      //     $data['logo'] = $filename;
      // }
      //
      // if ($request->hasfile('thumbnail')) {
      //     $file = $request->file('thumbnail');
      //     $extension = $file->getClientOriginalExtension(); // getting image extension
      //     $filename = time() . '.' . $extension;
      //     $file->move('uploads/images/', $filename);
      //     $data['thumbnail'] = $filename;
      // }

      Product::create($data);

      // redirect
      \Session::flash('message', 'Successfully created product!');
      return redirect()->route('products.index', [$category->slug, $brand->id]);

    }

    public function edit($category_id, $brandId, $productId)
  	{
  		$brand = ProductBrand::find($brandId);
      $category = ProductCategory::where('slug', $category_id)->first();
      $product = Product::find($productId);
      return view('products.product.edit', compact('category', 'brand', 'product'));

  	}

    public function show($category_id, $brandId)
  	{
  		$brand = ProductBrand::find($brandId);
  		$products = Product::where('brands_id', $brandId)->get();
      $category = ProductCategory::where('slug', $category_id)->first();
      return view('products.brands.show', compact('category', 'brand', 'products'));

  	}

    public function update(Request $request, $category_id, $brandId, $productId)
    {
      // validate our input description
  		$this->validate($request, [	'title' => 'required']);

      // we have a hamburger with a valid name

      $category = ProductCategory::where('slug', $category_id)->first();
      $brand = ProductBrand::find($brandId)->first();

      $data = [
  			'brands_id' => $request->input('brands_id'),
  			'title' => $request->input('title')
        // 'description' => $request->input('description')
  		];

      // if ($request->hasfile('logo')) {
      //     $file = $request->file('logo');
      //     $extension = $file->getClientOriginalExtension(); // getting image extension
      //     $filename = time() . '.' . $extension;
      //     $file->move('uploads/images/', $filename);
      //     $data['logo'] = $filename;
      // }
      //
      // if ($request->hasfile('thumbnail')) {
      //     $file = $request->file('thumbnail');
      //     $extension = $file->getClientOriginalExtension(); // getting image extension
      //     $filename = time() . '.' . $extension;
      //     $file->move('uploads/images/', $filename);
      //     $data['thumbnail'] = $filename;
      // }

      $product = Product::findOrFail($productId);
      $product->update($data);

      // redirect
      \Session::flash('message', 'Successfully update product!');
      return redirect()->route('products.index', [$category->slug, $brand->id]);
    }

    public function destroy($category_id, $brandId, $productId)
  	{
      $category = ProductCategory::where('slug', $category_id)->first();
      $brand = ProductBrand::find($brandId)->first();

  		Product::destroy($productId);

      \Session::flash('message', 'Successfully delete brand!');

      return redirect()->route('products.index', [$category->slug, $brand->id]);

  	}

}
