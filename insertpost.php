<?php
include('header.php');
include('conn.php');

if(isset($_SESSION['login_user'])) {

    $con = new DB_con();
    $id = isset($_GET['id']) ? $_GET['id'] : "";
    $title = null;
    $body = null;
    $button = "Save";
    $table = "blogs";
    if ($id) {

        $result = $con->selectById($table,$id);

        while ($row = $result->fetch_assoc()) {
            $title = $row['title'];
            $body = $row['body'];
        }
        $button = "Update";
    }
    ?>


    <form class="form" method="post" action="action.php">
        <div class="text-center mb-4">
            <h1 class="h3  font-weight-normal">Insert Post</h1>
        </div>
        <div class="form-label-group">
            <input type="text" name="postTitle" class="form-control" placeholder="Post Title"
                   value="<?= $title ?>" required autofocus>
        </div>
        <br>
        <div class="form-label-group">
        <textarea name="postBody" class="form-control" placeholder="Please write your post here"
                  rows="10" cols="50" required><?= $body ?></textarea>
        </div>
        <br>

        <input type="hidden" name="postuserid" value="<?= $_SESSION['login_user_id']  ?>">
        <input type="hidden" name="postid" value="<?= $id ?>">
        <!--  value from session -->
        <input type="hidden" name="postAuthor" value="<?= $_SESSION['login_user'] ?>">

        <input name="submitbtn" class="btn btn-lg btn-primary btn-block" type="submit" value="<?= $button ?>">
    </form>


    <?php
} // session if
else{
    header("location: index.php");
}
include('footer.php');
