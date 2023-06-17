
@extends('layouts.app')

@section('content')
    <h1>Dodaj klienta</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="first_name">Imię</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}">
        </div>
        <div class="form-group">
            <label for="last_name">Nazwisko</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}">
        </div>
        <button type="submit" class="btn btn-primary">Dodaj</button>
    </form>
@endsection
