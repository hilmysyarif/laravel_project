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
                          <a href="#" class="btn btn-success btn-xs ad-click-event">
                              New Brand
                          </a>
                      </p>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    </div>
        </div>
      </section>
@endsection
