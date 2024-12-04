@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="text-center">
            <h1 class="display-4">Welcome to Pet Care</h1>
            <p class="lead">Your one-stop solution for managing and caring for your pets.</p>
            <hr class="my-4">
            <hr>
            <p>Manage pet details. Add, view, and track your pets with ease.</p>
            <a class="btn btn-primary btn-lg" href="{{ route('pets.create') }}" role="button">
                Add Your Pet
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection

@section('head')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
@endsection

<style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .display-4, .lead {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    hr.my-4 {
        border-color: #ffffff;
        width: 50%;
    }
</style>
