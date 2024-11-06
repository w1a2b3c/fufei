<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:36:"template/fenxiao/wxgroup/addimg.html";i:1716938980;s:68:"/www/wwwroot/ffjqplus.thuanai.cn/template/fenxiao/common_header.html";i:1716938980;s:65:"/www/wwwroot/ffjqplus.thuanai.cn/template/fenxiao/common_top.html";i:1716938980;s:68:"/www/wwwroot/ffjqplus.thuanai.cn/template/fenxiao/common_footer.html";i:1716938980;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
  <title><?php echo session("du_name"); ?> <?php echo $subweb['oaname']; ?></title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="/template/layuiadmin/layui/css/layui.css" media="all">
<link rel="stylesheet" href="/template/layuiadmin/style/admin.css" media="all">
<link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/5.15.1/css/all.css" rel="stylesheet">
<script src="https://cdn.bootcdn.net/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
</head>
<body>

  <div class="layui-fluid">
    <div class="layui-card">
      <div class="layui-card-body" style="padding: 15px;">
        <form class="layui-form" action="" lay-filter="component-form-group">
        
          
          <div class="layui-form-item">
            <label class="layui-form-label">备注信息</label>
            <div class="layui-input-block">
              <input name="wxg_content" type="text"  class="layui-input" id="wxg_content" placeholder="备注信息" >
            </div>
          </div>
          
          
         <div class="layui-form-item">
            <label class="layui-form-label">引导浏览器打开（防投诉）</label>
            <div class="layui-input-block">
              <input type="radio" name="wxonoff" value="1" title="微信能打开" checked="">
              <input type="radio" name="wxonoff" value="2" title="微信内不能打开">
            </div>
          </div>
          
        
<div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
  <ul class="layui-tab-title">
    <li class="layui-this">基础设置</li>
    <li>展示广告</li>
  </ul>
  <div class="layui-tab-content" >
    <div class="layui-tab-item layui-show"> 
        
        
        
        
		<div class="layui-form-item">
            <label class="layui-form-label">展示内容</label>
			<input type="hidden" id="wxg_headimg" name="wxg_headimg" value="">
            <div class="layui-input-block">
 <div class="layui-upload">
  <button type="button" class="layui-btn" id="test1">上传图片</button>
  <div class="layui-upload-list">
    <img class="layui-upload-img" id="demo1" style="width:60px; height:60px;">
    <p id="demoText"></p>
  </div>
</div>  
            </div>
          </div> 
          
          <div class="layui-form-item">
            <label class="layui-form-label">入群费用</label>
            <div class="layui-input-block">
              <input name="money" type="number"  class="layui-input" id="money" placeholder="入群费用">
            </div>
          </div> 
             
        
        <div class="layui-form-item">
            <label class="layui-form-label">群名称</label>
            <div class="layui-input-block">
              <input name="title" type="text"  class="layui-input" id="title" placeholder="群名称">
            </div>
          </div>  
          

          
          <div class="layui-form-item">
            <label class="layui-form-label">按键名称</label>
            <div class="layui-input-block">
              <input name="buttitle" type="text"  class="layui-input" id="buttitle" placeholder="按键名称" value="加入群，学习更多副业知识">
            </div>
          </div>
         
          <div class="layui-form-item">
            <label class="layui-form-label">状态</label>
            <div class="layui-input-block">
              <input type="radio" name="status" value="1" title="启用" checked="">
              <input type="radio" name="status" value="2" title="禁用">
            </div>
          </div>
          
          
          
	</div>

    <div class="layui-tab-item">          
          
        
		<div class="layui-form-item">
            <label class="layui-form-label">客服二维码</label>
			<input type="hidden" id="wxg_kefu" name="wxg_kefu" value="">
            <div class="layui-input-block">
 <div class="layui-upload">
  <button type="button" class="layui-btn" id="test3">上传图片</button>
  <div class="layui-upload-list">
    <img class="layui-upload-img" id="demo3" style="width:200px; height:200px;">
    <p id="demoText"></p>
  </div>
</div>  
            </div>
          </div>    
        
        
              
		<div class="layui-form-item">
            <label class="layui-form-label">广告二维码</label>
			<input type="hidden" id="wxg_adurl" name="wxg_adurl" value="">
            <div class="layui-input-block">
 <div class="layui-upload">
  <button type="button" class="layui-btn" id="test2">上传图片</button>
  <div class="layui-upload-list">
    <img class="layui-upload-img" id="demo2" style="width:200px; height:200px;">
    <p id="demoText"></p>
  </div>
</div>  
            </div>
          </div>       
              


            <!--客服信息-->  
          <div class="layui-form-item">
            <label class="layui-form-label">广告客服信息</label>
            <div class="layui-input-block">
              <input type="radio" name="wxg_jhao" value="1" title="不显示" checked="">
              <input type="radio" name="wxg_jhao" value="2" title="显示">
            </div>
          </div>
          
          
        
		<div class="layui-form-item">
            <label class="layui-form-label">客服头像</label>
			<input type="hidden" id="wxg_jhaoimg" name="wxg_jhaoimg" value="">
            <div class="layui-input-block">
 <div class="layui-upload">
  <button type="button" class="layui-btn" id="test8">上传图片</button>
  <div class="layui-upload-list">
    <img class="layui-upload-img" id="demo8" style="width:200px; height:200px;">
    <p id="demoText"></p>
  </div>
</div>  
            </div>
          </div>
          
          <div class="layui-form-item">
            <label class="layui-form-label">客服标题</label>
            <div class="layui-input-block">
              <input name="wxg_jhaotitle" type="text"  class="layui-input" id="wxg_jhaotitle" value="VIP专属客服">
            </div>
          </div>
          
          
          <div class="layui-form-item">
            <label class="layui-form-label">客服描述</label>
            <div class="layui-input-block">
              <input name="wxg_jhaocontent" type="text"  class="layui-input" id="wxg_jhaocontent" value="出现不能付款，不能入群等问题，请联系我！看到信息发回">
            </div>
          </div>
          <!--客服信息-->
              
              
              
              
                
          
	</div>
  </div>
</div>           
          
	  
         <div class="layui-form-item layui-layout-admin">
              <div class="layui-footer" style="left: 0;">
                <div class="layui-btn sub">立即提交</div>
                <button type="reset" class="layui-btn layui-btn-primary ">重置</button>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<script src="/template/layuiadmin/layui/layui.js"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="/template/showjs.js"></script>
<script>
  layui.config({
    base: '/template/layuiadmin/' //静态资源所在路径
  }).extend({
    index: 'lib/index' //主入口模块
  }).use(['index','util','form', 'laydate','set','layer']);
</script> 
<script>
layui.use(['upload', 'element', 'layer'], function(){
  var $ = layui.jquery
  ,upload = layui.upload
  ,element = layui.element
  ,layer = layui.layer;
  
  //常规使用 - 普通图片上传
  var uploadInst = upload.render({
    elem: '#test1'
    ,url: '<?php echo url('upload/uploadface'); ?>' //改成您自己的上传接口
    ,before: function(obj){
      //预读本地文件示例，不支持ie8
      //obj.preview(function(index, file, result){
      //  $('#demo1').attr('src', result); //图片链接（base64）
      //});
    }
    ,done: function(res){
      //如果上传失败
      if(res.success == "error"){
        return layer.msg('上传失败');
      }else{
		$("#wxg_headimg").val(res.fileurl);
		$("#demo1").attr("src",res.fileurl);
		return layer.msg('上传完毕', {icon: 1});
	  }
	  
      //上传成功的一些操作
      //……
      $('#demoText').html(''); //置空上传失败的状态
    }
    ,error: function(){
      //演示失败状态，并实现重传
      var demoText = $('#demoText');
      demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
      demoText.find('.demo-reload').on('click', function(){
        uploadInst.upload();
      });
    }
  });
  
  
  //常规使用 - 普通图片上传
  var uploadInst = upload.render({
    elem: '#test2'
    ,url: '<?php echo url('upload/uploadface'); ?>' //改成您自己的上传接口
    ,before: function(obj){
      //预读本地文件示例，不支持ie8
      //obj.preview(function(index, file, result){
      //  $('#demo1').attr('src', result); //图片链接（base64）
      //});
    }
    ,done: function(res){
      //如果上传失败
      if(res.success == "error"){
        return layer.msg('上传失败');
      }else{
		$("#wxg_adurl").val(res.fileurl);
		$("#demo2").attr("src",res.fileurl);
		return layer.msg('上传完毕', {icon: 1});
	  }
	  
      //上传成功的一些操作
      //……
      $('#demoText').html(''); //置空上传失败的状态
    }
    ,error: function(){
      //演示失败状态，并实现重传
      var demoText = $('#demoText');
      demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
      demoText.find('.demo-reload').on('click', function(){
        uploadInst.upload();
      });
    }
  }); 
  
  
  
  
  
  //常规使用 - 普通图片上传
  var uploadInst = upload.render({
    elem: '#test3'
    ,url: '<?php echo url('upload/uploadface'); ?>' //改成您自己的上传接口
    ,before: function(obj){
      //预读本地文件示例，不支持ie8
      //obj.preview(function(index, file, result){
      //  $('#demo1').attr('src', result); //图片链接（base64）
      //});
    }
    ,done: function(res){
      //如果上传失败
      if(res.success == "error"){
        return layer.msg('上传失败');
      }else{
		$("#wxg_kefu").val(res.fileurl);
		$("#demo3").attr("src",res.fileurl);
		return layer.msg('上传完毕', {icon: 1});
	  }
	  
      //上传成功的一些操作
      //……
      $('#demoText').html(''); //置空上传失败的状态
    }
    ,error: function(){
      //演示失败状态，并实现重传
      var demoText = $('#demoText');
      demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
      demoText.find('.demo-reload').on('click', function(){
        uploadInst.upload();
      });
    }
  }); 
  
  
  
  
  
  
  //常规使用 - 普通图片上传
  var uploadInst = upload.render({
    elem: '#test5'
    ,url: '<?php echo url('upload/uploadface'); ?>' //改成您自己的上传接口
    ,before: function(obj){
      //预读本地文件示例，不支持ie8
      //obj.preview(function(index, file, result){
      //  $('#demo1').attr('src', result); //图片链接（base64）
      //});
    }
    ,done: function(res){
      //如果上传失败
      if(res.success == "error"){
        return layer.msg('上传失败');
      }else{
		$("#kuai_imgs1").val(res.fileurl);
		$("#demo5").attr("src",res.fileurl);
		return layer.msg('上传完毕', {icon: 1});
	  }
	  
      //上传成功的一些操作
      //……
      $('#demoText5').html(''); //置空上传失败的状态
    }
    ,error: function(){
      //演示失败状态，并实现重传
      var demoText = $('#demoText5');
      demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
      demoText.find('.demo-reload').on('click', function(){
        uploadInst.upload();
      });
    }
  }); 
  
  
  
  //常规使用 - 普通图片上传
  var uploadInst = upload.render({
    elem: '#test8'
    ,url: '<?php echo url('upload/uploadface'); ?>' //改成您自己的上传接口
    ,before: function(obj){
      //预读本地文件示例，不支持ie8
      //obj.preview(function(index, file, result){
      //  $('#demo1').attr('src', result); //图片链接（base64）
      //});
    }
    ,done: function(res){
      //如果上传失败
      if(res.success == "error"){
        return layer.msg('上传失败');
      }else{
		$("#wxg_jhaoimg").val(res.fileurl);
		$("#demo8").attr("src",res.fileurl);
		return layer.msg('上传完毕', {icon: 1});
	  }
	  
      //上传成功的一些操作
      //……
      $('#demoText5').html(''); //置空上传失败的状态
    }
    ,error: function(){
      //演示失败状态，并实现重传
      var demoText = $('#demoText5');
      demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-xs demo-reload">重试</a>');
      demoText.find('.demo-reload').on('click', function(){
        uploadInst.upload();
      });
    }
  });
  
  
  
});
</script>
<script>
$(".sub").click(function(){
	//if(!$(".btn").hasClass("sub")){return false;}
	var wxg_headimg    = $("#wxg_headimg").val();
	var title          = $("#title").val();
	var subtitle       = "副标题";
	var qjj_title      = "无";
	var qjj_content    = "无";
	var redcount       = 0;
	var dzcount        = 0;
	var xxcount        = 0;
	var buttitle       = $("#buttitle").val();
	var money          = $("#money").val();
	var kuai_title     = "无";
	var kuai_content   = "无";
	var qunyou_content = "无";
	var wxg_adurl      = $("#wxg_adurl").val();
	var headimg        = "qq";
	var wxg_kefu       = $("#wxg_kefu").val();
	var wxg_content    = $("#wxg_content").val();
	var status         = $("input[name='status']:checked").val();
	
	var kuai_title1 = "无";
	var kuai_imgs1 = "无";
	
	
	var wxg_jhao = $("input[name='wxg_jhao']:checked").val();
	var wxg_jhaoimg = $("#wxg_jhaoimg").val();
	var wxg_jhaotitle = $("#wxg_jhaotitle").val();
	var wxg_jhaocontent = $("#wxg_jhaocontent").val();
	var wxonoff         = $("input[name='wxonoff']:checked").val();
	
	if(wxg_headimg == ""){
		show_error("展示内容不能为空!");
		return false;
	}
	
	if(money == ""){
		show_error("入群费用不能为空!");
		return false;
	}

	if(title == ""){
		show_error("群名称不能为空!");
		return false;
	}
	
	if(subtitle == ""){
		show_error("副标题不能为空!");
		return false;
	}
	
	if(buttitle == ""){
		show_error("按键名称不能为空!");
		return false;
	}
	
	$.ajax({
		type:"POST",
		url:"<?php echo url('wxgroup/add'); ?>",
		dataType:"json",
		data:{
			wxg_headimg:wxg_headimg,
			title:title,
			subtitle:subtitle,
			qjj_title:qjj_title,
			qjj_content:qjj_content,
			redcount:redcount,
			dzcount:dzcount,
			xxcount:xxcount,
			buttitle:buttitle,
			status:status,
			money:money,
			kuai_title:kuai_title,
			kuai_content:kuai_content,
			qunyou_content:qunyou_content,
			wxg_adurl:wxg_adurl,
			headimg:headimg,
			wxg_kefu:wxg_kefu,
			wxg_content:wxg_content,
			wxg_type:2,
			kuai_title1:kuai_title1,
			kuai_imgs1:kuai_imgs1,
			wxg_jhao:wxg_jhao,
            wxg_jhaoimg:wxg_jhaoimg,
            wxg_jhaotitle:wxg_jhaotitle,
            wxg_jhaocontent:wxg_jhaocontent,
            wxonoff:wxonoff,
		},
		success:function(res){
			if(res.status == 1){
				window.parent.layer.closeAll();//关闭弹窗
				window.parent.location.reload();
				//show_toast_callurl(res.data,"<?php echo url('device/index'); ?>","success");
			}else{
				show_error(res.msg);
			}
		},
		error:function(jqXHR){
			console.log("Error: "+jqXHR.status);
		},
	});
	
});
</script>
</body>
</html>
