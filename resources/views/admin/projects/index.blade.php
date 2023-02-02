@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Lista Progetti</h1>
    @include('commons.message')
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome Progetto</th>
                <th scope="col">Slug</th>
                <th scope="col">Nome Cliente</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <th>{{$project->id}}</th>
                <td>{{$project->name}}</td>
                <td>{{$project->slug}}</td>
                <td>{{$project->name_client}}</td>
                <td>
                    <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-success">Dettagli</a>
                    <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning">Modifica</a>
                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger">Elimina</button>
                    </form>
                </td>
            </tr>                
            @endforeach
        </tbody>
    </table>
    <div class="my-5 text-center">
        <a href="{{ route('admin.projects.create') }}" class="btn btn-secondary">Crea un progetto</a>
    </div>
</div>
@endsection