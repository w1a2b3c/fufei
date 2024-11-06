<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:33:"template/website/index/index.html";i:1720186708;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title><?php echo $subweb['title']; ?></title>
		<meta name="renderer" content="webkit">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<link rel="stylesheet" href="/template/layuiadmin/layui/css/layui.css" media="all">
		<link rel="stylesheet" href="/template/layuiadmin/style/admin.css" media="all">
		<link rel="stylesheet" type="text/css" href="/template/layuiadmin/style/css/login.css"/>
	</head>
	<body>
		<div class="bg1"></div>
		<div class="gyl">
			<?php echo $subweb['oaname']; ?>
			<div class="gy2">：客服微信：13039939351</div>
		</div>
		<div class="bg">
			<div class="wel">管理员登录</div>
			<div class="user">
				<div id="yonghu" style="">用户名</div>
				<input type="text" name="username" id="username" lay-verify="required" placeholder="请输入账号" />
			</div>
			<div class="password">
				<div id="yonghu">密&nbsp;&nbsp;&nbsp;码</div>
				<input type="password" name="password" id="password" lay-verify="required" placeholder="请输入密码">
			</div>
			<button class="btn" type="button" name="登录" value="登录" lay-submit lay-filter="LAY-user-login-submit">登入</button>
		</div>
		<script src="/template/layuiadmin/layui/layui.js"></script>   
<script>
layui.config({
	base: '/template/layuiadmin/' //静态资源所在路径
}).extend({
	index: 'lib/index' //主入口模块
}).use(['index', 'user'], function(){
	var $ = layui.$
    ,setter = layui.setter
    ,admin = layui.admin
    ,form = layui.form
    ,router = layui.router()
    ,search = router.search;
    form.render();
    //提交
    form.on('submit(LAY-user-login-submit)', function(obj){
		var username = $("#username").val();
		var password = $("#password").val();
		
		$.ajax({
			type:"POST",
			url:"<?php echo url('index/login'); ?>",
			dataType:"json",
			data:{
				username:username,
				password:password,
			},
			success:function(res){
				if(res.status == 1){
					layer.msg(res.msg, {offset: '15px',icon: 1,time: 1000}, function(){location.href = '<?php echo url('center/index'); ?>';});
				}else{
					layer.msg(res.msg, {offset: '15px',icon: 2});
				}
				
			},
			error:function(jqXHR){
				console.log("Error: "+jqXHR.status);
			},
		});
      
    });    
  });
  </script>
	</body>
</html>