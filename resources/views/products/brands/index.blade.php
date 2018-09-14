@extends('layouts.backend.backend')

@section('site-title')
  Product Brands
@endsection

@section('content')

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Product Brands
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/#/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Product</a></li>
          <li class="active">Brands</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">All Brands</h3>
                      <p class="pull-right">
                          <a href="/backend/products/brands/new" class="btn btn-success btn-xs ad-click-event">
                              New Brand
                          </a>
                      </p>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table class="table table-bordered">
                        <tbody><tr>
                          <th style="width: 10px">#</th>
                          <th>Parent</th>
                          <th>Brand Title</th>
                          <th>Brand Image</th>
                          <th>Brand Logo</th>
                          <th>Description</th>
                          <th style="width: 40px">Action</th>
                        </tr>
                        <tr>
                          <td>1.</td>
                          <td></td>
                          <td>
                          </td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td class="text-nowrap">
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                      </tbody></table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                      <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                      </ul>
                    </div>
                  </div>
</section>

@endsection
