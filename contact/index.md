---
title: 留言板
date: 2022-01-16 19:04:34
type: "contact"
layout: "contact"
---

<div class="poem-wrap">
  <div class="poem-border poem-left"></div>
  <div class="poem-border poem-right"></div>
    <h>念两句诗</h>
    <p id="poem">挑选中...</p>
    <p id="info">
  <script src="https://sdk.jinrishici.com/v2/browser/jinrishici.js" charset="utf-8"></script>
  <script type="text/javascript">
    jinrishici.load(function(result) {
      poem.innerHTML = result.data.content
      info.innerHTML = '【' + result.data.origin.dynasty + '】' + result.data.origin.author + '《' + result.data.origin.title + '》'
  });
  </script>
</div>
<br>
 <!-- 加入网易云音乐热门评论，实时更新 -->
        <div class="poem-wrap">
          <div class="poem-border poem-left"></div>
          <div class="poem-border poem-right"></div>
          <h>音乐热评</h>
          <p id="poem2">挑选中...</p>
          <p id="info2"></p>
        </div>
        <script>
          $.get("https://v1.hitokoto.cn?c=d&c=h&c=j", function (data, status) {
            if (status == 'success') {
              $('#poem2').html(data.hitokoto);
              if (data.from_who != null) {
                $('#info2').html(data.from_who + " · " + "《 " + data.from + " 》");
              } else {
                $('#info2').html(" “ " + data.from + " ” ");
              }
            } else {
              $('#poem2').html("获取出错啦");
            }
          });
        </script>
