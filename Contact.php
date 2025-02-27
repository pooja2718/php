<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"

          



        />
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
                            <a class="nav-link" href="About.php">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="Contact.php">Contact Us</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Datainfo</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="add.php">ADD ITEM </a>
                                <a class="dropdown-item" href="update.php">UPDATE DATA</a>
                                <a class="dropdown-item" href="delete.php">DELETE DATA</a>
                                <a class="dropdown-item" href="show.php">SHOW DATA</a>
                            </div>
                        </li>
                    </ul>
                    

                    </form>
                </div>
            </div>
        </nav>

    </header>
        <main>
            <h3 class="text-center mt-5">Company</h3>
            <div
                class="container mt-2">
                <div
                    class="table-responsive"
                >
                    <table
                        class="table table-success table-hover border border-dark"
                    >
                        <thead>
                            <tr>
                                <th scope="col col-md-5">COMPANY NAME</th>
                                <th scope="col col-md-5">CAR SHOWROOMS</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <td scope="row">Contact No</td>
                                <td>199-9876543210</td>
                                
                            </tr>
                            <tr class="">
                                <td scope="row">Address</td>
                                <td>MUMBAI</td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>               
            </div>
            


            <h3 class="text-center mt-5">Query Form</h3>
            <div
                class="container">
                <div
                    class="row justify-content-center align-items-center g-2"
                >
                    <div class="col col-md-5 bg-dark">
                        <div class="card">                           
                            <div class="card-body">
                                <form action="">
                                    <div class="form-floating mb-3 bg-dark">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="name"
                                            id="name"
                                            placeholder=""
                                        />
                                        <label for="name">Name</label>
                                    </div>
                                    

                                    <div class="form-floating mb-3 bg-primary">
                                        <input
                                            type="email"
                                            class="form-control"
                                            name="Email"
                                            id="Email"
                                            placeholder=""
                                        />
                                        <label for="formId1">E-mail</label>
                                    </div>
                                    

                                    <div class="mb-3  bg-primary">
                                        <label for="" class="form-label">Query</label>
                                        <textarea class="form-control" name="" id="" rows="3"></textarea>
                                    </div>
                                    

                                    <button
                                        type="button"
                                        class="btn btn-primary">Submit
                                    </button>                            
                                </form>                        
                            </div>
                        </div>                       
                    </div>                    
                </div>                
            </div>

            <div
                class="container">
                <h3 class="text-center mt-5">Our Location</h3>
                <div class="text-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d481582.40933488123!2d72.57490422379801!3d19.439928507379314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b858c5c5a60b%3A0x7237258a3f200861!2sArihant%20Cars!5e0!3m2!1sen!2sin!4v1736333251201!5m2!1sen!2sin" width="600" height="450" style="border:0;"
                     allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>


        </main>
        <footer class="text-center text-light bg-dark mt-5 p-3 ">
           All Rights Reserved
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
