<?php
include('header.php');
include('conn.php');

$id=$_GET['id'];
$table = "blogs";
$con = new DB_con();
$result = $con->selectById($table,$id);
$user = null;

while($row = $result->fetch_assoc()) {
    echo "<div class='jumbotron'>";
    echo "<h1>".$row['title']."</h1>";
    echo "<span style='font-size: 12px'> Written on ".$row['timestamp']." Written by ".$row['author']."</span> ";
    echo "<p class='lead'>".$row['body']."</p>";
    echo "</div>";
    $user =  strtolower($row['author']);
}

echo "<p ><a class='btn btn-primary btn-lg' href='index.php'>Back</a>";

if($_SESSION['login_user'] ==  $user) {
    echo "  <a class='btn btn-primary btn-lg' href='insertpost.php?id=" . $id . "'>Edit</a></p>";
}

include('footer.php');
