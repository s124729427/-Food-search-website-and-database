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

	$sql = "SELECT `fphoto`,`fname`,`fspecie`,`fprice`,`fcalorie`,`rname`,`fid`
	FROM `food`,`rest`
	WHERE `food`.`rid`=`rest`.`rid` AND `fspecie`='$specie' AND `fprice`>=$price1 AND `fprice`<=$price2 AND `fcalorie`>=$calorie1 AND `fcalorie`<=$calorie2 AND (`rname` LIKE '%$keyword%' OR `fname` LIKE '%$keyword%')
	ORDER BY $choosemeal
	";



$result = mysqli_query($link, $sql);

  if (!$result) {
    die("請正確輸入所有空格!!!");
  };

  $datas = array();
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			$datas[]= $row;
		}
	}

?>


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
		<form action="fa1.php" method="POST" >
		　<input type="hidden" name="fa1" value="<?php echo $food['fid'];?>">
		　<input type="submit" value="加入最愛" style="width:100px;height:120px;margin:0px;float:left;font-family: Microsoft JhengHei;">
		</form>
  <?php endforeach;?>
<?php endif?>
