<?php
	//啟動 session
	session_start();
?>
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
	$sql = "SELECT `fphoto`,`fname`,`fspecie`,`fprice`,`fcalorie`,`rname`,`faid`
	FROM `favorite`,`food`,`rest`,`user`
	WHERE `food`.`rid`=`rest`.`rid` AND `favorite`.`fid`=`food`.`fid` AND `favorite`.`uid`=`user`.`uid`
	";
	$result = mysqli_query($link, $sql);
	if (!$result) {
    die("資料錯誤!!!");
  };

  $datas = array();
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			$datas[]= $row;
		}
	}
	?>
<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<meta charset="utf-8" />
		<title>後台管理</title>

	</head>
	<style>
		div.result {
			text-align:center;
		}
	</style>
	<body>
		<?php
			//使用 isset()方法，判別有沒有此變數可以使用，以及為已經登入
			if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == TRUE):
	  ?>
		<div class="result" style="width:1200px;margin:0px;float:left;">
			<?php if(!empty($datas)):?>
			  <?php foreach($datas as $food):?>
					<div class="list1"  style="width:120px;height:120px;margin:0px;float:left;font-family: Microsoft JhengHei;">
						<img src="../img/<?php echo  $food['fphoto'] ;?>" width=120px height=120px>
					</div>
					<div class="list1" style="width:960px;height:50px;margin:0px;float:left;font-family: Microsoft JhengHei;">
			      <?php echo "品名:" . $food['fname'] ;?>
			    </div>
					<div class="list2" style="width:960px;height:70px;margin:0px;float:left;font-family: Microsoft JhengHei;">
			      <?php echo "種類:" . $food['fspecie'] . "&nbsp&nbsp&nbsp價錢:" . $food['fprice'] . "&nbsp&nbsp&nbsp卡路里:" . $food['fcalorie'] . "&nbsp&nbsp&nbsp販賣店家:" . $food['rname'];?>
			    </div>
					<form action="fa2.php" method="POST" >
					　<input type="hidden" name="fa2" value="<?php echo $food['faid'];?>">
					　<input type="submit" value="刪除" style="width:100px;height:120px;margin:0px;float:left;font-family: Microsoft JhengHei;">
					</form>
			  <?php endforeach;?>
			<?php endif?>

		</div>
		<div class="result" style="width:1200px;margin:0px;float:left;">
			<a href='index.php'  style="width:1200px;margin:0px;background-position: center;">首頁</a>
		</div>

		<?php
			else:

				//使用php header 來轉址到後台
				header('Location: login.php');
			endif;
		?>
	</body>
</html>
