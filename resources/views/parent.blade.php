<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--boostrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <!--boostrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!--my css-->
    <link rel="stylesheet" href="style.css" />
    <title>@yield('title')</title>
</head>

<body id="home">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">

        <div class="container">
            <a class="navbar-brand" href="#">Deefvely yustezio arinanda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Project">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--akhir navbar-->


    <!--footer-->
    <footer class="bg-primary text-white text-center pb-5">
        <p>Created with <i class="bi bi-suit-heart-fill text-danger"></i> by <a href="https://www.youtube.com/"
                class="text-white fw-bold">youtube </a></p>
    </footer>
    <!--akhir footer-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</body>

</html>