@extends('layouts.backend.backend')

@section('site-title')
  Aboout
@endsection

@section('content')

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Create About
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/#/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{ route('aboutus.index')}}">Aboutus</a></li>
          <li class="active">Create</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Brand Information</h3>
                      <p class="pull-right">
                      </p>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <form class="form-horizontal col-md-6" role="form" method="POST" action="{{ route('aboutus.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group has-feedback">
                          <input id="key" type="text" class="form-control" name="key" value="{{ old('key') }}" placeholder="About Key" required autofocus>
                          @if ($errors->has('key'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('key') }}</strong>
                              </span>
                          @endif
                        </div>
                        <div class="form-group has-feedback">
                          <textarea id="value" class="form-control" name="value" placeholder="Value" autofocus></textarea>
                          @if ($errors->has('value'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('value') }}</strong>
                              </span>
                          @endif
                        </div>

                        <div class="form-group has-feedback">
                          <input id="file" type="file" class="form-control" name="file" placeholder="File" autofocus>
                          @if ($errors->has('file'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('file') }}</strong>
                              </span>
                          @endif
                        </div>

                        <!-- <div class="form-group has-feedback">
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
                      </form>

                    </div>
        </div>
      </section>
@endsection
