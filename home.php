<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
        
</head>

<body>
    <header>
        <!-- place navbar here -->
        <nav class="navbar navbar-expand-sm navbar-light bg-primary">
            <div class="container">
                <img src="https://wallpapers.com/images/featured/car-logo-jthtfn1zowpexo5i.jpg "
                    class="img-fluid rounded-circle" height="70px" width="70px">
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                       
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="add.php" id="dropdownId" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Datainfo</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="add.php">ADD ITEM </a>
                                <a class="dropdown-item" href="update.php">UPDATE DATA</a>
                                <a class="dropdown-item" href="delete.php">DELETE DATA</a>
                                <a class="dropdown-item" href="show.php">SHOW DATA</a>
                            </div>
                        </li>
                    </ul>
                    <button class="btn btn-success my-2 my-sm-0" type="submit" onclick="location='register.php'">
                        Register
                    </button>

                    </form>
                </div>
            </div>
        </nav>

    </header>
    <main>
    <div class="container mt-2">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="https://static-ssl.businessinsider.com/image/558da8186bb3f73872daa49b-1200-924/bmw-i8-ps.jp2"
                        class="w-100 d-block" alt="First slide" height="400px" width="900px" />
                </div>
                <div class="carousel-item">
                    <img src="https://t3.ftcdn.net/jpg/04/23/23/16/360_F_423231611_CWuIk59cBoaANN3r6SUvIao7AwernZmp.jpg"
                        class="w-100 d-block" alt="Second slide" height="400px" width="900px" />
                </div>
                <div class="carousel-item">
                    <img src="https://cache.bmwusa.com/cosy.arox?pov=walkaround&brand=WBBM&vehicle=258L&client=byo&paint=P0300&fabric=FLKSW&sa=S01MA,S01TH,S0302,S0319,S0322,S03MF,S0415,S0416,S0453,S04GQ,S04HB,S04MC,S04NB,S05AC,S05AZ,S06AC,S06AK,S06C4,S06NW,S06U3,S06WD,S0712,S0760,S0776,S07M9,S07MA&quality=70&bkgnd=transparent&resp=png&angle=60"
                        class="w-100 d-block" alt="Third slide" height="400px" width="900px" />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <h2 class="text-center mt-5">TYPES OF CARS</h2>
    <div class="container">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col">
                <div class="card">
                    <img class="card-img-top"
                        src="https://www.supercars.net/blog/wp-content/uploads/2020/09/2020-Lamborghini-Sian-011-2160-scaled-1.jpg"
                        alt="Lamborghini Car" height="300px" width="600px" />
                    <div class="card-body">
                        <h4 class="card-title">LAMBORGHINI CAR</h4>
                        <p class="card-text">Impressive speed and performance, as well as bold and exotic appearances.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img class="card-img-top"
                        src="https://www.cars24.com/news/_next/image/?url=https%3A%2F%2Fcdn.cars24.com%2Fprod%2Fauto-news24-cms%2Froot%2F2024%2F07%2F24%2Fb60f34d0-ce19-4c82-bbc5-19fb88e53b6a-2024-BMW-530Li-LWB-Aryan.jpg&w=750&q=50"
                        alt="BMW Cars" height="300px" width="600px" />
                    <div class="card-body">
                        <h4 class="card-title">BMW CARS</h4>
                        <p class="card-text">The BMW Group is the world's leading provider of premium cars and motorcycles.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img class="card-img-top"
                        src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Mahindra/Scorpio-N/10817/1690351800434/front-left-side-47.jpg?imwidth=420&impolicy=resize"
                        alt="SUV Car" height="300px" width="600px" />
                    <div class="card-body">
                        <h4 class="card-title">SUV CAR</h4>
                        <p class="card-text">SUVs are versatile, spacious, and designed for both on-road and off-road driving.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

  
    <footer class="text-center text-light bg-dark mt-5 p-2 ">
        &copy; All Rights Reserved
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>