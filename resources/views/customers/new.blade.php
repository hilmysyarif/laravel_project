@extends('layouts.backend.backend')

@section('site-title')
  New Customer
@endsection

@section('content')

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Create Product
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/#/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{ route('customers.index')}}">Customers</a></li>
          <li class="active"><a href="#">New</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Customer Information</h3>
                      <p class="pull-right">
                      </p>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <form class="form-horizontal col-md-6" role="form" method="POST" action="{{ route('customers.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group has-feedback">
                          <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Customer Name" required autofocus>
                          @if ($errors->has('name'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                        </div>
                        <!-- <div class="form-group has-feedback">
                          <textarea id="description" class="form-control" name="description" placeholder="Description" autofocus></textarea>
                          @if ($errors->has('description'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('description') }}</strong>
                              </span>
                          @endif
                        </div> -->
<!--
                        <div class="form-group has-feedback">
                          <input id="thumbnail" type="file" class="form-control" name="thumbnail" placeholder="Brand Thumbnail" required autofocus>
                          @if ($errors->has('thumbnail'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('thumbnail') }}</strong>
                              </span>
                          @endif
                        </div> -->

                        <div class="form-group has-feedback">
                          <input id="logo" type="file" class="form-control" name="logo" placeholder="Customer Logo" required autofocus>
                          @if ($errors->has('logo'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('logo') }}</strong>
                              </span>
                          @endif
                        </div>

                        <div class="row">
                          <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Save</button>
                          </div>

                        </div>
                        </div>
                      </form>

                    </div>
        </div>
      </section>
@endsection
