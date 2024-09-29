<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actlink</title>

    <link rel="icon" href="{{ asset('applink_.png') }}" type="image/x-icon">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        .hero {
            background-color: #f8f9fa;
            padding: 50px 0;
        }
        .event-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>

<!-- Header Section -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('applink_.png') }}" alt="Applink Logo" style="height: 40px;">
        Actlink
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('events') }}">Events</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero text-center">
    <div class="container">
        <h1 class="display-4">Join a Community Service Event Today!</h1>
        <p class="lead">Actlink is the platform to connect volunteers with meaningful service opportunities. Find an event that makes a difference in your community.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('events') }}">Browse Events</a>
    </div>
</section>

<!-- Event Grid Section -->
<section class="container my-5">
    <h2 class="text-center mb-5">Upcoming Events</h2>
    <div class="row">
        <!-- Event Card 1 -->
        <div class="col-md-4">
            <div class="event-card bg-white">
                <h4 class="card-title">Beach Cleanup</h4>
                <p class="card-text">Help clean up the local beach this weekend! All equipment will be provided. Meet us at 8 AM.</p>
                <a href="#" class="btn btn-outline-primary">View Details</a>
            </div>
        </div>
        <!-- Event Card 2 -->
        <div class="col-md-4">
            <div class="event-card bg-white">
                <h4 class="card-title">Food Drive</h4>
                <p class="card-text">Join us to distribute food packages to those in need. Volunteers will help with sorting and packaging.</p>
                <a href="#" class="btn btn-outline-primary">View Details</a>
            </div>
        </div>
        <!-- Event Card 3 -->
        <div class="col-md-4">
            <div class="event-card bg-white">
                <h4 class="card-title">Tree Planting</h4>
                <p class="card-text">Participate in a community-wide tree planting initiative to help combat deforestation. Starts at 9 AM.</p>
                <a href="#" class="btn btn-outline-primary">View Details</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer class="footer">
    <div class="container">
        <p>&copy; 2024 Actlink. All Rights Reserved.</p>
        <a href="#" class="text-white">Contact Us</a>
    </div>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
