@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-center my-3">Modifica {{ $project->name }}</h1>
        {{-- Condizione Error --}}
        @include('commons.error')
            
        <form action="{{ route('admin.projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nome Progetto:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $project->name) }}">
            </div>
            <div class="mb-3">
                <label for="name_client" class="form-label">Nome Cliente:</label>
                <input type="text" class="form-control" id="name" name="name_client" value="{{ old('name_client', $project->name_client) }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione:</label>
                <textarea class="form-control" id="description" name="description" rows="5" >{{ old('description', $project->description) }}</textarea>
            </div>
            <div class="mb-3">
                <p>Tecnologia\e utilizzate: </p>
                @foreach ($technologies as $technology )    
                <div class="form-check form-check-inline">
                    @if ($errors->any())
                        <input class="form-check-input" type="checkbox" id="{{$technology->slug}}" value="{{$technology->id}}" name="technologies[]" {{in_array( $technology->id, old('technologies', [])) ? 'checked' : ''}}>
                    @else
                        <input class="form-check-input" type="checkbox" id="{{$technology->slug}}" 
                        value="{{$technology->id}}" name="technologies[]" {{ $project->technologies->contains($technology->id) ? 'checked' : ''}}
                        >
                    @endif
                    <label class="form-check-label" for="{{$technology->slug}}">
                        {{$technology->name}}
                    </label>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-warning">Modifica</button>
            </div>
        </form>
    </div>
@endsection