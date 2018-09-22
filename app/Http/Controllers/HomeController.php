<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductBrand;
use App\Product;
use App\ProductCategory;
use App\AboutUs;
use App\Slider;
use App\Customer;
use App\News;
use App\NewsCategory;
use App\Enterprise;
use App\EnterpriseBox;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function brands()
    {
      $brands = ProductBrand::all();

      return response()->json(compact('brands'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getbrands($category_id)
    {
      $brands = ProductBrand::join('product_categories', 'product_categories.id', '=', 'product_brands.parent_id')->where('product_categories.slug', $category_id)->select('product_brands.*')->get();
      return response()->json(compact('brands'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProducts($brand_id)
    {
      $brand = ProductBrand::find($brand_id);
      $category = ProductCategory::join('product_brands', 'product_categories.id', '=', 'product_brands.parent_id')->where('product_categories.id', $brand->parent_id)->select('product_categories.*')->first();
      $products = Product::Leftjoin('product_images', 'products.id', '=', 'product_images.product_id')->Leftjoin('product_infos', 'products.id', '=', 'product_infos.product_id')->join('product_brands', 'products.brands_id', '=', 'product_brands.id')->where('products.brands_id', $brand->id)->select('products.*', 'product_infos.*', 'product_images.*')->get();
      return response()->json(compact('category', 'brand', 'products'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function products()
    {
      $products = Product::join()::all();

      return response()->json(compact('products'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function product_category()
    {
      $category = ProductCategory::all();

      return response()->json(compact('category'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function about_us()
    {
      $about = AboutUs::all();

      return response()->json(compact('about'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function sliders()
    {
      $sliders = Slider::all();

      return response()->json(compact('sliders'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function clients()
    {
      $customers = Customer::all();

      return response()->json(compact('customers'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function news()
    {
      $news = News::all();

      return response()->json(compact('news'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function news_category()
    {
      $categories = NewsCategory::all();

      return response()->json(compact('categories'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function enterprise()
    {
      $enterprise = Enterprise::all();

      return response()->json(compact('enterprise'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function enterprisebox()
    {
      $enterprisebox = EnterpriseBox::all();

      return response()->json(compact('enterprisebox'));
    }
}
