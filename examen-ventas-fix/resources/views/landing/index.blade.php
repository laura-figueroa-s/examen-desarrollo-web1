<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Name</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .content-wrapper {
            flex: 1;
        }
        .full-width-section {
            width: 100%;
            padding: 20px;
        }
        .intro-section {
            background-color: #d0e7ff; /* Light blue background */
        }
        .content-section {
            background-color: whitesmoke; /* White smoke background */
        }
        footer {
            background-color: #f8f9fa;
            text-align: center;
            padding: 10px 0;
            margin-top: auto; /* Ensures footer stays at the bottom */
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Lorem ipsum</a>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main content -->
<div class="content-wrapper">
    <div class="container-fluid text-center">
        <h1>Bienvenido</h1>

        <div class="intro-section full-width-section mt-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula, est sit amet facilisis tristique, libero metus cursus felis, ac blandit libero nisl eget elit. Nulla facilisi. Maecenas ac nibh sed purus tempus viverra vel nec purus.</p>
        </div>

        <div class="content-section full-width-section mt-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vehicula, lacus eget dictum faucibus, justo est dictum nisl, nec gravida sapien ligula sit amet est. Suspendisse id erat eget metus ullamcorper vehicula at sit amet mauris.</p>
        </div>
    </div>
</div>

<!-- Footer-->
<footer>
    <p>Contact us: info@company.com | +123-456-7890</p>
</footer>

</body>
</html>
