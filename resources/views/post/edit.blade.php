@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
  <h1>Posts</h1>
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
            <h3 class="card-title">Edit Post</h3>
          </div>
          <form method="post" action="{{ route('posts.update', $post) }}">
            @csrf
            @method('PATCH')
            <div class="card-body">
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{ $post-> title }}">
                {!! $errors-> first('title', '<span class="small text-danger">:message</span>') !!}
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description" placeholder="Description" rows="8" cols="80">{{ $post-> description }}</textarea>
                {!! $errors-> first('description', '<span class="small text-danger">:message</span>') !!}
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
