@extends('layouts.app')

@section('title', 'Edit Car')

@section('content')
    <h1>Edit Car</h1>
    <form action="{{ route('cars.update', $car->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Defineix el mètode PUT per actualitzar les dades -->

        <!-- Brand -->
        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" value="{{ old('brand', $car->brand) }}" required>
        </div>

        <!-- Model -->
        <div class="mb-3">
            <label for="model" class="form-label">Model</label>
            <input type="text" class="form-control" id="model" name="model" value="{{ old('model', $car->model) }}" required>
        </div>

        <!-- Year -->
        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="number" class="form-control" id="year" name="year" value="{{ old('year', $car->year) }}" required>
        </div>

        <!-- Price -->
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price', $car->price) }}" required>
        </div>

        <!-- Electric -->
        <div class="mb-3">
            <label for="is_electric" class="form-label">Electric</label>
            <select class="form-control" id="is_electric" name="is_electric">
                <option value="0" {{ !$car->is_electric ? 'selected' : '' }}>No</option>
                <option value="1" {{ $car->is_electric ? 'selected' : '' }}>Yes</option>
            </select>
        </div>

        <!-- Description (Optional, add this if required) -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" required>{{ old('description', $car->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection

