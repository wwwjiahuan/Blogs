<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
	<title>Index</title>
	<link rel="stylesheet" href="/xiangmu/blogs/Public/Css/basic.css">
	<link rel="stylesheet" href="/xiangmu/blogs/Public/Css/index.css">
	<body>
		<div id='wrapper'>

			<div id='logo'>
				<p>后台管理博客</p>
				<!--<span><a href='/xiangmu/blogs/index.php/Home/Login/login' target='_top' class='register'>登录</a>｜<a href='/xiangmu/blogs/index.php/Home/Register/register' class='login'>注册</a></span>-->
				<p class='my'>欢迎你 <?php echo (session('username')); ?> <a href='/xiangmu/blogs/index.php/Home/Loginbackstage/loginbackstage' target='_top'>退出</a></p>
			</div>

			<div id='nav'>

				<ul>
	<li><a href="/xiangmu/blogs/index.php/Home/Index/index">主页</a></li>
	<li><a href="/xiangmu/blogs/index.php/Home/Column/column">博客专栏</a></li>
	<li><a href="/xiangmu/blogs/index.php/Home/Professor/professor">博客专家</a></li>
	<li><a href="/xiangmu/blogs/index.php/Home/Rankinglist/rankinglist">排行榜</a></li>
	<li><a href="/xiangmu/blogs/index.php/Home/Myblog/myblog">我的博客</a></li>
</ul>
			</div>
			<div id='main_body'>
				<div id='main'>
			
					<div id='content'>
						<div id='content_box'>
							<?php if(is_array($list)): foreach($list as $key=>$vo): ?><p class='title'><span>题目:</span><?php echo ($vo["title"]); ?></p>
								<p class='content'>内　容:<?php echo ($vo["content"]); ?></p>
								
								<p class='username'>留言人:<?php echo ($vo["username"]); ?></p>
								<p class='filename'>附件名:<?php echo ($vo["filename"]); ?></p>
								<p class='time'> <?php echo (date('Y m d H:i:s',$vo["time"])); ?></p>
								<p class='function'>
								<a href="/xiangmu/blogs/index.php/Home/Backstage/update?id=<?php echo ($vo["id"]); ?>" class='update'>修改</a>
								<a href="/xiangmu/blogs/index.php/Home/Backstage/delete?id=<?php echo ($vo["id"]); ?>" class='delete'>删除</a>
								</p>
								<p class='line'></p><?php endforeach; endif; ?>
						<?php echo ($show); ?>
						</div>
						
					</div>

					<div id='about'>
						<div id="expert_title">
							Programmer
							<img class="triangle" alt="img" src="http://static.blog.csdn.net/static/images/triangle_right.png">
						</div>
						<div id='about_writer'>
							<img class="head_expert" src="/xiangmu/blogs/Public/Images/my.png" alt="图片">
							<p class='writer_name'>王佳欢</p>
							<p class='writer_description'>未来web架构师</p>
							<img class="icon_l" alt="img" src="http://static.blog.csdn.net/static/images/icon_l.png">
							<img class="icon_r" alt="img" src="http://static.blog.csdn.net/static/images/icon_r.png">
							<p class='writer_content'>来自华中农业大学，计科1504，沸点工作室</p>
						</div>
					</div>
				</div>
			</div>
			

			<div id='footer'>
				<strong>©2016 Powered by <a href="http://www.52feidian.com/" target="_blank"> Feidian Studio </a> | All Rights Reserved.</strong>
			</div>
		</div>
		
	</body>
</html>