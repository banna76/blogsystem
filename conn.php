<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'banna');

$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

class DB_con
{

 function __construct()
 {
  // Create connection
   global $conn;
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
 }

 public function insert($title,$body,$author,$id)
 {
   global $conn;
   $sql="insert into blogs(`title`, `body`, `author`, `userid`) values('$title','$body','$author','$id')";
   $result =$conn->query($sql);
   return $result;
 }

 public function selectAll($table)
 {
   global $conn;
   $sql="SELECT * from $table";
   $result = $conn->query($sql);
   return $result;
 }

 public function selectByUserId($table,$id)
 {
  global $conn;
  $sql="SELECT * from $table WHERE userid='$id'";
  $result = $conn->query($sql);
  return $result;
 }

 public function selectById($table,$id)
 {
  global $conn;
  $sql="SELECT * from $table where id= '$id'";
  $result = $conn->query($sql);
  return $result;
 }

 public function selectUser($table,$password,$username)
 {
  global $conn;
  $sql="select * from $table where password='$password' AND user='$username'";
  $result = $conn->query($sql);
  return $result;
 }

 public function update($id,$title,$body)
 {
   global $conn;
   $sql = "UPDATE blogs SET title='$title',body='$body'  WHERE id ='$id' ";
   $result = $conn->query($sql);
   return $result;
 }

 public function delete($table,$id)
 {
   global $conn;
   $sql = "delete from $table WHERE id='$id'";
   $result = $conn->query($sql);
   return $result;
 }

}
