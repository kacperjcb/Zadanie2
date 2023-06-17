@extends('layouts.app')

@section('content')
    <h1>Edytuj samochód</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('cars.update', $car->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="brand">Marka</label>
            <input type="text" class="form-control" id="brand" name="brand" value="{{ $car->brand }}">
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" class="form-control" id="model" name="model" value="{{ $car->model }}">
        </div>
        <!-- Dodaj inne pola formularza, jeśli są potrzebne -->
        <button type="submit" class="btn btn-primary">Zapisz</button>
    </form>
@endsection
