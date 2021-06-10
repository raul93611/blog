@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
  <h1>Posts</h1>
@stop

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-bullhorn"></i>
              Last Posts
            </h3>
          </div>
          <div class="card-body">
            @foreach ($posts as $key => $post)
              <a href="{{ route('posts.show', $post) }}" class="text-body">
                <div class="callout callout-info">
                  <h5>
                    {{ $post-> title }}
                    @foreach ($post-> tags as $key => $tag)
                      <span class="badge badge-info float-right ml-1">{{ $tag-> name }}</span>
                    @endforeach
                  </h5>
                  <p>{{ $post-> description }}</p>
                </div>
              </a>
            @endforeach
          </div>
        </div>
        <div class="d-flex justify-content-center">
          {{ $posts-> links() }}
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
