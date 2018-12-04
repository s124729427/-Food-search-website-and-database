<form action="meal1.php" method="POST">
  <div class="specie"style="width:380px;height:31px;margin:0px 0px;float:left;font-size:23px;">
    請輸入所有空格:
    <label style="width:80px;height:31px;"><input type="radio" name="specie" value="主餐">主餐</label>
    <label style="width:80px;height:31px;"><input type="radio" name="specie" value="點心">點心</label>
    <label style="width:80px;height:31px;"><input type="radio" name="specie" value="飲料">飲料</label>
  </div>
<div class="price"  style="width:200px;margin:0px 0px;float:left;">
  價格
  <input class="i" type="text" name="price1"  maxlength="10"
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



<div class=list style="width:1200px;height:697px;float:left;">


</div>
