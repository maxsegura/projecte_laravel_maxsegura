@extends('layouts.app')

@section('title', 'Movie Details')

@section('content')
    <h1>{{ $movie->title }}</h1>
    <p><strong>Release Year:</strong> {{ $movie->release_year }}</p>
    <p><strong>Genre:</strong> {{ $movie->genre }}</p>
    <p><strong>Rating:</strong> {{ $movie->rating }}</p>
    <p><strong>Description:</strong> {{ $movie->description }}</p>
    <a href="{{ route('movies.index') }}" class="btn btn-secondary">Back</a>
@endsection
