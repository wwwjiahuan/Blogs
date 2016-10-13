<?php if (!defined('THINK_PATH')) exit();?>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>注册</title>
		<link rel="stylesheet" href="/xiangmu/blogs/Public/Css/register.css">
		<script type="text/javascript" src="/xiangmu/blogs/Public/Js/jquery.js"></script>
		<script>
			$(function(){
				var error=new Array();
				$('input[name="username"]').blur(function(){
					var username=$(this).val();
					$.get('/xiangmu/blogs/index.php/Home/Register/checkName',{'username':username},function(data){
						if(data=='不允许'){
							error['username']=1;
							$('input[name="username"]').after('<p id="umessage" style="color:red">该用户名已经注册</p>');
						}else{
							error['username']=0;
							$('#umessage').remove();
						}
					});
				});

				//提交表单
				$('img.register').click(function(){
					if(error['username']==1){
						return false;
					}else{
						$('form[name="myForm"]').submit();
					}
				});
			});
		</script>
	</head>
	<body>
		<div id='wrapper'>
			<div id="header">
	 			<div id="logo">
						<a href="/xiangmu/blogs/index.php/Home/Register/register">Blogs 
							<span> register</span>
						</a>
	 			</div>
 			</div>
 			<div id='main'>
				<div class="container">
					<div id='picture'>
						<div id="pitHead"><img src="/xiangmu/blogs/Public/Images/pitHead.png" alt="图片1"></div>
						<div id="pitBody">
							<img class="one" src="/xiangmu/blogs/Public/Images/9.jpg" alt="图片2">
							
						</div>
					</div>
					<div id='page'>
						
						<div id="switch_header">
							<a id="swileft" href="javascript:void(0)" hidefocus="true">账户注册</a>
						</div>
					
						<div id="switch_body">
							<form action="/xiangmu/blogs/index.php/Home/Register/doReg" method="post" name="myForm" id="myForm">
								<p><span></span></p>
								<label for="username" class="text">
									<input id="username" placeholder="用户名"  type="text" name="username">
								</label>
								<br><br>
								<label for="password" class="text">
									<input id="password" placeholder="密码"  type="password" name="password">
								</label>
								<br><br>
								<label for="repassword" class="text">
									<input id="repassword" placeholder="确认密码" type="password" name="repassword">
								</label>
								<br><br>
								<div id="switch_button" onclick="Save()">注　册</div>
								<script>
									$(document).ready(function(){
										//登录按钮颜色渐变颜色
										$("#switch_button").hover(
										function () {
											$(this).stop().animate({
												opacity: '0.60'
											}, 600);}, 
										function () {
											$(this).stop().animate({
												opacity: '1'
											}, 1000);
										}).on('click', function () {
											$('#myForm').submit();
										});
										
									});
									
								</script>
							</form>
						</div>
						<div id="switch_bottom">
							
						</div>
					</div>
				</div>
			</div>
			<div id='footer'>
				<strong>©2016 Powered by <a href="http://www.52feidian.com/" target="_blank"> Feidian Studio </a> | All Rights Reserved.</strong>
			</div>
		</div>







<!--
		<form action='/xiangmu/blogs/index.php/Home/Register/doReg' method='post' name='myForm'>
			用 户 名：<input type='text' name='username'/><br/>
			密　　码：<input type='password' name='password'/><br/>
			确认密码：<input type='password' name='repassword'/><br/>
			性　　别：<input type='radio' name='sex' value='1' class='radio'/>男
			      <input type='radio' name='sex' value='0' class='radio'/>女<br/>
			验 证 码：<input type='text' name='code'/>
					  <Message:code width='30' height='30' />	  
				      <br/>
			<img src='/xiangmu/blogs/Public/Images/register.gif' class='register'/>
			
		</form>

-->



	</body>
</html>