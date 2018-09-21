@extends('layouts.backend.backend')

@section('site-title')
  About Us
@endsection

@section('content')

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          about
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/#/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{ route('aboutus.index')}}">About</a></li>
          <li class="active">Edit</li>
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
                        {!! Form::model($about, ['method' => 'PATCH', 'action' => ['AboutUsController@update', $about->id]]) !!}
                          {{ csrf_field() }}
                          {{ method_field('PATCH') }}
                          <div class="form-group has-feedback">
                            <input id="key" type="text" class="form-control" name="key" value="{{ $about->key }}" placeholder="About Key" required autofocus>
                            @if ($errors->has('key'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('key') }}</strong>
                                </span>
                            @endif
                          </div>
                          <div class="form-group has-feedback">
                            <textarea id="value" class="form-control" name="value" placeholder="Value" autofocus>{{ $about->value }}</textarea>
                            @if ($errors->has('value'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('value') }}</strong>
                                </span>
                            @endif
                          </div>

                          <div class="form-group has-feedback">
                            <input id="file" type="file" class="form-control" name="file" placeholder="File" required autofocus>
                            @if ($errors->has('file'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('file') }}</strong>
                                </span>
                            @endif
                          </div>

                          <div class="form-group has-feedback">
                            <input id="ext" class="form-control" name="ext"  value="{{ $about->ext }}" placeholder="Value" autofocus>
                            @if ($errors->has('ext'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('ext') }}</strong>
                                </span>
                            @endif
                          </div>


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
