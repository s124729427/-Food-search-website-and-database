<form action="rest1.php" method="POST">
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

<div class=condition style="width:1200px;height:697px;display:">
  <div class="price"  style="width:1200px;margin:0px 0px;display: inline-block;">
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

  <div class="list" style="width:1200px;margin:0px 0px;">
    <?php include("link1.php"); ?>
</div>
