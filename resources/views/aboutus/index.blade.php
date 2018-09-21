@extends('layouts.backend.backend')

@section('site-title')
  AboutUs
@endsection

@section('content')

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          About
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/#/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{ route('aboutus.index')}}">About</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="box">
                    <div class="box-header with-border">
                      <h3 class="box-title">All Abouts</h3>
                      <p class="pull-right">
                          <a href="{{route('aboutus.create')}}" class="btn btn-success btn-xs ad-click-event">
                              New About
                          </a>
                      </p>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table class="table table-bordered">
                        <tbody>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Key</th>
                          <th>Value</th>
                          <th>Image</th>
                          <th>Ext</th>
                          <th style="width: 40px">Action</th>
                        </tr>
                        @foreach($aboutus as $key => $value)
                          <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->key }}</td>
                            <td>{{ $value->value }}</td>
                            <td>{{ $value->file }}</td>
                            <td>{{ $value->ext }}</td>

                            <td class="text-nowrap">
                              <a href="{{ route('aboutus.edit',[ $value->id] )}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a>
                              {!! Form::open([ 'method'  => 'delete', 'route' => [ 'aboutus.destroy', $value->id ] ]) !!}
                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                              {{ Form::close() }}
                            </td>
                          </tr>
                        @endforeach
                      </tbody></table>
                    </div>
                  </div>
        </section>

@endsection
