@extends('layouts.backend.backend')

@section('site-title')
  {{ $brand->title }} | Products | Edit
@endsection

@section('content')

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Edit Product - {{$product->title}}
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/#/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{ route('product.index')}}">Product</a></li>
          <li><a href="{{ route('brands.show', [$category->slug, $brand->id])}}">{{ $brand->title }}</a></li>
          <li><a href="{{ route('products.index', [$category->slug, $brand->id])}}">Products</a></li>
          <li><a href="#">{{ $product->title }}</a></li>
          <li class="active"><a href="#">Edit</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Detail</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        {!! Form::model($product, ['method' => 'PATCH', 'action' => ['ProductsController@update', $category->slug, $brand->id, $product->id]]) !!}
                          {{ csrf_field() }}
                          {{ method_field('PATCH') }}
                          <div class="form-group has-feedback">
                            <input id="product_id" type="hidden" class="form-control" name="product_id" value="{{ $category->id }}" >
                            <input id="brands_id" type="hidden" class="form-control" name="brands_id" value="{{ $brand->id }}" >
                            <input id="title" type="text" class="form-control" name="title" value="{{ $product->title }}" placeholder="Product Title" required autofocus>
                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                          </div>
                          <!--
                          <div class="form-group has-feedback">
                            <textarea id="description" class="form-control" name="description" placeholder="Description" autofocus>{{ $brand->title }}</textarea>
                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                          </div>

                          <div class="form-group has-feedback">
                            <input id="thumbnail" type="file" class="form-control" name="thumbnail" placeholder="Brand Thumbnail" autofocus>
                            @if ($errors->has('thumbnail'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('thumbnail') }}</strong>
                                </span>
                            @endif
                          </div>

                          <div class="form-group has-feedback">
                            <input id="logo" type="file" class="form-control" name="logo" placeholder="Brand Logo" required autofocus>
                            @if ($errors->has('logo'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('logo') }}</strong>
                                </span>
                            @endif
                          </div> -->

                          <div class="row">
                            <div class="col-xs-4">
                              <button type="submit" class="btn btn-primary btn-block btn-flat">Save</button>
                            </div>

                          </div>
                          </div>
                        {!! Form::close() !!}
                    </div>
        </div>
      </section>
@endsection
