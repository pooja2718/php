<?php
include 'connection.php';
?>
<!doctype html>
<html lang="en">

<head>
    <title>Insert Data</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    
    <style>
        body {
            background-image: url('https://www.w3schools.com/w3images/mountains.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
        }

        .navbar {
            background-color: rgba(0, 123, 255, 0.7);
        }

        .card {
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            border-radius: 10px;
            padding: 20px;
        }

        .card-title {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn {
            border-radius: 5px;
            padding: 10px 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }

        .form-container {
            margin-top: 100px;
        }
    </style>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">
            <img src="https://wallpapers.com/images/featured/car-logo-jthtfn1zowpexo5i.jpg" class="img-fluid rounded-circle" height="70px" width="70px">
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Datainfo</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="add.php">ADD ITEM</a>
                            <a class="dropdown-item" href="update.php">UPDATE DATA</a>
                            <a class="dropdown-item" href="delete.php">DELETE DATA</a>
                            <a class="dropdown-item" href="show.php">SHOW DATA</a>
                        </div>
                    </li>
                </ul>
                <button class="btn btn-success my-2 my-sm-0" type="submit" onclick="location='register.php'">Register</button>
            </div>
        </div>
    </nav>
</header>s
    <main>
        <div class="container form-container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Delete Data</h5>
                            <form method="post" action="">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Enter Name to Delete</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Delete</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </form>

                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                $name = trim($_POST['name']);

                                // Basic validation
                                if (empty($name)) {
                                    echo "<div class='alert alert-danger'>Please enter a name to delete.</div>";
                                } else {
                                    // Prepare and execute the SQL query
                                    $sql = $con->prepare("DELETE FROM empinfo WHERE name = ?");
                                    $sql->bind_param("s", $name);

                                    if ($sql->execute()) {
                                        echo "<div class='alert alert-success'>Data deleted successfully.</div>";
                                    } else {
                                        echo "<div class='alert alert-danger'>ERROR: " . $sql->error . "</div>";
                                    }

                                    $sql->close();
                                }

                                $con->close();
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer >
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

