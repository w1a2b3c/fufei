<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:36:"template/substation/index/index.html";i:1716938982;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $subweb['title']; ?> 总站系统</title>
    <script src="https://s3.pstatp.com/cdn/expire-1-M/jquery/3.3.1/jquery.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        html {
            height: 100%;
        }
        body {
            height: 100%;
        }
        .container {
            height: 100%;
            background-image: linear-gradient(to right, #fbc2eb, #a6c1ee);
        }
        .login-wrapper {
            background-color: #fff;
            width: 358px;
            height: 588px;
            border-radius: 15px;
            padding: 0 50px;
            position: relative;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
        .header {
            font-size: 38px;
            font-weight: bold;
            text-align: center;
            line-height: 200px;
        }
        .input-item {
            display: block;
            width: 100%;
            margin-bottom: 20px;
            border: 0;
            padding: 10px;
            border-bottom: 1px solid rgb(128, 125, 125);
            font-size: 15px;
            outline: none;
        }
        .input-item:placeholder {
            text-transform: uppercase;
        }
        .btn {
            text-align: center;
            padding: 10px;
            width: 100%;
            margin-top: 40px;
            background-image: linear-gradient(to right, #a6c1ee, #fbc2eb);
            color: #fff;
        }
        .msg {
            text-align: center;
            line-height: 88px;
        }
        a {
            text-decoration-line: none;
            color: #abc1ee;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-wrapper">
            <div class="header">掘金系统总站后台</div>
            <div class="form-wrapper">
                <input type="text" name="username" placeholder="username" id="username" class="input-item">
                <input type="password" name="password" placeholder="password" id="password" class="input-item">
                <div class="btn" onclick="login()">登录</div>
                <div class="btn" onclick="location='http://jiandan.seecss.cn/fenxiao.php'"  >代理后台登录</div>
            </div>
        </div>
    </div>
    <script>
        function login(){
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
					location.href = '<?php echo url('center/index'); ?>';
				}else{
					alert(res.msg);
				}
				
			},
			error:function(jqXHR){
				console.log("Error: "+jqXHR.status);
			},
		});
        }
    </script>
</body>
</html>