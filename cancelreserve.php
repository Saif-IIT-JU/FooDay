<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cancellation  Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">


    <style>
        

        .container {

            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0.4, 0.5)), url('reserve/reserve2.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            font-family: sans-serif;
            height: 60vh;
            margin-top: 160px;

        }

        form {
            width: 80%
        }

        .btn {
            background-color: rgb(230, 110, 40);
            border: none;
            color: white;
            padding: 10px 25px;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            margin-left: 40%;
            border-radius: 20px;
        }
    </style>
</head>

<body>

    <div class="card">
        <div class="container">

            <div class="row">
                <div class="col-md-4">



                </div>
                <div class="col-md-8">
                    <h3 class="text-white mt-5 ml-3 ">Cancel your reservation from here </h3>
                    <form class="mt-3 pt-2 ml-3" action="cancellation.php" method="post">
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="text" class="form-control" placeholder="Your Name" aria-label="Cname" name="name" required>
                            </div>


                            <div class="col-12 mt-2">
                                <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email" required>
                            </div>
                            
                            <div class="col-12 mt-2">
                                <input type="text" class="form-control" placeholder="Your Reservation ID" aria-label="" name="id" required>
                            </div>
                            <div class="col-12 mt-2">
                                <input type="Date" class="form-control" placeholder="Reservation Date " aria-label="Date" name="date" required>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-success mt-3">Click to cancel</button>

                    </form>


                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/wow.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>