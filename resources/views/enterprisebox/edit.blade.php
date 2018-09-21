@extends('layouts.backend.backend')

@section('site-title')
  EnterpriseBox
@endsection

@section('content')

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Edit Enterprise Box
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/#/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{ route('backend.enterpriseBox.index')}}">Enterprise Box</a></li>
          <li class="active">Edit</li>
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
                        {!! Form::model($enterpriseBox, ['method' => 'PATCH', 'action' => ['EnterpriseBoxController@update', $enterpriseBox->id]]) !!}
                          {{ csrf_field() }}
                          {{ method_field('PATCH') }}
                          <div class="form-group has-feedback">
                            <input id="title" type="text" class="form-control" name="title" value="{{ $enterpriseBox->title }}" placeholder="Title" required autofocus>
                            @if ($errors->has('key'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('key') }}</strong>
                                </span>
                            @endif
                          </div>


                          <div class="form-group has-feedback">
                            <p> Icon</p>
                            <input id="icon" type="file" class="form-control" name="icon" placeholder="File" required autofocus>
                            <img src="{{ asset('uploads/images/' . $enterpriseBox->icon) }}" width="85" height="85" />
                            @if ($errors->has('icon'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('icon') }}</strong>
                                </span>
                            @endif
                          </div>

                          <div class="form-group has-feedback">
                            <p> Thumbnail</p>
                            <input id="thumbnail" type="file" class="form-control" name="thumbnail" placeholder="Thumbnail" required autofocus>
                            <img src="{{ asset('uploads/images/' . $enterpriseBox->thumbnail) }}" width="85" height="85" />
                            @if ($errors->has('thumbnail'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('thumbnail') }}</strong>
                                </span>
                            @endif
                          </div>

                          <div class="form-group has-feedback">
                            <input id="url" class="form-control" name="url"  value="{{ $enterpriseBox->url }}" placeholder="Value" autofocus>
                            @if ($errors->has('url'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('url') }}</strong>
                                </span>
                            @endif
                          </div>


                          <div class="row">
                            <div class="col-xs-4">
                              <button type="submit" class="btn btn-primary btn-block btn-flat">Update</button>
                            </div>
                          </div>

                      </div>
                        {!! Form::close() !!}
                    </div>
        </div>
      </section>
@endsection
