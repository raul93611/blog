@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
  <h1>Users</h1>
@stop

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        @if (session()-> has('info'))
          <div class="alert alert-success alert-dismissible">
            <h5><i class="icon fas fa-check"></i> Alert!</h5>
            {{ session('info') }}
          </div>
        @endif
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit User</h3>
          </div>
          <form method="post" action="{{ route('users.update', $user) }}">
            @method('PUT')
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="" name="name" value="{{ $user-> name }}">
                {!! $errors-> first('name', '<span class="small text-danger">:message</span>') !!}
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="" name="email" value="{{ $user-> email }}">
                {!! $errors-> first('email', '<span class="small text-danger">:message</span>') !!}
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@stop

@section('css')
@stop

@section('js')
@stop
