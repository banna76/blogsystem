<?php
include('header.php');
include('conn.php');

$user=isset($_SESSION['login_user'])? $_SESSION['login_user'] : null;
$userrole= isset($_SESSION['login_user_role'])? $_SESSION['login_user_role'] : null;
$userid= isset($_SESSION['login_user_id'])? $_SESSION['login_user_id'] : null;

echo "<div class='text-center mb-4'> <h1 class='h3 mb-3 font-weight-normal'>Blog List</h1></div>";

$table = 'blogs';
$con = new DB_con();
    if($user) {
        if ($userrole) {
            $result = $con->selectAll($table);
        } else {
            $result = $con->selectByUserId($table,$userid);
        }
        echo "List of your Post.";
        echo "<table class='table'>";
        echo "<thead class='thead-dark'><tr><th>ID</th><th>Title</th><th>Author</th><th>Action</th></thead>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td><a href='showsinglepost.php?id=" . $row['id'] . "'>" . $row['title'] . "</a></td>";
            echo "<td>" . $row['author'] . "</td>";
            echo "<td><a class='btn btn-primary' href='insertpost.php?id=" . $row['id'] . "'>Edit</a>  <a class='btn btn-danger' href='action.php?submitbtn=delete&id=" . $row['id'] . "'>Delete</a></td>";
            echo "</tr>";
        }
    }else{
        header("location: index.php");
    }

include('footer.php');
