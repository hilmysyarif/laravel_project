@extends('layouts.backend.backend')

@section('site-title')
  Enterprise
@endsection

@section('content')

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          All Enterprise
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/#/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{ route('backend.enterprise.index')}}">Enterprise</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title"></h3>
                      <p class="pull-right">
                          <a href="{{ route('backend.enterprise.create')}}" class="btn btn-success btn-xs ad-click-event">
                              New enterprise
                          </a>
                      </p>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table class="table table-bordered">
                        <tbody><tr>
                          <th style="width: 10px">#</th>
                          <th>Title</th>
                          <th>Icon</th>
                          <th>Description</th>
                          <th style="width: 40px">Action</th>
                        </tr>
                        @foreach($enterprises as $key => $value)
                          <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->title }}</td>
                            <td>{{ $value->icon }}</td>
                            <td>{!! $value->description !!}</td>
                            <td class="text-nowrap">
                              <a href="{{ route('backend.enterprise.edit', $value->id)}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a>
                              {!! Form::open([ 'method'  => 'delete', 'route' => [ 'backend.enterprise.destroy', $value->id ] ]) !!}
                                  <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                              {{ Form::close() }}

                            </td>
                          </tr>
                        @endforeach
                      </tbody></table>
                    </div>
                    <!-- /.box-body -->
                  </div>
</section>

@endsection
