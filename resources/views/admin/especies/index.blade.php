@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <a href="{{ route('admin.especies.create') }}" class="btn btn-secondary float-right">Crear</a>
  <h1>Listado de Especies</h1>
@stop

@section('content')
  @if (session('info'))
    <div class="alert alert-success">
      <strong>{{ session('info') }}</strong>
    </div>
  @endif
  @livewire('admin.especies-index')
@stop
