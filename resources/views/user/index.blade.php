@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
  <h1>Users</h1>
@stop

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Role</th>
              <th scope="col">Options</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $key => $user)
              <tr>
                <td>{{ $user-> name }}</td>
                <td>{{ $user-> email }}</td>
                <td>
                  {{ $user-> roles-> pluck('name')-> implode(', ') }}
                </td>
                <td>
                  <a type="button" href="{{ route('users.edit', $user) }}" class="btn btn-outline-info btn-sm">Edit</a>
                  <form class="d-inline" action="{{ route('users.destroy', $user) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
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
