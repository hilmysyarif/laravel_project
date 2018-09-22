@extends('layouts.backend.backend')

@section('site-title')
  {{ $category->title }}
@endsection

@section('content')

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          {{ $category->title }}
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/#/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{ route('product.index')}}">Product</a></li>
          <li><a href="#">{{ $category->title }}</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">All Brands</h3>
                      <p class="pull-right">
                          <a href="{{ route('backend.brands.create', $category->slug)}}" class="btn btn-success btn-xs ad-click-event">
                              New Brand
                          </a>
                      </p>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table class="table table-bordered">
                        <tbody><tr>
                          <th style="width: 10px">#</th>
                          <th>Brand Title</th>
                          <th>Brand Image</th>
                          <th>Brand Logo</th>
                          <th>Description</th>
                          <th style="width: 40px">Action</th>
                        </tr>
                        @foreach($brands as $key => $value)
                          <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->title }}</td>
                            <td><img src="{{ asset('uploads/images/' . $value->thumbnail) }}" width="220" height="180" /></td>
                            <td><img src="{{ asset('uploads/images/' . $value->logo) }}" width="85" height="85" /></td>
                            <td>{!! $value->description !!}</td>
                            <td class="text-nowrap">
                              <a href="{{route('backend.products.index',  [$category->slug, $value->id])}}" class="btn btn-success btn-xs">Products</a>
                              <a href="{{ route('backend.brands.edit',[$category->slug, $value->id])}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a>
                              {!! Form::open([ 'method'  => 'delete', 'route' => [ 'backend.brands.destroy', $category->slug, $value->id ] ]) !!}
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
