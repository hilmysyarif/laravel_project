@extends('layouts.backend.backend')

@section('site-title')
  {{ $news->title }} - Edit
@endsection

@section('content')

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          {{ $news->title }} - Edit
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/#/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{ route('news.index')}}">News</a></li>
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
                        {!! Form::model($news, ['method' => 'PATCH', 'action' => ['NewsController@update', $news->id]]) !!}
                          {{ csrf_field() }}
                          {{ method_field('PATCH') }}
                          <div class="form-group has-feedback">
                            <input id="name" type="text" class="form-control" name="name" value="{{ $news->title }}" placeholder="News title" required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
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
                            <textarea id="description" class="form-control" name="description" placeholder="Description" autofocus>{{$news->description}}</textarea>
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
                        {!! Form::close() !!}
                    </div>
        </div>
      </section>
@endsection
