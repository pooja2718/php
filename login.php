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
        <style>
            body {
            
                background-color:rgb(226, 212, 17);
                font-family: 'Arial', sans-serif;
            }

            .card {
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(126, 133, 30, 0.47);
            }

            .card-body {
                padding: 2rem;
            }

            h3 {
                margin-bottom: 1.5rem;
                font-weight: bold;
                color: #333;
            }

            .form-floating label {
                font-size: 1rem;
                color:rgb(97, 185, 38);
            }

            .form-control {
                border-radius: 5px;
                border-color: #ccc;
            }

            .form-control:focus {
                border-color:rgb(0, 33, 179);
                box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
            }

            .btn-primary {
                width: 100%;
                padding: 0.75rem;
                border-radius: 5px;
                font-size: 1.1rem;
            }

            .btn-primary:hover {
                background-color: #004085;
                border-color: #003366;
            }

          

            footer p {
                color: #888;
            }
        </style>
    </head>

    <body>
        <header>
            <!-- place navbar here -->
                  
        </header>
        <main>
            <div
                class="container">
                <div
                    class="row justify-content-center align-items-center g-2"
                >
                    <div class="col col-md-5 mt-5 ">
                        <div class="card">                            
                            <div class="card-body">
                                <h3 class="text-center m-2">Login Page</h3>
                                <form action="home.php">

                                    <div class="form-floating mb-3">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="username"
                                            id="username"
                                            placeholder=""
                                        />
                                        <label for="username">Username</label>
                                    </div>



                                    <div class="form-floating mb-3">
                                        <input
                                            type="password"
                                            class="form-control"
                                            name="password"
                                            id="password"
                                            placeholder=""
                                        />
                                        <label for="password">Password</label>
                                    </div>
                                    
                                    <div class="text-center">
                                    <button
                                        type="button"
                                        class="btn btn-primary"
                                        onclick="location='home.php'"
                                    >Login
                                    </button>
                                </div>
                                    
                                </form>                                
                        </div>                       
                    </div>        
                </div>               
            </div>
            
        </main>
        <footer>
            <!-- place footer here -->
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
