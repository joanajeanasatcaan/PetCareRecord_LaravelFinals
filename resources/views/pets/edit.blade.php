@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pet</h1>
    <form action="{{ route('pets.update', $pet->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Pet Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $pet->name) }}" required>
        </div>

        <div class="form-group">
            <label for="species">Species</label>
            <input type="text" class="form-control" id="species" name="species" value="{{ old('species', $pet->species) }}" required>
        </div>

        <div class="form-group">
            <label for="breed">Breed</label>
            <input type="text" class="form-control" id="breed" name="breed" value="{{ old('breed', $pet->breed) }}" required>
        </div>

        <div class="form-group">
            <label for="age">Months</label>
            <input type="number" class="form-control" id="age" name="age" value="{{ old('age', $pet->age) }}" required>
        </div>

        <button type="submit" class="mt-3 btn btn-primary">Update Pet</button>
    </form>
</div>
@endsection
