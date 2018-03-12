<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../Public/css/template.css">
	<link rel="stylesheet" type="text/css" href="../Public/css/edit.css">
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
				<h2><img src="../Public/img/message_1.jpg">修改留言</h2>
				<hr/>
				<div id="message">
					<form method="post" action="__APP__?m=Index&a=update">
						<p>第<?php echo ($edita["id"]); ?>楼</p>
						姓名：
							<input type="text" name="name" class="input_name" value="<?php echo ($edita["name"]); ?>"/>
							<p class="name_msg">*必填</p>
							<br/>
						性别：	
							男性<input type="radio" name="gender" value="男性" class="input_sex"<?php if(in_array(($data["e"]), is_array($edita["gender"])?$edita["gender"]:explode(',',$edita["gender"]))): ?>checked="checked"<?php endif; ?>   />
							女性<input type="radio" name="gender" value="女性"class="input_sex" <?php if(in_array(($data["f"]), is_array($edita["gender"])?$edita["gender"]:explode(',',$edita["gender"]))): ?>checked="checked"<?php endif; ?>   />
							<br/>
						电邮：
							<input type="text" name="email" values="email" class="input_email" value="<?php echo ($edita["email"]); ?>"/>
							<p class="name_msg">*必填</p><br/>
						爱好（可多选）：<br/>
							&nbsp;篮球<input type="checkbox" name="hobby[]" value="篮球" class="input_sex"<?php if(in_array(($data["a"]), is_array($edita["hobby"])?$edita["hobby"]:explode(',',$edita["hobby"]))): ?>checked="checked"<?php endif; ?>/>
							足球<input type="checkbox" name="hobby[]" value="足球" class="input_sex"<?php if(in_array(($data["b"]), is_array($edita["hobby"])?$edita["hobby"]:explode(',',$edita["hobby"]))): ?>checked="checked"<?php endif; ?>/>
							羽毛球<input type="checkbox" name="hobby[]" value="羽毛球" class="input_sex"<?php if(in_array(($data["c"]), is_array($edita["hobby"])?$edita["hobby"]:explode(',',$edita["hobby"]))): ?>checked="checked"<?php endif; ?>/>
							网球<input type="checkbox" name="hobby[]" value="网球" class="input_sex"<?php if(in_array(($data["d"]), is_array($edita["hobby"])?$edita["hobby"]:explode(',',$edita["hobby"]))): ?>checked="checked"<?php endif; ?>/>
							<br/>
						年级：		
							<select name="grade" class="input_select">
								<option value="大一"name="grade"<?php if(($edita["grade"]) == "大一"): ?>selected="selected"<?php endif; ?>>大一</option>

								<option value="大二"name="grade"<?php if(($edita["grade"]) == "大二"): ?>selected="selected"<?php endif; ?>>大二</option>
								<option value="大三"name="grade"<?php if(($edita["grade"]) == "大三"): ?>selected="selected"<?php endif; ?>>大三</option>
								<option value="大四"name="grade"<?php if(($edita["grade"]) == "大四"): ?>selected="selected"<?php endif; ?>>大四</option>
								</select>
							<br/>				
						<textarea name="message" placeholder="请在这里输入留言：（少于200字）"><?php echo ($edita["message"]); ?></textarea>
							<br/>
						<input type="hidden" name="id" value="<?php echo ($edita["id"]); ?>"/>
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