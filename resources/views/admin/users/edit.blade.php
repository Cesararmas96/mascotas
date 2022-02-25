@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <h1>Asignar Un Rol</h1>
@stop

@section('content')
  @if (session('info'))
    <div class="alert alert-success">
      <strong>{{ session('info') }}</strong>
    </div>
  @else
  @endif
  <div class="card">
    <div class="card-body">

      {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
      @include('admin.users.partials.form')


    </div>
    {!! Form::submit('Asignar', ['class' => 'btn btn-primary mt-2']) !!}
    {!! Form::close() !!}
  </div>

@stop

@section('css')
  <link rel="stylesheet" href="/css/admin_custom.css">
@stop
