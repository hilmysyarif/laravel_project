@extends('layouts.backend.backend')

@section('site-title')
  Create News
@endsection

@section('content')

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Create News
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/#/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{ route('backend.news.index')}}">News</a></li>
          <li class="active"><a href="#">New</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">News Information</h3>
                      <p class="pull-right">
                      </p>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <form class="form-horizontal col-md-6" role="form" method="POST" action="{{ route('backend.news.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group has-feedback">
                          <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="News Title" required autofocus>
                          @if ($errors->has('title'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('title') }}</strong>
                              </span>
                          @endif
                        </div>
                        <div class="form-group has-feedback">
                          <select id="category_id" name="category_id">
                            @foreach($category as $value)
                                <option value="{{ $value->id }}">{{ $value->title }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group has-feedback">
                          <textarea id="description" class="form-control" name="description" placeholder="Description" autofocus></textarea>
                          @if ($errors->has('description'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('description') }}</strong>
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
