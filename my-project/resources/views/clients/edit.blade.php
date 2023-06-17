@extends('layouts.app')

@section('content')
    <h1>Edytuj klienta</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('clients.update', $client) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="first_name">Imię</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', $client->first_name) }}">
        </div>
        <div class="form-group">
            <label for="last_name">Nazwisko</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', $client->last_name) }}">
        </div>
        <button type="submit" class="btn btn-primary">Zapisz</button>
    </form>
@endsection
