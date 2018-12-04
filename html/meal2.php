
<form action="meal1.php" method="POST">
  <div class="specie"style="width:380px;height:31px;margin:0px 0px;float:left;font-size:23px;">
    請輸入所有空格:
    <label style="width:80px;height:31px;"><input type="radio" name="specie" value="主餐">主餐</label>
    <label style="width:80px;height:31px;"><input type="radio" name="specie" value="點心">點心</label>
    <label style="width:80px;height:31px;"><input type="radio" name="specie" value="飲料">飲料</label>
  </div>
<div class="price"  style="width:200px;margin:0px 0px;float:left;">
  價格
  <input class="i" type="text" name="price1" maxlength="10"
  style="width: 36px;
    height: 27px;
    line-height: 27px;
    padding: 0 5px;
    box-shadow: inset 1px 1px 5px #f3f3f3;
    vertical-align: middle;">
  ~
  <input class="i" type="text"name="price2" maxlength="10"
  style="  width: 36px;
    height: 27px;
    line-height: 27px;
    padding: 0 5px;
    box-shadow: inset 1px 1px 5px #f3f3f3;
    vertical-align: middle;">
  元
</div>
<div class="calorie"style="width:210px;margin:0px 0px;float:left;">
  卡路里
  <input class="i" type="text" name="calorie1" maxlength="10"
  style="  width: 36px;
    height: 27px;
    line-height: 27px;
    padding: 0 5px;
    box-shadow: inset 1px 1px 5px #f3f3f3;
    vertical-align: middle;">
  ~
  <input class="i" type="text" name="calorie2" maxlength="10"
  style="  width: 36px;
    height: 27px;
    line-height: 27px;
    padding: 0 5px;
    box-shadow: inset 1px 1px 5px #f3f3f3;
    vertical-align: middle;">
  卡
</div>
<div class="choose"style="width:170px;margin:0px 0px;float:left;">

<select name="choosemeal" style="height:31px;">
　<option value="價格由低到高">價格由低到高</option>
　<option value="價格由高到低">價格由高到低</option>
　<option value="卡路里由低到高">卡路里由低到高</option>
　<option value="卡路里由高到低">卡路里由高到低</option>
</select>

</div>
<div class="key"style="width:240px;margin:0px 0px;float:left;">
  關鍵字
  <input class="i" type="text" name="keyword" maxlength="10"
  style="  width: 80px;
    height: 27px;
    line-height: 27px;
    padding: 0 5px;
    box-shadow: inset 1px 1px 5px #f3f3f3;
    vertical-align: middle;">
  <input type="submit"  value="搜尋"
  style="  padding: 0 1.3em;
    min-height: 2.4em;
    line-height: 1.6;
    font-size: 12px;
    background-image:
    linear-gradient(to bottom,rgba(255,255,255,.15),rgba(35,35,35,.05));
    border-bottom-color: rgba(40,40,40,.3);
    background: #fff;
    color: #6d6d6d;"
    >
</div>


</form>

<div class=condition style="width:1200px;height:697px;">
  <div class="price"  style="width:200px;margin:0px 0px;display: inline-block;">
  種類：<?php
  if(isset($_POST['specie']))
  {
    $specie = $_POST['specie'];
  }else {
    $specie = "主餐";
  };
  echo $specie;

      ?>
    </div>
  <div class="price"  style="width:200px;margin:0px 0px;display: inline-block;">
    價錢：<?php

    if(isset($_POST['price1'])&&($_POST['price1']!=""))
    {
      $price1 = $_POST['price1'];
    }else{
      $price1 = 0;
    }
    echo $price1;

    ?>
  ~
  <?php
  if(isset($_POST['price2'])&&($_POST['price2']!=""))
  {
    $price2 = $_POST['price2'];
  }else{
    $price2 = 10000;
  };
  echo $price2;
  ?>
  </div>
  <div class="price"  style="width:200px;margin:0px 0px;display: inline-block;">
  卡路里：<?php
  if(isset($_POST['calorie1'])&&($_POST['calorie1']!=""))
  {
    $calorie1 = $_POST['calorie1'];
  }else{
    $calorie1 = 0;
  };
    echo $calorie1;

    ?>
    ~
    <?php
    if(isset($_POST['calorie2'])&&($_POST['calorie2']!=""))
    {
      $calorie2 = $_POST['calorie2'];
    }else{
      $calorie2 = 10000;
    };
      echo $calorie2;

  ?>
  </div>
  <div class="price"  style="width:200px;margin:0px 0px;display: inline-block;">
  關鍵字：<?php
  if(isset($_POST['keyword'])&&($_POST['keyword']!=""))
  {
    $keyword = $_POST['keyword'];
  }else{
    $keyword = "";
  };
    echo $keyword;
      ?>
    </div>
    <div class="price"  style="width:200px;margin:0px 0px;display: inline-block;">
    排序方式：<?php
    if (isset($_POST['choosemeal'])&&$_POST['choosemeal']=="價格由低到高") {
      $choosemeal ="fprice";
    }elseif (isset($_POST['choosemeal'])&&$_POST['choosemeal']=="價格由高到低") {
      $choosemeal ="`fprice` DESC";
    }elseif (isset($_POST['choosemeal'])&&$_POST['choosemeal']=="卡路里由低到高") {
      $choosemeal ="fcalorie";
    }elseif (isset($_POST['choosemeal'])&&$_POST['choosemeal']=="卡路里由高到低") {
      $choosemeal ="`fcalorie` DESC";
    }else {
      $choosemeal ="fprice";
    };
    if (isset($_POST['choosemeal'])) {
        echo $_POST['choosemeal'];
    };


        ?>
      </div>
  <div class="list" style="width:1200px;margin:0px 0px;">
    <?php include("link.php"); ?>

</div>
