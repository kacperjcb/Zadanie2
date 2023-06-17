
@extends('layouts.app')
@section('content')
    <h1>Lista samochodów</h1>
    <a href="{{ route('cars.create') }}" class="btn btn-primary">Dodaj samochód</a>
    <table class="table">
        <thead>
            <tr>
                <th>Marka</th>
                <th>Model</th>
                <!-- Dodaj inne kolumny, jeśli są potrzebne -->
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->model }}</td>
                    <!-- Dodaj wartości innych kolumn, jeśli są potrzebne -->
                    <td>
                        <a href="{{ route('cars.edit', $car) }}" class="btn btn-primary">Edytuj</a>
                        <form action="{{ route('cars.destroy', $car) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Usuń</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
