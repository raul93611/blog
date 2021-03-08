@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
  <h1>Users</h1>
@stop

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle" src="/user.png" alt="User profile picture">
            </div>
            <h3 class="profile-username text-center">{{ $user-> name }}</h3>
            <p class="text-muted text-center">Software Engineer</p>
            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>{{ $user-> email }}</b>
              </li>
            </ul>
            <a href="{{ route('users.edit', $user) }}" class="btn btn-primary btn-block"><b>Edit</b></a>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
@include('user.messages.messages_modal')
@section('css')
@stop
@section('js')
  <script src="/js/main.js"></script>
@stop
