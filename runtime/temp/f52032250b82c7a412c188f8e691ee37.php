<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:30:"template/group/index/kefu.html";i:1716938982;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="target-densitydpi=device-dpi, width=device-width,height=device-height, initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="format-detection" content="telephone=no" />
		<title><?php echo $info['wxg_title']; ?></title>
		<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>
		<link type="text/css" rel="stylesheet" href="/template/group/index/css.css"/>

	</head>
	<body>
	<style>
	body{background:#f6f6f6;}
.linksssss{
	background:#FFF;
 width: 100%;
 height:200px;
}	


.linksssss .titlesss{
	width:100%;
	height:30px;
	line-height:30px;
	font-size:14px;
	padding-top:20px;
	padding-left:20px;
	margin-bottom:10px;
	font-weight:bolder;
}

.linksssss .titlesss_1{
	width:100%;
	height:30px;
	line-height:30px;
	font-size:14px;
	font-weight:bolder;
	margin-top:10px;
	text-align:center;
}


.linksssss .kukukuku{
	width:94%;
	height:90px;
	line-height:30px;
	font-size:14px;
	margin-left:3%;
	box-shadow: 1px 1px 1px 1px #CCC;
	border-radius: 15px;
}

.linksssss .kukukuku .kukukuku_img{
	margin-left:10px;
	margin-top:10px;
	margin-right:10px;
	width:70px;
	height:70px;
	float:left;
}


.linksssss .kukukuku .kukukuku_img img{
	width:70px;
	height:70px;
}


.linksssss .kukukuku .kukukuku_text{
	width:calc(100% - 90px - 80px);
	height:70px;
	float:left;
	margin-top:10px;
}

.linksssss .kukukuku .kukukuku_text .kukukuku_text_1{
	width::100%;
	height:20px;
	line-height:20px;
	font-weight:bolder;
	margin-bottom:5px;
}

.linksssss .kukukuku .kukukuku_text .kukukuku_text_2{
	width:100%:
	height:40px;
	line-height:20px;
	font-size:12px;
	color:#999;
}

.linksssss .kukukuku .kukukuku_but{
	width:60px;
	text-align:center;
	float:right;
	margin-top:30px;
	font-size:13px;
	margin-right:10px;
	border:1px solid #F00;
	color:#F00;
	border-radius: 25px;
}

.linksssss .kukukuku .kukukuku_but a{
	color:#F00;
}
	
.box{
	border-radius: 4%;

	width: 95%;
	margin: 20px auto;
}
.img-box{
 width: 100%;
}
.img-box img{
 width:100%;
 height:auto;
}
	</style>

<div class="box">
 <div class="img-box"><img src="<?php echo $info['wxg_kefu']; ?>"></div>
</div>
    <script>
        var titles = "<?php echo $info['wxg_title']; ?>";
        var citycode =returnCitySN.cname;
        titles = titles.replace("【本地】",citycode)
        $("#quntit").html(titles);
        $("title").html(titles);
    </script>
	</body>
</html>