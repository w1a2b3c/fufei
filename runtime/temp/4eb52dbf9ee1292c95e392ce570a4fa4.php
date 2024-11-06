<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:43:"template/website/substationgroup/index.html";i:1716938982;s:68:"/www/wwwroot/ffjqplus.thuanai.cn/template/website/common_header.html";i:1716938982;s:65:"/www/wwwroot/ffjqplus.thuanai.cn/template/website/common_top.html";i:1716938982;s:68:"/www/wwwroot/ffjqplus.thuanai.cn/template/website/common_footer.html";i:1716938982;}*/ ?>
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
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-body">
          	<div class="layui-box">
			<?php if(($__APS__['add'])): ?><button class="layui-btn layuiadmin-btn-tags" data-type="add">添加</button><?php endif; ?>
			 </div>
			<div class="layui-box layui-laypage layui-laypage-molv"><?php echo $page; ?></div>
			<div class="layui-form" lay-filter="component-form-element">
            <table class="layui-table" lay-even="" lay-skin="nob">
            <thead>
              <tr>
                <th width="35">序号</th>
				<th>名称</th>
				<th>天数</th>
                <th>备注</th>
				<?php if(($__APS__['del'] or $__APS__['edit'])): ?><th width="100">管理</th><?php endif; ?>
              </tr> 
            </thead>
            <tbody>
             <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<tr id="tr_<?php echo $vo['su_g_id']; ?>">
					<td class="text-center"><?php echo $vo['su_g_id']; ?></td>
                    <td><span class="layui-badge layui-bg-gray"><?php echo $vo['su_g_title']; ?></span></td>
                    <td><span class="layui-badge-rim"><?php if($vo['su_g_day']==0): ?>不限<?php else: ?><?php echo $vo['su_g_day']; ?> 天<?php endif; ?></span></td>
                    <td><?php echo $vo['su_g_content']; ?></td>
					<?php if(($__APS__['del'] or $__APS__['edit'])): ?>
					<td>
							<div class="layui-btn-group">
								<?php if(($__APS__['del'])): ?><button class="layui-btn layui-btn-sm" onClick="calldel('<?php echo url('substationgroup/del',array('id'=>$vo['su_g_id'])); ?>','tr_<?php echo $vo['su_g_id']; ?>')"><i class="layui-icon">&#xe640;</i></button><?php endif; if(($__APS__['edit'])): ?><button class="layui-btn layui-btn-sm" data-type="edit" data-id="<?php echo $vo['su_g_id']; ?>"><i class="layui-icon">&#xe642;</i></button><?php endif; ?>
							</div>
					</td>
					<?php endif; ?>
				</tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
          </table> 
		  </div>
		  <div class="layui-box layui-laypage layui-laypage-molv"><?php echo $page; ?></div>
          </div>
        </div>
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
	layui.use(['index','form'], function(){
		
		var form = layui.form;
		


    var $ = layui.$, active = {
      <?php if(($__APS__['add'])): ?>
	  add: function(){
        layer.open({
          type: 2
          ,title: '添加分站群组'
          ,content: '<?php echo url('substationgroup/add'); ?>'
          ,area: ['550px', '430px']
        }); 
      },
	  <?php endif; if(($__APS__['edit'])): ?>
	  edit: function(){
		var id = $(this).data('id');
		var url = '<?php echo url('substationgroup/edit',array('id'=>'AAAAAA')); ?>';
		url = url.replace("AAAAAA",id)
        layer.open({
          type: 2
          ,title: '修改分站群组'
          ,content: url
          ,area: ['550px', '430px']
        }); 
      },
	  <?php endif; ?>
	  

    } 
	
	 
    $('.layui-btn').on('click', function(){
      var type = $(this).data('type');
      active[type] ? active[type].call(this) : '';
    });

	
  });
  </script>
</body>
</html>