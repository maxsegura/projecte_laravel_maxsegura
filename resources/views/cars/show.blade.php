@extends('layouts.app')

@section('title', 'Car Details')

@section('content')
    <h1>{{ $car->brand }} {{ $car->model }}</h1>
    <p><strong>Year:</strong> {{ $car->year }}</p>
    <p><strong>Price:</strong> ${{ number_format($car->price, 2) }}</p>
    <p><strong>Electric:</strong> {{ $car->is_electric ? 'Yes' : 'No' }}</p>

    <!-- Afegir la descripció del cotxe -->
    <p><strong>Description:</strong> {{ $car->description }}</p>

    <a href="{{ route('cars.index') }}" class="btn btn-secondary">Back</a>
@endsection
