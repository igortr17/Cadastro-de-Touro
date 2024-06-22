@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Touros</h1>
    <a href="{{ route('touros.create') }}" class="btn btn-primary">Adicionar Touro</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Raça</th>
            <th>Ações</th>
        </tr>
        @foreach ($touros as $touro)
        <tr>
            <td>{{ $touro->id }}</td>
            <td>{{ $touro->nome }}</td>
            <td>{{ $touro->idade }}</td>
            <td>{{ $touro->raça }}</td>
            <td>
                <form action="{{ route('touros.destroy', $touro->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('touros.show', $touro->id) }}">Mostrar</a>
                    <a class="btn btn-primary" href="{{ route('touros.edit', $touro->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
