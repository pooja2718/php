<?php
include 'connection.php';

$sql = "SELECT * FROM empinfo";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1579546928681-03f2be9f98f2'); /* Replace with your preferred image URL */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .table {
            margin-top: 30px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .table th, .table td {
            text-align: center;
        }

        .table th {
            background-color: #007bff;
            color: white;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card">
            <h3 class="card-title text-center">Employee Data</h3>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Car</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                       if ($result && $result->num_rows ){
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['name']}</td>
                                    <td>{$row['car']}</td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='2' class='text-center'>No data found</td></tr>";
                    }
                    $con->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer ></footer>
    
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

