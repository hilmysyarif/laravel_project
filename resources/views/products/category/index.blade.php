@extends('layouts.backend.backend')

@section('site-title')
  Product Categories
@endsection

@section('content')

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Product Categories
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/#/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Product</a></li>
          <li class="active">Categories</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">All Categories</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table class="table table-bordered">
                        <tbody><tr>
                          <th style="width: 10px">#</th>
                          <th>Name</th>
                          <th>Slug</th>
                          <th>Icon</th>
                          <th style="width: 40px">Action</th>
                        </tr>
                        @foreach($category as $key => $value)
                          <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->title}}</td>
                            <td>{{ $value->slug }}</td>
                            <td>{{ $value->icon }}</td>
                            <td class="text-nowrap">
                              <a href="{{route('backend.brands.index',  $value->slug)}}" class="btn btn-info btn-xs">Brands</a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody></table>
                    </div>
</section>

@endsection
