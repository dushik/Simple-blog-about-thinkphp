<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../Public/css/template.css">
	<link rel="stylesheet" type="text/css" href="../Public/css/home.css">
	<script src="../Public/js/echarts.min.js"></script>
	<!-- <script src="../Public/js/echarts-liquidfill.js"></script> -->	
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
				<h2>
					<img src="../Public/img/motto_1.jpg">我的家乡--中国&middot;甘肃
				</h2>
				<hr/>

			    <div id="home_desc" style="width: 600px;height:400px;"></div>
			    <script type="text/javascript">
			        // 基于准备好的dom，初始化echarts实例
			        var myChart = echarts.init(document.getElementById('home_desc'));

			        // 指定图表的配置项和数据
			        var option = {
			            title: {
			                show:true,
			                text:'这是主标题',
			                subtext: '这是副标题',
			                left:20,
			                borderColor:'red',
			                borderWidth:5
			            },
			            toolbox:{
			                show:true,
			                feature:{
			                    dataView:{
			                        show:true   //数据视图
			                    },
			                    saveAsImage:{
			                        show:true
			                    },
			                    restore:{
			                        show:true   //还原
			                    },
			                    dataZoom:{      //数据缩放
			                        show:true
			                    },
			                    magicType:{
			                        type:['line','bar']     //动态类型切换
			                    }
			                }
			            },
			            tooltip: {
			                trigger:'axis'
			            },
			            legend: {
			                data:['销量']
			            },
			            xAxis: {
			                data: ["衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子"]
			            },
			            yAxis: {},
			            series: [{
			                name: '销量',
			                type: 'bar',
			                data: [5, 20, 36, 10, 10, 20]
			            },
			            {
			                name: '产量',
			                type: 'line',
			                data: [7,30,50,11,40,80],
			                markPoint:{
			                    data:[
			                        {type: 'max',name: '最大值'},        //标记点
			                        {type: 'min',name: '最小值'}
			                    ]
			                },
			                markLine:{
			                    data:[
			                    {type:'average',name:'平均值'}           //标记线
			                    ]
			                }
			            }]
			        };

			        // 使用刚指定的配置项和数据显示图表。
			        myChart.setOption(option);
			    </script>


		<!-- 		<hr/>
				<img src="../Public/img/motto_2.jpg" id="home_image_2"> -->	
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