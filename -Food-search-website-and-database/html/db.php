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

	$sql = "SELECT * FROM `food`";
	$result = mysqli_query($link, $sql);
	echo $result;
	$datas = array();
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			$datas[]= $row;
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>讀取資料庫</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<style>
			.a_user{
				width:100px;
				height:100px;
				color:#000;
			}
		</style>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php if(!empty($datas)):?>
						<?php foreach($datas as $food):?>
							<div class="thumbnail a_user" >
								<?php echo "食物名:" . $food['fname'] . "<br>價錢:" . $food['fprice'];?>
							</div>
						<?php endforeach;?>
					<?php endif?>
				</div>
			</div>
		</div>

	</body>
</html>
