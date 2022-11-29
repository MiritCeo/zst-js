<!doctype html>
<html lang="pl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Wyporzycznie Książek</title>
</head>

<body>
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark pl-4">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active pr-3">
                        <a class="nav-link" href="">Home </a>
                    </li>
                    <li class="nav-item pr-3">
                        <a class="nav-link" onclick="smoothScroll('#avaliable')">Książki</a>
                    </li>
                    <li class="nav-item pr-3">
                        <a class="nav-link" onclick="smoothScroll('#unvaliable')">Wykupione</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            Menu
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Polubione</a>
                            <a class="dropdown-item" href="#">Koszyk</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">kupione produkty</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <div class="container h-75 d-flex align-items-center">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-white font-weight-bold">Zakup Książek</h1>
                </div>
                <div class="col-12">
                    <div class="row mt-5 d-flex">
                        <button class="col-lg-3 col-md-6 col-sm-12 m-4 font-weight-bold" onclick="smoothScroll('#avaliable')">Oferta</button>
                        <button class="col-lg-3 col-md-6 col-sm-12 m-4 font-weight-bold"onclick="smoothScroll('#reservation')">Zamów</button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header -->

    <!-- avaliable -->
    <section id="avaliable">
        <div class="conteiner-fluid p-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center p-5">Dostępne Książki</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                    <div class="card">
                        <img src="assets/polski.jpg" class="card-img-top" alt="" srcset="">
                        <card class="body">
                            <h5 class="card-title text-center">polski</h5>
                            <p class="text-center">Książka</p>
                            <p class="text-center font weight-bold">35zł</p>
                            <button href="" class="btn btn-primary col-12" onclick="reserve(2)">wyporzycz</button>
                        </card>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- avaliable -->


    <!-- unvaliable -->
    <section id="unvaliable">
        <div class="conteiner-fluid p-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center p-5">Wykupione</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                    <div class="card">
                        <img src="assets/fizyka.jpg" class="card-img-top" alt="" srcset="">
                        <card class="body">
                            <h5 class="card-title text-center">fizyka</h5>
                            <p class="text-center">Książka</p>
                            <p class="text-center font weight-bold">35zł</p>
                            <button href="" class="btn btn-danger col-12" disabled>Dostępny od 21.06</button>
                        </card>
                    </div>
                </div>



                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                    <div class="card">
                        <img src="assets/niemiecki.jpg" class="card-img-top" alt="" srcset="">
                        <card class="body">
                            <h5 class="card-title text-center">niemiecki</h5>
                            <p class="text-center">niemiecki</p>
                            <p class="text-center font weight-bold">39zł</p>
                            <button href="" class="btn btn-danger col-12" disabled>Dostępny od 21.06</button>
                        </card>
                    </div>
                </div>



                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                    <div class="card">
                        <img src="assets/chemia.jpg" class="card-img-top" alt="" srcset="">
                        <card class="body">
                            <h5 class="card-title text-center">chemia</h5>
                            <p class="text-center">Książka</p>
                            <p class="text-center font weight-bold">46zł</p>
                            <button href="" class="btn btn-danger col-12" disabled>Dostępny od 21.06</button>
                        </card>
                    </div>
                </div>



                <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                    <div class="card">
                        <img src="assets/geografia.jpg" class="card-img-top" alt="" srcset="">
                        <card class="body">
                            <h5 class="card-title text-center">geografia</h5>
                            <p class="text-center">geografia</p>
                            <p class="text-center font weight-bold">55zł</p>
                            <button href="" class="btn btn-danger col-12" disabled>Dostępny od 21.06</button>
                        </card>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- unvaliable -->

    <!-- reservation form -->
    <section id="reservation">
        <div class="container-fluid">
            <h1 class="text-center p-5 font-weight-bold">Zamów</h1>
            <div class="row">
                <div class="col-12 d-flex justify-content-center p-5 text-white">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col sm-6">
                            <div class="form-group">
                                <label for="name">Imię</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Podaj imię"
                                    required>
                            </div>
                        </div>
                        <div class="col sm-6"></div>
                        <div class="form-group">
                            <label for="surname">Nazwisko</label>
                            <input type="text" class="form-control" name="surname" id="surname"
                                placeholder="Podaj Nazwisko" required>
                        </div>
                </div>
                <div class="form-group">
                    <label for="phone">Telefon</label>
                    <input type="tel" class="form-control" placeholder="Podaj numer telefonu" required>
                </div>


                <div class="form-group">
                    <label for="book">Książka</label>
                    <select name="book" class="form-control" id="book">
                        <option value="" disabled>Matma</option>
                        <option value="1" book1>angielski</option>
                        <option value="2" book2>polski
                        </option>

                    </select>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="date">Termin</label>
                            <input type="date" class="form-control" name="date" id="date" required>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="days">Dni</label>
                                <input type="number" class="form-control" name="days" id="days" min="0" max="13">
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="hours">Godziny</label>
                                        <input type="number" class="form-control" name="hours" id="hours" min="0" max="23">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<button onclick="smoothScroll('header')" id="up-button"></button>
    <!-- reservation form -->
<footer>
    <div class="col-12">
        <h6 class="text-center font-weight-bold p-1">COPYRIGHT: SENSS</h6>
    </div>
</footer>
    <!-- Optional JavaScript; choose one of the two! -->
<script src="js/myScript.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>