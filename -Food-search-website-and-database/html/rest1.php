<?php
$p = 'rest1';
if(isset($_GET['p']))
{
	$p = $_GET['p'];
}
?>
<?php
	//啟動 session
	session_start();
?>

<!DOCTYPE html>
<html long="zn-TW">
<head>
<meta charset="utf-8-8">
<title>台北科技大學美食查詢系統</title>
<link rel="shortcut icon" href="../img/logo.jpg">
<link rel=stylesheet type="text/css" href="../css/456.css">
<link rel="stylesheet" href="../css/normalize.css">
</head>
<body>
  <div class="wrapper">
    <div class="header">
      <img src="../img/logo.jpg" style="height:100px; width:100px;" >
			<div class="login" style="height:50px;margin:0px;font-size:20px;font-family: Microsoft JhengHei;float:right;display:inline-block;">
				<a href="logout.php" style="text-decoration:none;display:block;position:relative;float:right;width:80px;color: #000;">登出</a>
				<?php
					//使用 isset()方法，判別有沒有此變數可以使用，以及為已經登入
					if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == TRUE):?>
					<a href="backend.php" style="text-decoration:none;display:block;;position:relative;float:right;color: #000;">會員專區</a>
					<?php echo $_COOKIE['name'];?>
				<?php else:?>
					<a href="login.php" style="text-decoration:none;display:block;;position:relative;float:right;color: #000;">會員登入</a>

				<?php endif;?>

			</div>
      <h1>台北科技大學美食查詢系統</h1>
      <h2>National Taipei University of Technology Nearby Delicious Food Search Web</h2>
    </div>
    <div class="menu">
      <nav>
        <ul id="main_manu">
					<li><a href='?p=index'>首頁</a></li>
          <li><a href='?p=meal'>美食</a></li>
          <li><a href='?p=rest'>店家</a></li>
          <li><a href='?p=connection'>聯絡資訊</a></li>
        </ul>
      </nav>
    </div>
    <div class="enter">

			<?php
			if($p == "index") include 'index1.php';
      if($p == "meal") include 'meal.php';
			if($p == "rest1") include 'rest2.php';
      if($p == "rest") include 'rest.php';
			if($p == "connection") include 'connection.php';
			?>
</div>
</body>

</html>
