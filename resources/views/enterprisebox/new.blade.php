@extends('layouts.backend.backend')

@section('site-title')
  EnterpriseBox
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
          <li><a href="{{ route('backend.enterpriseBox.index')}}">Enterprise Box</a></li>
          <li class="active">Create</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">Enterprise Box Information</h3>
                      <p class="pull-right">
                      </p>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <form class="form-horizontal col-md-6" role="form" method="POST" action="{{ route('backend.enterpriseBox.store') }}" enctype="multipart/form-data">
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
                          <input id="icon" type="text" class="form-control" name="icon" value="{{ old('icon') }}" placeholder="Icon" required autofocus>

                          @if ($errors->has('icon'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('icon') }}</strong>
                              </span>
                          @endif
                        </div>

                        <div class="form-group has-feedback">
                          <input id="thumbnail" type="file" class="form-control" name="thumbnail" placeholder="thumbnail" required autofocus>
                          @if ($errors->has('thumbnail'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('thumbnail') }}</strong>
                              </span>
                          @endif
                        </div>
                        <div class="form-group has-feedback">
                          <input id="url" type="text" class="form-control" name="url" value="{{ old('url') }}" placeholder="Url External" autofocus>
                          @if ($errors->has('url'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('url') }}</strong>
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
