@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Touro</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('touros.update', $touro->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" id="nome" value="{{ $touro->nome }}">
        </div>
        <div class="form-group">
            <label for="idade">Idade:</label>
            <input type="number" name="idade" class="form-control" id="idade" value="{{ $touro->idade }}">
        </div>
        <div class="form-group">
            <label for="raça">Raça:</label>
            <input type="text" name="raça" class="form-control" id="raça" value="{{ $touro->raça }}">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
