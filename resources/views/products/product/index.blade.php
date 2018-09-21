@extends('layouts.backend.backend')

@section('site-title')
  {{ $brand->title }} | Products
@endsection

@section('content')

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          {{ $brand->title }}
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/#/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{ route('product.index')}}">Product</a></li>
          <li><a href="{{ route('brands.index', $category->slug)}}">{{ $category->title }}</a></li>
          <li><a href="{{ route('brands.show', [$category->slug, $brand->id])}}">{{ $brand->title }}</a></li>
          <li class="active"><a href="#">Products</a></li>

        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">All Products</h3>
                      <p class="pull-right">
                          <a href="{{ route('products.create', [$category->slug, $brand->id])}}" class="btn btn-success btn-xs ad-click-event">
                              New Product
                          </a>
                      </p>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table class="table table-bordered">
                        <tbody><tr>
                          <th style="width: 10px">#</th>
                          <th>Product Title</th>
                          <th>Product Thumbnail</th>
                          <th>Description</th>
                          <th style="width: 40px">Action</th>
                        </tr>
                        @foreach($products as $key => $value)
                          <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->title }}</td>
                            <td><img src="{{ asset('uploads/images/' . $value->thumbnail) }}" width="220" height="180" /></td>
                            <td>{!! $value->description !!}</td>
                            <td class="text-nowrap">
                              <a href="{{ route('products.edit',[$category->slug, $brand->id, $value->id])}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a>
                              {!! Form::open([ 'method'  => 'delete', 'route' => [ 'products.destroy', $category->slug, $brand->id, $value->id ] ]) !!}
                                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                              {{ Form::close() }}

                            </td>
                          </tr>
                        @endforeach
                      </tbody></table>
                    </div>
                    <!-- /.box-body -->
                    <!-- <div class="box-footer clearfix">
                      <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                      </ul>
                    </div> -->
                  </div>
</section>

@endsection
