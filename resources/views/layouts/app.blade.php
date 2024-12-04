<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
    html,
    body {
        height: 100%;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;
        min-height: 100vh;
        margin: 0;
    }
</style>

<body style="background-image: url('{{ asset('images/40681.jpg') }}')">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand pet-link " href="/">
                <i class="fas fa-paw"></i>
                <span style="font-family: 'Comic Sans MS', cursive; color: #6b8e23;">Pet Record</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link pet-link" href="{{ route('pets.index') }}">
                            <i class="fas fa-list"></i> Pet List
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pet-link" href="{{ route('pets.create') }}">
                            <i class="fas fa-plus-circle"></i> Add Pet
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <style>
        .navbar {
            background-color: #f1f8e9;
            border-bottom: 2px solid #6b8e23;
        }

        .navbar-brand {
            font-family: 'Comic Sans MS', cursive;
            font-weight: bold;
            color: #6b8e23;
        }

        .navbar-nav .nav-link {
            font-family: 'Arial', sans-serif;
            font-size: 16px;
        }

        .navbar-toggler {
            border-color: #6b8e23;
        }

        .navbar-toggler-icon {
            background-color: #6b8e23;
        }

        .nav-item:hover .nav-link {
            color: #8fbc8f;
        }

        .pet-link {
        color: #6b8e23;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .pet-link:hover {
        color: #4b6b14;
        transform: scale(1.1);
        text-decoration: none;
    }

    .pet-link i {
        margin-right: 5px;
    }
    </style>



    <div class="container mt-4 test">
        @yield('content')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
