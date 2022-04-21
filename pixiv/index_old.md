---
title: 每日图片
date: 2022-03-30 23:56:34
type: "contact"
layout: "pixiv"
---
        
<div class="tag-title center-align"><i class="fas fa-image"></i>&nbsp;&nbsp;每日图片</div>
<iframe src="https://cloud.mokeyjay.com/pixiv" frameborder="0" style="width:100%;height:500px;margin:0;"></iframe>

<div class="tag-title center-align"><i class="fas fa-image"></i>&nbsp;&nbsp;随机壁纸</div>
<iframe id="theWallPaper" src="https://api.luvying.com/acgimg" frameborder="0" style="width:100%;height:500px;margin:0;"></iframe>
<br><br>
<div style="text-align:center"><input type="button" name="button" value="换一张" onclick="changeImg2()" /></div>

<br><br><br>
<div class="tag-title center-align"><i class="fas fa-image"></i>&nbsp;&nbsp;随机图片</div>
<div id="img" class="img-item"><p><img id="image" style= "height:auto;max-width:100%;vertical-align: middle" src="https://api.luvying.com/acgimg?t=" alt="img" class="responsive-img"/></p></div>
<br>
<div style="text-align:center"><input type="button" name="button" value="换一张" onclick="changeImg()" /></div>

  <script>
  function changeImg(){document.getElementById("img").children[0].children[0].src = "https://api.luvying.com/acgimg?t=" + new Date().getTime();}
  function changeImg2(){document.getElementById("theWallPaper").src = "https://api.luvying.com/acgimg?t=" + new Date().getTime();}
  </script>
