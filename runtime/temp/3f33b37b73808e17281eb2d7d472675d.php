<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:38:"template/website/group/addnavigat.html";i:1716938982;s:68:"/www/wwwroot/ffjqplus.thuanai.cn/template/website/common_header.html";i:1716938982;s:65:"/www/wwwroot/ffjqplus.thuanai.cn/template/website/common_top.html";i:1716938982;s:68:"/www/wwwroot/ffjqplus.thuanai.cn/template/website/common_footer.html";i:1716938982;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
  <title><?php echo $subweb['oaname']; ?></title>
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
            <label class="layui-form-label">群组名称</label>
            <div class="layui-input-block">
              <input name="title" type="text" disabled class="layui-input" id="title" value="<?php echo $info['title']; ?>" readonly="readonly"   placeholder="群组名称">
            </div>
          </div>    

		  <div class="layui-form-item">
            <label class="layui-form-label">导航名称</label>
            <div class="layui-input-block">
			
			
			<table class="layui-table" lay-even="" lay-skin="nob">
            <tbody>
             <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<tr id="tr_<?php echo $vo['ns_id']; ?>">
					<td><input type="checkbox" name="model" value="<?php echo $vo['ns_id']; ?>" title="<?php echo $vo['ns_title']; ?>" <?php if(in_array(($vo['ns_id']), is_array($nav_ids)?$nav_ids:explode(',',$nav_ids))): ?>checked<?php endif; ?>></td>
					
				</tr>
				<?php if(is_array($vo['data']) || $vo['data'] instanceof \think\Collection || $vo['data'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
				<tr id="tr_<?php echo $vo1['ns_id']; ?>">
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|_&nbsp;<input type="checkbox" name="model" value="<?php echo $vo1['ns_id']; ?>" title="<?php echo $vo1['ns_title']; ?>" <?php if(in_array(($vo1['ns_id']), is_array($nav_ids)?$nav_ids:explode(',',$nav_ids))): ?>checked<?php endif; ?>></td>
					
				</tr>
				<?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
          </table>
			
			
			
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
$(".sub").click(function(){
	//if(!$(".btn").hasClass("sub")){return false;}

	var navs  = "";
	$.each($('input:checkbox'),function(){
		if(this.checked){
			navs += $(this).val()+",";
		}
	});
	
	
	$.ajax({
		type:"POST",
		url:"<?php echo url('group/addnavigat'); ?>",
		dataType:"json",
		data:{
			id:"<?php echo $info['id']; ?>",
			navs:navs,
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
