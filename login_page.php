<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style type="text/css">
        body {
            margin: 0;
        }

        .container-fluid {
            padding: 0% 8%;
        }

        .container-fluid h1 {
            color: #F4792C;
        }

        .nav-link {
            color: #00ccff;
        }

        footer {
            color: white;
            background-color: gray;
            padding: 1%;
        }

        .discribsion {
            height: auto;
        }

        .container {
            padding: 4% 1%;
        }

        .card {
            box-shadow: gray 4px 4px 20px;
        }
        .card-body{
            padding: 1% 10%;
        }
    </style>

    </script>
</head>

<body>


    <header>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="dashboard.php"><img src="images/IST.png" width="30%" height="auto" alt="IST" /></a>
                <form class="d-flex">
                    <h1>Institute of Science and Technology</h1>
                </form>
            </div>
        </nav>
    </header>

    <section class="container">
        <div class="card ">
            <div class="card-header text-center">
                <h1>Please Login</h1>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </section>

    <footer class="d-flex  justify-content-center">
        <h6>This is IST property &copy; 2021 </h6>
    </footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>