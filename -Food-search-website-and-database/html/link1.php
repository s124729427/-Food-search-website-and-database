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

  $sql = "SELECT * FROM `rest`
  WHERE `rname`LIKE'%$keyword%' OR `ractivity`LIKE'%$keyword%' OR `rphone`LIKE'%$keyword%' OR `rlocation`LIKE'%$keyword%'";



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
  <?php foreach($datas as $rest):?>
		<div class="list1"  style="width:120px;height:120px;margin:0px;font-size:25px;font-family: Microsoft JhengHei;float:left;">
			<?php echo  $rest['rname'] ;?>
		</div>
		<div class="list1" style="width:1060px;height:50px;margin:0px;float:left;font-family: Microsoft JhengHei;">
      <?php echo "活動:" . $rest['ractivity'] ;?>
    </div>
		<div class="list2" style="width:1060px;height:70px;margin:0px;float:left;font-family: Microsoft JhengHei;">
      <?php echo "電話:" . $rest['rphone'] . "&nbsp&nbsp&nbsp位址:" . $rest['rlocation'];?>
    </div>
  <?php endforeach;?>
<?php endif?>
