@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
  <h1>Posts</h1>
@stop

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">{{ $post-> title }}</h3>
            </div>
            <div class="card-body p-0">
              <div class="mailbox-read-info">
                <h6>Author: {{ $post-> user-> name }}
                  <span class="mailbox-read-time float-right">{{ $post-> created_at-> format('d-m-Y H:m') }}</span></h6>
              </div>
              <div class="mailbox-read-message">
                {{ $post-> description }}
              </div>
            </div>
            <div class="card-footer">
              <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">Edit</a>
            </div>
          </div>
      </div>
    </div>
  </div>
@stop

@section('css')
@stop

@section('js')
@stop
