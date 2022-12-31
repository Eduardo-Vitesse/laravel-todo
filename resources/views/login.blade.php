@extends('layouts.main')
@section('title', 'Login')

@section('navigation')
        <a href="{{ route('register') }}" class="btn btn-primary">Registre-se</a>
@endsection

@section('content')
    <h1>Tela de login</h1>
    <a href="{{ route('home') }}">Ir para HOME</a>
@endsection
