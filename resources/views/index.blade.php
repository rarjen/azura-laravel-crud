<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/267c05c05d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Landing Page</title>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-bg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <i class="fas fa-paper-plane"></i> AVGEEK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/education') }}">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/project') }}">Project</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Container -->
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-6 col-12 col1">
                        <div class="mt-5">
                            <h1 class="display-1 text-truncate medium1 pt-5">
                                <b>Aviation Geek !</b>
                            </h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores dolor laudantium voluptatibus esse nostrum quasi et voluptatem nihil?
                            </p>
                        </div>
                        <div class="tombol mt-5">
                            <a href="#" class="button rounded-pill medium2 shadow">REGISTER</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 col2 gambar">
                        <img src="{{ asset('asset/img/pro.png') }}" class="img">
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>