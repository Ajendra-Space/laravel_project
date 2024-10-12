<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    @extends('layout')

    @section('content')
    <div>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Text and Image Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <!-- Heading Section -->
    <div class="text-center">
        <h2 class="mb-3">Laravel Projects</h2>
        <h3 class="mb-4">Curd with login & logout</h3>
    </div>

    <!-- Image Section -->
    <div class="text-center">
    <img src="{{ asset('img/12.jpg') }}" class="img-fluid rounded" alt="Example Image">
</div>
</div>

<!-- Bootstrap JS (Optional for any Bootstrap JS features) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

    </div>
    @stop
</body>
</html>