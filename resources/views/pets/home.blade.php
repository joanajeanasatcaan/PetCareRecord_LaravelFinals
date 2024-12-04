@extends('layouts.app')

@section('content')
    <div class="text-center jumbotron">
        <h1 class="display-4">Welcome to Pet Care</h1>
        <p class="lead">Your one-stop solution for managing and caring for your pets.</p>
        <hr class="my-4">
        <p>Manage pet details, health records, and more. Add, view, and track your pets with ease.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('pets.create') }}" role="button">
            Add Your Pet
        </a>
    </div>
@endsection
