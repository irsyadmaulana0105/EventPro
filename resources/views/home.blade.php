<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - EventPro</title>
    <!-- Tambahkan CSS Framework (contoh: Bootstrap) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Tambahkan gaya khusus di sini */
        body {
            font-family: Arial, sans-serif;
        }
        .hero {
            background-color: #76ABAE;
            color: #EEEEEE;
            padding: 100px 0;
            text-align: center;
        }
        .event-card {
            border: 1px solid #31363F;
            margin-bottom: 20px;
            padding: 15px;
            background-color: #EEEEEE;
        }
    </style>
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-dark" style="background-color: #31363F;">
        <a class="navbar-brand" href="#">EventPro</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login/Register</a>
                </li>
            </ul>
        </div>
    </header>

    <div class="hero">
        <h1>Welcome to EventPro</h1>
        <p>Your go-to platform for buying tickets to the best events.</p>
        <a href="#" class="btn btn-light">Register Now</a>
    </div>

    <div class="container mt-5">
        <h2>Featured Events</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="event-card">
                    <h3>Concert A</h3>
                    <p>Date: 25th Dec 2025</p>
                    <p>Location: Jakarta</p>
                    <a href="#" class="btn btn-primary">Buy Ticket</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="event-card">
                    <h3>Theater B</h3>
                    <p>Date: 30th Jan 2026</p>
                    <p>Location: Surabaya</p>
                    <a href="#" class="btn btn-primary">Buy Ticket</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="event-card">
                    <h3>Movie C</h3>
                    <p>Date: 14th Feb 2026</p>
                    <p>Location: Bali</p>
                    <a href="#" class="btn btn-primary">Buy Ticket</a>
                </div>
            </div>
        </div>
    </div>

