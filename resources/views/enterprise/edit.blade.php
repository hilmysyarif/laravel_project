@extends('layouts.backend.backend')

@section('site-title')
  Enterprise - Edit
@endsection

@section('content')

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Enterprise - Edit
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/#/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"><a href="#">Edit</a></li>
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
                      {!! Form::model($enterprise, ['method' => 'PATCH', 'action' => ['EnterpriseController@update', $enterprise->id]]) !!}
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group has-feedback">
                          <input id="title" type="text" class="form-control" name="title" value="{{ $enterprise->title }}" placeholder="Title" required autofocus>
                          @if ($errors->has('key'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('key') }}</strong>
                              </span>
                          @endif
                        </div>


                        <div class="form-group has-feedback">
                          <p> Icon</p>
                          <input id="icon" type="file" class="form-control" name="icon" placeholder="File" required autofocus>
                          <img src="{{ asset('uploads/images/' . $enterprise->icon) }}" width="85" height="85" />
                          @if ($errors->has('icon'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('icon') }}</strong>
                              </span>
                          @endif
                        </div>

                        <div class="form-group has-feedback">
                          <p> Thumbnail</p>
                          <input id="thumbnail" type="file" class="form-control" name="thumbnail" placeholder="Thumbnail" required autofocus>
                          <img src="{{ asset('uploads/images/' . $enterprise->thumbnail) }}" width="85" height="85" />
                          @if ($errors->has('thumbnail'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('thumbnail') }}</strong>
                              </span>
                          @endif
                        </div>

                        <div class="form-group has-feedback">
                          <textarea id="description" class="form-control" name="description" placeholder="Description" autofocus>{{ $enterprise->description }}</textarea>
                          @if ($errors->has('description'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('description') }}</strong>
                              </span>
                          @endif
                        </div>


                        <div class="row">
                          <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Update</button>
                          </div>
                        </div>
                    </div>
        </div>
      </section>
@endsection
