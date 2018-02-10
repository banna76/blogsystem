<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Blog System!</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php">blogsystem</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <?php
            session_start(); // Starting Session
            if(isset($_SESSION['login_user'])){
               echo  "<li class='nav-item active'><a class='nav-link' href='insertpost.php'>Insert Post</a></li>";
               echo  "<li class='nav-item active'><a class='nav-link' href='logout.php'>Logout</a></li>";
               echo  "<li class='nav-item active'><a class='nav-link' href='admin.php'>Admin</a></li>";
            } else{
                echo  "<li class='nav-item active'><a class='nav-link' href='login.php'>Loging</a></li>";
            }?>
        </ul>
    </div>
</nav>



<main class="container">

    <div class="starter-template">
    <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
    </div>
