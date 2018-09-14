<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductBrandsController extends Controller
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
      // switch ($product_id) {
      //   case 'home-router':
      return view('products.brands.index');
      //   default:
      //     return 'error';
      //     break;
      //
      // }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function new()
    {
        return view('products.brands.new');
    }
}
