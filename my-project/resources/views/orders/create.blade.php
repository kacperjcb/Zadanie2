@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Order</h1>

        <form action="{{ route('orders.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="order_number">Order Number</label>
                <input type="text" name="order_number" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" name="product_name" class="form-control" required>
            </div>
            <div class="form-group">
    <label for="client_id">Client ID</label>
    <input type="text" name="client_id" class="form-control" required>
</div>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
