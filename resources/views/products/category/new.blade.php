@extends('layouts.backend.backend')

@section('site-title')
  Product Category
@endsection

@section('content')

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          New Product Category
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/#/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Product</a></li>
          <li class="active">New</li>
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
                        <form class="form-horizontal col-md-6" role="form" method="POST" action="{{ url('/backend/products') }}">
                          {{ csrf_field() }}
                          <div class="form-group has-feedback">
                            <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Title" required autofocus>
                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                          </div>
                          <div class="form-group has-feedback">
                            <input id="icon" type="text" class="form-control" name="icon" value="{{ old('icon') }}"  placeholder="Icon" required autofocus>
                            @if ($errors->has('icon'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('icon') }}</strong>
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
