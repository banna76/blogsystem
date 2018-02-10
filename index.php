 <?php
include('header.php');
include('conn.php');

echo "<div class='text-center mb-4'> <h1 class='h3 mb-3 font-weight-normal'>Blog List</h1></div>";
$con = new DB_con();
$table = 'blogs';
$result = $con->selectAll($table);

if ($result->num_rows > 0) {


    while($row = $result->fetch_assoc()) {

   echo "<div class='jumbotron'>";
   echo "<h1>".$row['title']."</h1>";
   echo "<span style='font-size: 12px'> Written on ".$row['timestamp']." Written by ".$row['author']."</span> ";

   $postLongText = (strlen($row['body']) > 200)? substr($row['body'], 0, 200).'...' : $row['body'];

   echo "<p class='lead'>".$postLongText."</p>";
   echo "<p><a class='btn btn-primary btn-lg' href='showsinglepost.php?id=".$row['id']."' role='button'>Learn more »</a></p>";
   echo "</div>";

    }
} else {
    echo "0 results";
  }

 include('footer.php');
