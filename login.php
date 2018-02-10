<?php
include('header.php');
include('conn.php');


$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }
    else
    {
// Define $username and $password
        $username=$_POST['username'];
        $password=$_POST['password'];

// To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);


// SQL query to fetch information of registerd users and finds user match.
        $con = new DB_con();
        $table = 'user';
        $result = $con->selectUser($table,$username,$password);
        $row = $result->fetch_row();
        $row_num = $result->num_rows;
       // var_dump($row[4]);
        if ($row_num  > 0) {
            $_SESSION['login_user']=$username; // Initializing Session
            $_SESSION['login_user_role']=$row[3];
            $_SESSION['login_user_id']=$row[0];
            header("location: index.php");
        } else {
            $error = "Username or Password is invalid";
        }
    }
}

?>
<form class="form-signin" action="" method="post">
    <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">User Login</h1>
    </div>
    <div class="form-label-group">
        <input type="text"  id="name" name="username"  class="form-control" placeholder="User" required autofocus>
        <label for="inputEmail">Email address</label>
    </div>

    <div class="form-label-group">
        <input type="password" id="password" name="password" class="form-control" placeholder="**********" required>
        <label for="inputPassword">Password</label>
    </div>

    <input name="submit" type="submit" value=" Login ">
</form>
<?php
include('footer.php');
