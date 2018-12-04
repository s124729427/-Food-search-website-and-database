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

	$sql = "SELECT `fphoto`,`fname`,`fspecie`,`fprice`,`fcalorie`,`rname`
	FROM `food`,`rest`
	WHERE `food`.`rid`=`rest`.`rid` AND `fspecie`>='$specie' AND `fprice`>=$price1 AND `fprice`<=$price2 AND `fcalorie`>=$calorie1 AND `fcalorie`<=$calorie2 AND `rname` LIKE '%$keyword%'
	ORDER BY $choosemeal
	";

$result = mysqli_query($link, $sql);

$total = mysqli_num_rows($result);
$number = 5;

$pages = ceil($total/$number); //取得不小於值的下一個整數
    if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
        $page=1; //則在此設定起始頁數
    } else {
        $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
    }
    $start = ($page-1)*$number; //每一頁開始的資料序號
    $limit = $sql." LIMIT {$start},{$number}";
		$result = mysqli_query($link, $limit);


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
		<div class="list1" style="width:1060px;height:50px;margin:0px;float:left;font-family: Microsoft JhengHei;">
      <?php echo "品名:" . $food['fname'] ;?>
    </div>
		<div class="list2" style="width:1060px;height:70px;margin:0px;float:left;font-family: Microsoft JhengHei;">
      <?php echo "種類:" . $food['fspecie'] . "&nbsp&nbsp&nbsp價錢:" . $food['fprice'] . "&nbsp&nbsp&nbsp卡路里:" . $food['fcalorie'] . "&nbsp&nbsp&nbsp販賣店家:" . $food['rname'];?>
    </div>
  <?php endforeach;?>
<?php endif?>
<br/>
<div class="last" style="width:1200px;margin:0px;float:left;text-align: center;">
	<?php

			echo '共 '.$total.' 筆-在 '.$page.' 頁-共 '.$pages.' 頁';
			echo "<br/><a href=?page=1>首頁</a> ";
			echo "第 ";
			for( $i=1 ; $i<=$pages ; $i++ ) {
					if ( $page-3 < $i && $i < $page+3 ) {
							echo "<a href=?page=".$i.">".$i."</a> ";
					}
			}
			echo " 頁 <a href=?page=".$pages.">末頁</a><br/><br/>";
	?>
</div>
