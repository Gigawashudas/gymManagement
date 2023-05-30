<!doctype html>
<html lang="en">

<head>
    <title>About Us</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/gym-logo.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .title {
            font-family: Calibri, "Helvetica", sans-serif;
            line-height: 1.5em;
            color: black;
            font-size: 40px;
            position: relative;
            text-align: center;
        }

        .title:before {
            content: "";
            position: absolute;
            width: 50%;
            height: 4px;
            bottom: 0;
            left: 25%;
            border-bottom: 3px solid red;
        }

        .about-us p {
            color: black;
        }

        .about-us img {
            width: 100% !important;
            min-height: 400px;
        }

        .contact-us .card {
            margin-top: 50px;
            padding: 50px;
            background-color: #a4a4a4;
        }

        .contact-us .card .card-body {
            color: black!important;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    include('php-layout-files/navbar.php');
    ?>

    <section class="about-us mb-5">
        <div class="container mt-5">
            <h3 class="text-center title  mt-5">About Us</h3>
            <div class="row mt-5">
                <div class="col-md-5">
                    <img src="images/gym-logo.png" class="img-fluid rounded" alt="">
                </div>
                <div class="ml-3 col-md-5">
                    <div class="content">
                        <p class="lead">At our core, we are a team of passionate individuals committed to revolutionizing the way gyms are managed and operated. Our project, the Web-based Gym Management System, is the culmination of our dedication to leveraging technology to enhance the fitness industry. With extensive experience in both software development and fitness management, our team recognized the need for an efficient and user-friendly platform that could streamline gym operations and improve the overall member experience. Our mission is to empower gym owners, managers, and trainers by providing them with a comprehensive suite of tools to effectively manage memberships, scheduling, billing, and communication.</p>
                        <a name="" id="" class="btn btn-outline-warning" href="index.php" role="button">Explore Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("php-layout-files/footer.php") ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
