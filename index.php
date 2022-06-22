<?php
// Souvent on identifie cet objet par la variable $conn ou $db
$mysqlConnection = new PDO(
    'mysql:host=localhost;dbname=librairie;charset=utf8',
    'root',
    ''
);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="image.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Librairie</title>
</head>

<body>
    <div class="menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Livres</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Auteurs</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Genres
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Fantasy</a></li>
                </ul>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
        </nav>
    </div>

    <br>
    <br>

    <div class="border">
        
        <h1>Nos livres:</h1>

        <br>
        <br>

        <div class="menu1">
            <div class="blog">
                <div class="image">

                </div>
                <div class="texte">
                
                </div>
            </div>
            
        </div>
        <br>
        <div class="menu2">
            <div class="blog">
                <div class="image">

                </div>
                <div class="texte">
                
                </div>
            </div>
            
        </div>
        <br>
        <div class="menu3">
            <div class="blog">
                <div class="image">

                </div>
                <div class="texte">
                
                </div>
            </div>
            
        </div>
    </div>


</body>
</html>