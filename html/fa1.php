
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
$a=$datas['0']['uid'];

$sql = "INSERT INTO `favorite` (`fid`, `uid`) VALUES ('$_POST[fa1]','$a')";
$result = mysqli_query($link, $sql);

header('Location: meal1.php');

?>
