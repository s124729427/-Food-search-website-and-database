<?php
$link = mysqli_connect("localhost", "root", "b8016489", "food");
if (mysqli_connect_errno())
{
  echo '無法連線資料庫 :<br/>' . mysqli_connect_errno();
}
else
{
  mysqli_query($link, "SET NAMES utf8");
}
$sql = "SELECT `uid`
FROM `user`
WHERE `uname`='$_COOKIE[name]'";
$result = mysqli_query($link, $sql);

$datas = array();
 if(mysqli_num_rows($result) > 0){
   while ($row = mysqli_fetch_assoc($result)) {
     $datas[]= $row;
   }
 };
$a=$_POST['fa2'];

$sql = "DELETE FROM `favorite` WHERE `faid` = '$a'";
$result = mysqli_query($link, $sql);

header('Location: backend.php');


?>
