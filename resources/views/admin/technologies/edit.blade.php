@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-center my-3">Modifica la Technologia</h1>
        {{-- Condizione Error --}}
        @include('commons.error')
            
        <form action="{{ route('admin.technologies.update', $technology) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Technologia utilizzata:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $technology->name) }}">
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">Modifica</button>
            </div>
        </form>
    </div>
@endsection