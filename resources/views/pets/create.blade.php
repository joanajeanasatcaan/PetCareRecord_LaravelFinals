@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Pet</h1>
    <form action="{{ route('pets.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Pet Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter pet name" required>
        </div>
        <div class="form-group">
            <label for="species">Species</label>
            <input type="text" class="form-control" id="species" name="species" placeholder= "Enter species (e.g., Dog, Cat)" required>
        </div>
        <div class="form-group">
            <label for="breed">Breed</label>
            <input type="text" class="form-control" id="breed" name="breed" placeholder= "Enter pet breed"required>
        </div>
        <div class="form-group">
            <label for="age">Months</label>
            <input type="number" class="form-control " id="age" name="age" placeholder="Enter Months of your pet" required>
        </div>
        <button type="submit" class="mt-3 btn btn-primary">Add Pet</button>
    </form>
</div>
@endsection
