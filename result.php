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

        .nav-link:hover {
            color: white;
            background-color: #00ccff;
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
            box-shadow: gray 4px 4px 40px;
        }

        .logout {
            background-color: #ff0000;
            color: #ffffff;
            border-radius: 5%;
        }

        .logout a {
            color: #ffffff;

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
        <nav>
            <ul class="nav nav-pills justify-content-evenly d-flex ">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="http://localhost/course-management-system-main/dashboard.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/course-management-system-main/teachers_info.php#">Teacher</a>
                </li>
                <!-- <li class="nav-item">
                <a class="nav-link" href="#">Department</a>
              </li> -->
                <li class="nav-item  dropdown">
                    <a class="nav-link dropdown-toggle" href="http://localhost/course-management-system-main/student_info.php#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Student Information
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item active" href="#Personal">Personal Information</a></li>
                        <li><a class="dropdown-item" href="#Institutional">Institutional Information</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/course-management-system-main/course.php#">Course</a>
                </li>
                <li class="nav-item  dropdown">
                    <a class="nav-link dropdown-toggle active" href="http://localhost/course-management-system-main/result.php#Institutional" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Result
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item active" href="http://localhost/course-management-system-main/result.php#Institutional">Course Result</a></li>
                        <li><a class="dropdown-item" href="http://localhost/course-management-system-main/result.php#Institutional">Present Result</a></li>
                        <li><a class="dropdown-item" href="http://localhost/course-management-system-main/result.php#Institutional">Registration</a></li>
                    </ul>
                </li>
                <li class="nav-item logout">
                    <a class="nav-link" href="#">logout</a>
                </li>
            </ul>
        </nav>
    </header>

    <section class="container">
        <div class="row" id="Institutional">
            <h2 class="text-center bg-light">Course Result</h2>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th scope="col">Data</th>
                        <th scope="col">Information</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Student Name</th>
                        <td>*******</td>
                    </tr>
                    <tr>
                        <th scope="row">Student Registration</th>
                        <td>*******</td>
                    </tr>
                    <tr>
                        <th scope="row">Student Department</th>
                        <td>Jacob</td>
                    </tr>
                    <tr>
                        <th scope="row">Student Id</th>
                        <td>12/12/12</td>
                    </tr>
                    <tr>
                        <th scope="row">Contact Number</th>
                        <td>0170000000</td>
                    </tr>
                    <tr>
                        <th scope="row">Emergency Contact Number</th>
                        <td>0123456789</td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td>ttttt@mail.com</td>
                    </tr>
                    <tr>
                        <th scope="row">Blood Group</th>
                        <td>O+</td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-end ">
                <button type="button" class="btn btn-primary btn-lg m-3 px-5">Update</button>
                <button type="button" class="btn btn-primary btn-lg m-3 px-5">Delete</button>
            </div>
        </div>
    </section>
    <footer class="d-flex  justify-content-center fixed-bottom">
        <h6>This is IST property &copy; 2021 </h6>
    </footer>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>