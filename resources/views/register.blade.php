@extends('layouts.main')
@section('title', 'Login')

@section('navigation')
        <a href="{{ route('login') }}" class="btn btn-primary">Faça login</a>
@endsection

@section('content')
    <h1>Tela de Registro</h1>
@endsection
