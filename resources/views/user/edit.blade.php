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
            @include('user.form')
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
