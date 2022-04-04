.<?php error_reporting(E_ALL ^ E_NOTICE);// 显示除去 E_NOTICE 之外的所有错误信息 ?>
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>首页  黑域博客52heiyu.com</title>
<link rel="icon" href="favicon.ico" type="image/ico">
<meta name="author" content="yinqi">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/materialdesignicons.min.css" rel="stylesheet">
<link href="css/style.min.css" rel="stylesheet">
</head>
  
<body>
<div class="lyear-layout-web">
  <div class="lyear-layout-container">
    <!--左侧导航-->
    <aside class="lyear-layout-sidebar">
       
      <!-- logo -->
      <div id="logo" class="sidebar-header">
        <a href="http://52heiyu.com/"><img src="/logo.png" title="LightYear" alt="LightYear" /></a>
      </div>
      <div class="lyear-layout-sidebar-scroll">
        
        <nav class="sidebar-main">
          <ul class="nav nav-drawer">
            <li class="nav-item"> <a href="http://52heiyu.com/"><i class="mdi mdi-home"></i>黑域博客</a> </li>
          </ul>
        </nav>
        

      </div>
      
    </aside>
    <!--End 左侧导航-->
    
    <!--头部信息-->
    <header class="lyear-layout-header">
      
      <nav class="navbar navbar-default">
        <div class="topbar">
          
          <div class="topbar-left">
            <div class="lyear-aside-toggler">
              <span class="lyear-toggler-bar"></span>
              <span class="lyear-toggler-bar"></span>
              <span class="lyear-toggler-bar"></span>
            </div>
            <span class="navbar-page-title">输入内容</span>
          </div>
          
          <ul class="topbar-right">
            <!--切换主题配色-->
		    <li class="dropdown dropdown-skin">
			  <span data-toggle="dropdown" class="icon-palette"><i class="mdi mdi-palette"></i></span>
			  <ul class="dropdown-menu dropdown-menu-right" data-stopPropagation="true">
                <li class="drop-title"><p>主题</p></li>
                <li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="site_theme" value="default" id="site_theme_1" checked>
                    <label for="site_theme_1"></label>
                  </span>
                  <span>
                    <input type="radio" name="site_theme" value="dark" id="site_theme_2">
                    <label for="site_theme_2"></label>
                  </span>
                  <span>
                    <input type="radio" name="site_theme" value="translucent" id="site_theme_3">
                    <label for="site_theme_3"></label>
                  </span>
                </li>
			    <li class="drop-title"><p>LOGO</p></li>
				<li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="logo_bg" value="default" id="logo_bg_1" checked>
                    <label for="logo_bg_1"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_2" id="logo_bg_2">
                    <label for="logo_bg_2"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_3" id="logo_bg_3">
                    <label for="logo_bg_3"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_4" id="logo_bg_4">
                    <label for="logo_bg_4"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_5" id="logo_bg_5">
                    <label for="logo_bg_5"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_6" id="logo_bg_6">
                    <label for="logo_bg_6"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_7" id="logo_bg_7">
                    <label for="logo_bg_7"></label>
                  </span>
                  <span>
                    <input type="radio" name="logo_bg" value="color_8" id="logo_bg_8">
                    <label for="logo_bg_8"></label>
                  </span>
				</li>
				<li class="drop-title"><p>头部</p></li>
				<li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="header_bg" value="default" id="header_bg_1" checked>
                    <label for="header_bg_1"></label>                      
                  </span>                                                    
                  <span>                                                     
                    <input type="radio" name="header_bg" value="color_2" id="header_bg_2">
                    <label for="header_bg_2"></label>                      
                  </span>                                                    
                  <span>                                                     
                    <input type="radio" name="header_bg" value="color_3" id="header_bg_3">
                    <label for="header_bg_3"></label>
                  </span>
                  <span>
                    <input type="radio" name="header_bg" value="color_4" id="header_bg_4">
                    <label for="header_bg_4"></label>                      
                  </span>                                                    
                  <span>                                                     
                    <input type="radio" name="header_bg" value="color_5" id="header_bg_5">
                    <label for="header_bg_5"></label>                      
                  </span>                                                    
                  <span>                                                     
                    <input type="radio" name="header_bg" value="color_6" id="header_bg_6">
                    <label for="header_bg_6"></label>                      
                  </span>                                                    
                  <span>                                                     
                    <input type="radio" name="header_bg" value="color_7" id="header_bg_7">
                    <label for="header_bg_7"></label>
                  </span>
                  <span>
                    <input type="radio" name="header_bg" value="color_8" id="header_bg_8">
                    <label for="header_bg_8"></label>
                  </span>
				</li>
				<li class="drop-title"><p>侧边栏</p></li>
				<li class="drop-skin-li clearfix">
                  <span class="inverse">
                    <input type="radio" name="sidebar_bg" value="default" id="sidebar_bg_1" checked>
                    <label for="sidebar_bg_1"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_2" id="sidebar_bg_2">
                    <label for="sidebar_bg_2"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_3" id="sidebar_bg_3">
                    <label for="sidebar_bg_3"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_4" id="sidebar_bg_4">
                    <label for="sidebar_bg_4"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_5" id="sidebar_bg_5">
                    <label for="sidebar_bg_5"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_6" id="sidebar_bg_6">
                    <label for="sidebar_bg_6"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_7" id="sidebar_bg_7">
                    <label for="sidebar_bg_7"></label>
                  </span>
                  <span>
                    <input type="radio" name="sidebar_bg" value="color_8" id="sidebar_bg_8">
                    <label for="sidebar_bg_8"></label>
                  </span>
				</li>
			  </ul>
			</li>
            <!--切换主题配色-->
          </ul>
          
        </div>
      </nav>
      
    </header>
    <!--End 头部信息-->
    
    <!--页面主要内容-->
    <main class="lyear-layout-content">
      
      <div class="container-fluid">
        
        <div class="row">
         
		  
		  
          <div class="col-md-12">
            <div class="card">
              <div class="card-header"><h4>信息输入</h4></div>
              <div class="card-body">
                <form action="" method="post" >
				   <div class="form-group">
                    <label class="col-xs-12" for="example-select">声音选择</label>
                    <div class="col-xs-12">
                      <select class="form-control" id="example-select" name="per" size="1">
                        <option value="0">女生1</option>
						<option value="5">女生2</option>
                        <option value="1">男生1</option>
                        <option value="2">男生2</option>
                        <option value="3">男生3</option>
                        <option value="4">度丫丫</option>
                      </select>
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-xs-12" for="example-select">语速</label>
                    <div class="col-xs-12">
                      <select class="form-control" id="example-select" name="spd" size="1">
                        <option value="5">5</option>
                         <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                      </select>
                    </div>
                  </div> 
				  <div class="form-group">
                    <label class="col-xs-12" for="example-select">音调</label>
                    <div class="col-xs-12">
                      <select class="form-control" id="example-select" name="pit" size="1">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                      </select>
                    </div>
                  </div>
				 
				  
				  <div class="form-group">
                    <label class="col-xs-12" for="example-textarea-input">文本域</label>
                    <div class="col-xs-12">
                      <textarea class="form-control" id="example-textarea-input" name="tex" rows="6" placeholder="内容.."></textarea>
                    </div>
                  </div>
				  

                    <div class="col-xs-12">
                      <br /><button class="btn btn-primary" type="submit">提交</button>
                    </div>
                    <br />
                               <div class="col-xs-12">
                <br />本站仅供用于演示，请勿用于商业用途！！！
            </div>
				
             
				  <?php  if(!empty($_POST)){?>
				  
				  <?php
				  
				  $arr=['<','>'];
				  $tex=str_replace($arr,'',$_POST['tex']);  
				  if(empty($tex))exit("<script>alert('请输入内容'); window.location.href='./index.php';</script>");
					$b="<div class=\"col-xs-12\"><br>
						<a href=\"https://tts.baidu.com/text2audio.mp3?tex=$tex&amp;cuid=baike&amp;lan=ZH&amp;ctp=1&amp;pdt=301&amp;vol=100&amp;rate=32&amp;per=$_POST[per]&spd=$_POST[spd]&pit=$_POST[pit]\" target=\"_blank\" class=\"btn btn-primary\" type=\"audio/mp3\" download=\"MP3\">下载</a>
				   </div>" ;
					echo $b;
					$a="<br><br><br><div class=\"form-group\">
					<video controls=\"\" autoplay=\"\"  width='0'  height='0' name=\"media\"><source src=\"https://tts.baidu.com/text2audio?tex=$tex&amp;cuid=baike&amp;lan=ZH&amp;ctp=1&amp;pdt=301&amp;vol=100&amp;rate=32&amp;per=$_POST[per]&spd=$_POST[spd]&pit=$_POST[pit]\" type=\"audio/mp3\"></video>
				   </div>" ;
					echo $a;
				  }?>
				   
                  <div class="row m-b-10">
                    
                    <div class="col-lg-6">
                      
                    </div>
                  </div>
                  
                </form>
                
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
      
    </main>
    <!--End 页面主要内容-->
  </div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="js/main.min.js"></script>
</body>
</html>
