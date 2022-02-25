@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <a href="{{ route('admin.razas.create') }}" class="btn btn-secondary float-right">Crear</a>
  @if (session('info'))
    <div class="alert alert-success">
      <strong>{{ session('info') }}</strong>
    </div>
  @endif

  <h1>Listado de Razas</h1>
@stop

@section('content')
  @livewire('admin.razas-index')
@stop

@section('css')
  <link rel="stylesheet" href="/css/admin_custom.css">
@stop
