<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../Public/css/template.css">
	<link rel="stylesheet" type="text/css" href="../Public/css/message.css">
	<title>Welcome to the blog of one silver</title>
	<script type="text/JavaScript" src="../Public/js/message.js"></script>
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
				<h2><img src="../Public/img/message_1.jpg">最新留言</h2>
				<div id="search_form">
					<form action="__APP__?m=Index&a=search" method="post" class="form_serach">
						姓名：<input type="text" name="name" class="input_name">
						<button type="submit" value="submit">搜索</button>
					</form>
				</div>
				<div id="show_message">
					<?php if(is_array($blog)): $i = 0; $__LIST__ = $blog;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- offset="" length='3' -->
						<div class="message_box">
							<p class="show_floor">第<?php echo ($vo["id"]); ?>楼</p>
							<p class="message"><?php echo ($vo["message"]); ?></p>
							<div class="show_personl">
								<ul>
									<li><a href="#">--<?php echo ($vo["name"]); ?></a>
										<ul>
											<li>姓名：<?php echo ($vo["name"]); ?>
												<a href="__APP__?m=Index&a=delete&id=<?php echo ($vo["id"]); ?>" onclick="return confirmd()">
													<button>删除</button>
												</a>
												<a href="__APP__?m=Index&a=edit&id=<?php echo ($vo["id"]); ?>">
													<button >修改</button>
												</a>
											</li>
											<li>性别：<?php echo ($vo["gender"]); ?></li>
											<li>年级：<?php echo ($vo["grade"]); ?></li>
											<li>爱好：<?php echo ($vo["hobby"]); ?></li>
											<li>邮箱：<?php echo ($vo["email"]); ?></li>
										</ul>
									</li>
								</ul>
							</div>
							<p class="auther">
								<?php echo ($vo["create_time"]); ?>
							</p>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<h2>
					<img src="../Public/img/message_2.jpg">发布留言</h2>
				<hr/>
				<div id="message">
					<form action="__APP__?m=Index&a=insert" method="post" name="form" class="form_add">
						姓名：
							<input type="text" name="name" class="input_name" required />
							<h4 class="name_msg">*必填</h4><b></b>
							<br/>
						性别：	
							男性<input type="radio" checked="checked" name="gender" value="男性" class="input_sex"/>
							女性<input type="radio" name="gender" value="女性"class="input_sex"/><br/>
						电邮：
							<input type="text" name="email" values="email" class="input_email" required/>
							<h4 class="email_msg">*必填</h4><br/>
						爱好（可多选）：<br/>
							&nbsp;篮球<input type="checkbox" name="hobby[]" value="篮球" class="input_sex">
							足球<input type="checkbox" name="hobby[]" value="足球" class="input_sex">
							羽毛球<input type="checkbox" name="hobby[]" value="羽毛球" class="input_sex">
							网球<input type="checkbox" name="hobby[]" value="网球" class="input_sex">
						<br/>
						年级：		
							<select name="grade" class="input_select">
								<option value="大一"name="grade">大一</option>
								<option value="大二"name="grade">大二</option>
								<option value="大三"name="grade">大三</option>
								<option value="大四"name="grade">大四</option>
								</select>
						<br/>				
						<textarea name="message" required placeholder="请在这里输入留言：（少于200字）"></textarea><br/>
						<button type="submit" value="submit">
							提交
						</button>
					</form>
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