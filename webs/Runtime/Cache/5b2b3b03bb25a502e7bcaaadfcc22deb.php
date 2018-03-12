<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../Public/css/template.css">
	<link rel="stylesheet" type="text/css" href="../Public/css/love.css">
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
				<h2><img src="../Public/img/personl_1.jpg" id="personl_1">音乐</h2>
				<hr/>
				<pre>
我坐在角落
看霓虹闪烁
这个城市一如既往的寂寞
我知道 我的世界
已经没有你了
过了这么多年
也应该忘了
时常会软弱
也总想洒脱
我那迟迟不来的爱情
不找了找不到的
你还在想些什么
这世界已经疯了
你就别再自找折磨
别找了找不到的
上帝已如此忙碌
该来她总会来的
别找了
时常会软弱
也总想洒脱
我那迟迟不来的爱情
你在哪儿啊
有时候 张开怀抱
你才知道自己有多脆弱
开始习惯隐藏
不再乱想
别找了
不找了找不到的
你还在想些什么
这世界已经疯了
你却还在自找折磨
别找了找不到的
上帝已如此忙碌
该来她总会来的
				</pre>
				<div id="music_name">
					<h2>不找了</h2>
				</div>
				<div id="music_people">
					<h3>歌手：郭旭</h3>
				</div>
				<div id="music_image">
					<img src="../Public/img/music.jpg">
				</div>
				<div id="music_play">
					<audio controls="controls">
  						<source src="../Public/others/music.mp3" type="audio/ogg">
  						<source src="../Public/others/music.mp3" type="audio/mpeg">
						<embed height="100" width="100" src="../Public/others/music.mp3"/>
					</audio>
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