@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Adicionar Touro</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('touros.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" id="nome" value="{{ old('nome') }}">
        </div>
        <div class="form-group">
            <label for="idade">Idade:</label>
            <input type="number" name="idade" class="form-control" id="idade" value="{{ old('idade') }}">
        </div>
        <div class="form-group">
            <label for="raça">Raça:</label>
            <input type="text" name="raça" class="form-control" id="raça" value="{{ old('raça') }}">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
