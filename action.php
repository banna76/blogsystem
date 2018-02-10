<?php
include('header.php');
include('conn.php');
$output="";

$submitbtn = isset($_POST['submitbtn'])? $_POST['submitbtn'] : null;

$con = new DB_con();

if($submitbtn == "Save")
{
    $id=$_POST['postuserid'];
    $title=$_POST['postTitle'];
    $body=$_POST['postBody'];
    $author=$_POST['postAuthor'];

    $result = $con->insert($title,$body,$author,$id);

    if($result ){
        $output="The Post has been inserted successfully.";
    }else{
        $output=$result;
    }
}

if($submitbtn == "Update")
{
    $id=$_POST['postid'];
    $title=$_POST['postTitle'];
    $body=$_POST['postBody'];
    $author=$_POST['postAuthor'];

    $result = $con->update($id,$title,$body);

    if($result){
        $output="The Post has been updated successfully.";
    }else{
        $output=$result;
    }
}

if(isset($_GET['submitbtn']) == "delete")
{
    $id=$_GET['id'];
    $table = 'blogs';
    $result = $con->delete($table, $id);

    if($result){
        $output="The Post has been deleted successfully.";
    }else{
        $output=$result;
    }
}


echo $output;
include('footer.php');
