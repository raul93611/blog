@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <h1>Dashboard</h1>
@stop

@section('content')
  <p>Welcome to this beautiful admin panel.</p>
@stop
@include('user.messages.messages_modal')
@section('css')
@stop
@section('js')
  <script src="/js/main.js"></script>
@stop
