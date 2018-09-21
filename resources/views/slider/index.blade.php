@extends('layouts.backend.backend')

@section('site-title')
  Slider
@endsection

@section('content')

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          All Sliders
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/#/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{ route('backend.slider.index')}}">Sliders</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title"></h3>
                      <p class="pull-right">
                          <a href="{{ route('backend.slider.create')}}" class="btn btn-success btn-xs ad-click-event">
                              New Slide
                          </a>
                      </p>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table class="table table-bordered">
                        <tbody><tr>
                          <th style="width: 10px">#</th>
                          <th>Description</th>
                          <th>Image</th>
                          <th>Featured</th>
                          <th style="width: 40px">Action</th>
                        </tr>
                        @foreach($sliders as $key => $value)
                          <tr>
                            <td>{{ $value->id }}</td>
                            <td>{!! $value->description !!}</td>
                            <td><img src="{{ asset('uploads/images/' . $value->logo) }}" width="220" height="180" /></td>
                            <td>{!! $value->featured !!}</td>
                            <td class="text-nowrap">
                              <a href="{{ route('backend.slider.edit', $value->id)}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a>
                              {!! Form::open([ 'method'  => 'delete', 'route' => [ 'backend.slider.destroy', $value->id ] ]) !!}
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
