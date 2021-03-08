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
        <h3>Comments</h3>
        <div class="timeline">
        @foreach ($post-> comments as $key => $comment)
          <div>
            <i class="fas fa-comments bg-yellow"></i>
            <div class="timeline-item">
              <span class="time"><i class="fas fa-clock"></i> {{ $comment-> created_at }}</span>
              <h3 class="timeline-header"><b>{{ $comment-> user-> name }}</b> commented on your post</h3>
              <div class="timeline-body">
                {{ $comment-> body }}
              </div>
            </div>
          </div>
        @endforeach
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
