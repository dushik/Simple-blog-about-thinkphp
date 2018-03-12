<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../Public/css/template.css">
	<link rel="stylesheet" type="text/css" href="../Public/css/index.css">
	<title>Welcome to the blog of one silver</title>
</head>
<body>
	<div id="head">
		<div id="head_first">
			<div id="head_logo">
				<img src="../Public/img/logo.jpg">
			</div>
		</div>
		<div id="head_second">
			<div id="head_nav">
				<ul>
					<li><a href="__APP__?m=Index&a=index">首  页</a></li>
					<li><a href="__APP__?m=Index&a=love">兴趣爱好</a></li>
					<li><a href="__APP__?m=Index&a=home">我的家乡</a></li>
					<li><a href="__APP__?m=Index&a=message">留言板</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="content">
		<div id="content_center">
			<div id="content_left">
				<h2><img src="../Public/img/home_1.jpg">全部文章</h2>
				<hr/>
				<div class="home_article_title">
					<a href="#">完整的网站技术参考手册</a>
				</div>
				<div class="home_article_content">
					我们的参考手册涵盖了网站技术的方方面面。其中包括W3C的标准技术：HTML、CSS、XML 。以及其他的技术，诸如JavaScript、PHP、SQL等等。
				</div>
				<div class="home_article_foot">
					<p>2016.6.23</p>
				</div>
				<div class="home_article_title">
					<a href="#">在线实例测试工具</a>
				</div>
				<div class="home_article_content">
					在w3school，我们提供上千个实例。通过使用我们的在线编辑器，你可以编辑这些例子，并对代码进行实验。
				</div>
				<div class="home_article_foot">
					<p>2016.6.23</p>
				</div>
				<div class="home_article_title">
					<a href="#">快捷易懂的学习方式</a>
				</div>
				<div class="home_article_content">
					一寸光阴一寸金，因此，我们为您提供快捷易懂的学习内容。
					在这里，您可以通过一种易懂的便利的模式获得您需要的任何知识。
				</div>
				<div class="home_article_foot">
					<p>2016.6.23</p>
				</div>
				<div class="home_article_title">
					<a href="#">领先的 Web 技术教程 - 全部免费</a>
				</div>
				<div class="home_article_content">
					在 w3school，你可以找到你所需要的所有的网站建设教程。
					从基础的 HTML 到 CSS，乃至进阶的XML、SQL、JS、PHP 和 ASP.NET
				</div>
				<div class="home_article_foot">	
					<p>2016.6.23</p>
				</div>
				<div class="home_article_title">
					<a href="#">每个网站开发者都必须了解以下 Web 构件：</a>
				</div>
				<div class="home_article_content">
					HTML 4.01,CSS 的使用 （样式表）,XHTML,XML 和 XSLT,客户端脚本,服务器端脚本,通过 SQL 管理数据,Web 的未来
				</div>
				<div class="home_article_foot">
					<p>2016.6.23</p>
				</div>
			</div>
			<div id="content_right">
				<div id="time_title">
						今天是：
				</div>
				<div id="time_now">
					<script language="JavaScript">
							<!--
							document.write("<span id='time'></span>")
							setInterval("time.innerText=new Date().toLocaleString()",1000)
							//-->
					</script>
				</div>
				<hr/>
				<div id="introduction_img">
					<img src="../Public/img/introduction.jpg">
				</div>
				<div id="introduction_desc">
					<h2><img src="../Public/img/people.jpg">个人资料</h2>
					<p>姓名：One&nbspsilver<br/>民族：汉族<br/>爱好：足球，篮球<br/>班级:卓越工程师班<br/>学号：201571030106</p>
				</div>			
				<hr/>
				<div id="introduction_photo">
						<h2><img src="../Public/img/photo.jpg">相册展示<a href="__APP__?m=Index&a=photo" target="_blank">更多&gt;&gt;</a></h2>
						
					<div id="photo">
						<div class="photo_img">
							<a><img src="../Public/img/img1.jpg"></a>
						</div>
						<div class="photo_img">
							<a><img src="../Public/img/img2.jpg"></a>
						</div>
						<div class="photo_img">
							<a><img src="../Public/img/img3.jpg"></a>
						</div>
						<div class="photo_img">
							<a><img src="../Public/img/img4.jpg"></a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div id="footer">
		<div id="footer_desc">
			<p>Copyright<span style="font-family:Arial,Helvetica,sans-serif;">&copy;</span>2016.6.20--2016.7.1,Onesilver,All Rights Reserved<br/>1103146395@qq.com</p>
		</div>
	</div>
</body>
</html>