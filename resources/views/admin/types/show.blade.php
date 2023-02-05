@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="py-3">
            <span>
                <strong>Complessità del progetto:</strong> {{$type->complexity}}
            </span>
        </div>
        <div class="d-flex justify-content-center">
            <a href="{{ route('admin.types.index') }}" class="btn btn-primary">Torna alla Dashboard</a>
        </div>
    </div>
@endsection