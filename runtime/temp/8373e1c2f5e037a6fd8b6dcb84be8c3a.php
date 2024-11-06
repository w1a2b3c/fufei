<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:35:"template/substation/data/index.html";i:1716938982;s:71:"/www/wwwroot/ffjqplus.thuanai.cn/template/substation/common_header.html";i:1716938982;s:68:"/www/wwwroot/ffjqplus.thuanai.cn/template/substation/common_top.html";i:1716938982;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>付费进群系统数据可视化大屏</title>
    <script type="text/javascript" src="/template/substation/data/js/jquery.js"></script>
    <link rel="stylesheet" href="/template/substation/data/css/comon0.css">
      <meta charset="utf-8">
  <title><?php echo session("su_title"); ?> <?php echo $subweb['oaname']; ?></title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="/template/layuiadmin/layui/css/layui.css" media="all">
<link rel="stylesheet" href="/template/layuiadmin/style/admin.css" media="all">
<link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/5.15.1/css/all.css" rel="stylesheet">
<script src="https://cdn.bootcdn.net/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
</head>
<script type="text/javascript">
	$(document).ready(function(){
		var html=$(".wrap ul").html()
		$(".wrap ul").append(html)
		var ls=$(".wrap li").length/2+1
		i=0
		ref = setInterval(function(){
			i++
			if(i==ls){
				i=1
				$(".wrap ul").css({marginTop:0})
				$(".wrap ul").animate({marginTop:-'.52'*i+'rem'},1000)
			}
	    	$(".wrap ul").animate({marginTop:-'.52'*i+'rem'},1000)


		},2400);



				var html2=$(".adduser ul").html()
		$(".adduser ul").append(html2)
		var ls2=$(".adduser li").length/2+1
		a=0
		ref = setInterval(function(){
			a++
			if(a==ls2){
				a=1
				$(".adduser ul").css({marginTop:0})
				$(".adduser ul").animate({marginTop:-'.5'*a+'rem'},800)
			}
	    	$(".adduser ul").animate({marginTop:-'.5'*a+'rem'},800)


		},4300);








	})
</script>
<body>
    <div class="loading">
        <div class="loadbox"> <img src="/template/substation/data/images/loading.gif"> 页面加载中... </div>
    </div>
    <div class="head">
        <h1><?php echo $subweb['oaname']; ?>分站数据可视化大屏</h1>
        <div class="weather"><span id=localtime></span></div>
    </div>
    <div class="mainbox">
        <ul class="clearfix">
            <li>
                <div class="boxall" style="">
                    <div class="alltitle">销售数据统计</div>

                    <div class="sycm">
                        <ul class="clearfix">
                            <li><h2><?php echo round($d_money_count,2); ?></h2><span>今日销售额</span></li>
                            <li><h2><?php echo $d_bill_count; ?></h2><span>当天订单量</span></li>
                            <li><h2><?php echo $d_user_count; ?></h2><span>当天新用户数</span></li>
                        </ul>
                        <div style="border-bottom: 1px solid rgba(255,255,255,.1)"></div>
                        <ul class="clearfix">
                            <li><h2><?php echo round($z_money_count,2); ?></h2><span>总销售额</span></li>
                            <li><h2><?php echo $z_bill_count; ?></h2><span>总订单量</span></li>
                            <li><h2><?php echo $z_user_count; ?></h2><span>总用户数</span></li>
                        </ul>
                        <div style="border-bottom: 1px solid rgba(255,255,255,.1)"></div>
                        <ul class="clearfix">
                            <li><h2><?php echo round($qmoney,2); ?></h2><span>纯利润</span></li>
                            <li><h2><?php echo round($fswtsmoney,2); ?></h2><span>分销未提余额</span></li>
                            <li><h2><?php echo round($dtxmoney,2); ?></h2><span>待处理提现金额</span></li>
                        </ul>

                    </div>
                    <div class="boxfoot"></div>
                </div>
                <div class="boxall" style="height: 2.65rem">
                    <div class="alltitle">消费占比</div>
                    <div class="sy" id="echarts1"></div>
                    <div class="sy" id="echarts2"></div>
                    <div class="sy" id="echarts3"></div>
                    <div class="boxfoot"></div>
                </div>
                <div class="boxall" style="height: 2.95rem">
                    <div class="alltitle">行业区分比例</div>
                    <div id="echarts4" style="height: 2.2rem; width: 100%;"></div>
                    <div class="boxfoot"></div>
                </div>
            </li>
            <li>
                <div class="bar">
                    <div class="barbox">
                        <ul class="clearfix">
                            <li class="pulll_left counter"><?php echo round($z_money_count,2); ?></li>
                            <li class="pulll_left counter"><?php echo $z_bill_count; ?></li>
                        </ul>
                    </div>
                    <div class="barbox2">
                        <ul class="clearfix">
                            <li class="pulll_left">消费总金额</li>
                            <li class="pulll_left">消费总订单量</li>
                        </ul>
                    </div>
                </div>
                <div class="map">
                    <div class="map1"><img src="/template/substation/data/images/lbx.png"></div>
                    <div class="map2"><img src="/template/substation/data/images/jt.png"></div>
                    <div class="map3"><img src="/template/substation/data/images/map.png"></div>
                    <div class="map4" id="map_1"></div>
                </div>
            </li>
            <li>
                <div class="boxall" style="height:5.2rem">
                    <div class="alltitle">今日天气预报</div>
                    <center>
                        <div id="he-plugin-standard"></div>\
                    </center>
                    <script>
                    WIDGET = {
                        "CONFIG": {
                        "layout": "2",
                        "width": "300",
                        "height": "300",
                        "background": "1",
                        "dataColor": "FFFFFF",
                        "borderRadius": "5",
                        "key": "3180d3c43e524753ab8bcef69dba023a"
                        }
                        
                    }
                    </script>
                    <script src="https://widget.qweather.net/standard/static/js/he-standard-common.js?v=2.0"></script>
                    <div class="boxfoot"></div>
                </div>
                <div class="boxall" style="height: 3.4rem">
                    <div class="alltitle">实时消费记录</div>
                                  <div class="layui-card-body">
<div id="container" style="height: 220px"></div>
              </div>
                    <div class="boxfoot"></div>
                </div>
            </li>
        </ul>
 
    </div>
    <div class="back"></div>
        <style>
     #localtime { color: white; }
    </style>
    <script> function showLocale(objD) { var str = ''; var yy = objD.getFullYear(); var MM = objD.getMonth() + 1; var dd = objD.getDate(); var hh = objD.getHours(); var mm = objD.getMinutes(); var ss = objD.getSeconds(); var ww = objD.getDay(); if (ww < 0 || ww > 6) { ww = '星期'[Math.floor(ww / 7)]; } else { ww = ['日', '一', '二', '三', '四', '五', '六'][ww]; } str += yy + '-' + MM + '-' + dd + ' ' + hh + ':' + mm + ':' + ss + ' ' + ww; return str; } var today = new Date(); document.getElementById('localtime').innerHTML = showLocale(today); setInterval(function() { today = new Date(); document.getElementById('localtime').innerHTML = showLocale(today); }, 1000); </script>
    <script language="JavaScript" src="/template/substation/data/js/js.js"></script>
    <script type="text/javascript" src="/template/substation/data/js/echarts.min.js"></script>
    <script type="text/javascript" src="/template/substation/data/js/china.js"></script>
    <script type="text/javascript" src="/template/substation/data/js/area_echarts.js"></script>
    <span id="localtime"></span> <script> function showLocale(objD) { var str = ''; var yy = objD.getFullYear(); var MM = objD.getMonth() + 1; var dd = objD.getDate(); var hh = objD.getHours(); var mm = objD.getMinutes(); var ss = objD.getSeconds(); var ww = objD.getDay(); if (ww < 0 || ww > 6) { ww = '星期'[Math.floor(ww / 7)]; } else { ww = ['星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六'][ww]; } str += yy + '-' + MM + '-' + dd + ' ' + hh + ':' + mm + ':' + ss + ' ' + ww; return str; } var today = new Date(); document.getElementById('localtime').innerHTML = showLocale(today); setInterval(function() { today = new Date(); document.getElementById('localtime').innerHTML = showLocale(today); }, 1000); </script>
    <script type="text/javascript">
        $(document).ready(function () {
            myChart1.resize();
            myChart2.resize();
            myChart3.resize();
            myChart6.resize();
            myChart7.resize();
            myChart8.resize();
        })
        window.addEventListener("resize", function () {
            myChart1.resize();
            myChart2.resize();
            myChart3.resize();
            myChart6.resize();
            myChart7.resize();
            myChart8.resize();
        });
    </script>
    <script type="text/javascript">
        var v0 = 1000;
        var v1 = 353;
        var v2 = 178;
        var v3 = 68;



        var myChart6 = echarts.init(document.getElementById('echarts6'));
        option6 = {
            series: [{
                type: 'pie',
                radius: ['70%', '80%'],
                color: '#0088cc',
                label: {
                    normal: {
                        position: 'center'
                    }
                },
                data: [{
                    value: v1,
                    name: '新增会员',
                    label: {
                        normal: {
                            formatter: v1 + '',
                            textStyle: {
                                fontSize: 20,
                                color: '#fff',
                            }
                        }
                    }
                },
                       {
                           value: v0,
                           name: '老会员',
                           label: {
                               normal: {
                                   formatter: function (params) {
                                       return '占比' + Math.round(v1 / v0 * 100) + '%'
                                   },
                                   textStyle: {
                                       color: '#aaa',
                                       fontSize: 12
                                   }
                               }
                           },
                           itemStyle: {
                               normal: {
                                   color: 'rgba(255,255,255,.2)'
                               },
                               emphasis: {
                                   color: '#fff'
                               }
                           },
                       }]
            }]

        };

        var myChart7 = echarts.init(document.getElementById('echarts7'));
        option7 = {
            series: [{
                type: 'pie',
                radius: ['70%', '80%'],
                color: '#fccb00',
                label: {
                    normal: {
                        position: 'center'
                    }
                },
                data: [{
                    value: v2,
                    name: '新增领卡会员',
                    label: {
                        normal: {
                            formatter: v2 + '',
                            textStyle: {
                                fontSize: 20,
                                color: '#fff',
                            }
                        }
                    }
                },
                       {
                           value: v0,
                           name: '总领卡会员',
                           label: {
                               normal: {
                                   formatter: function (params) {
                                       return '占比' + Math.round(v2 / v0 * 100) + '%'
                                   },
                                   textStyle: {
                                       color: '#aaa',
                                       fontSize: 12
                                   }
                               }
                           },
                           itemStyle: {
                               normal: {
                                   color: 'rgba(255,255,255,.2)'
                               },
                               emphasis: {
                                   color: '#fff'
                               }
                           },
                       }]
            }]
        };


        var myChart8 = echarts.init(document.getElementById('echarts8'));
        option8 = {


            series: [{

                type: 'pie',
                radius: ['70%', '80%'],
                color: '#62b62f',
                label: {
                    normal: {
                        position: 'center'
                    }
                },
                data: [{
                    value: v3,
                    name: '女性客户',
                    label: {
                        normal: {
                            formatter: v3 + '',
                            textStyle: {
                                fontSize: 20,
                                color: '#fff',
                            }
                        }
                    }
                }, {
                    value: v0,
                    name: '男性客户',
                    label: {
                        normal: {
                            formatter: function (params) {
                                return '占比' + Math.round(v2 / v0 * 100) + '%'
                            },
                            textStyle: {
                                color: '#aaa',
                                fontSize: 12
                            }
                        }
                    },
                    itemStyle: {
                        normal: {
                            color: 'rgba(255,255,255,.2)'
                        },
                        emphasis: {
                            color: '#fff'
                        }
                    },
                }]
            }]
        };
        setTimeout(function () {
            myChart6.setOption(option6);
            myChart7.setOption(option7);
            myChart8.setOption(option8);
        }, 500);

    </script>
    <script type="text/javascript">
        var myChart1 = echarts.init(document.getElementById('echarts1'));
        var v1 = 298;
        var v2 = 523;
        var v3 = v1 + v2;
        option1 = {

      
            series: [{
                type: 'pie',
                radius: ['70%', '80%'],
                color: '#0088cc',
                label: {
                    normal: {
                        position: 'center'
                    }
                },
                data: [{
                    value: v1,
                    name: '平均单客价',
                    label: {
                        normal: {
                            formatter: v3 + '',
                            textStyle: {
                                fontSize: 20,
                                color: '#fff',
                            }
                        }
                    }
                },
                ]
            }]
        };


        var myChart3 = echarts.init(document.getElementById('echarts3'));
        var v1 = 298 
        var v2 = 523 
        var v3 = v1 + v2 
        option2 = {

       
            series: [{
                type: 'pie',
                radius: ['70%', '80%'],
                color: '#fccb00',
                label: {
                    normal: {
                        position: 'center'
                    }
                },
                data: [{
                    value: v1,
                    name: '男性客户',
                    label: {
                        normal: {
                            formatter: v1 + '',
                            textStyle: {
                                fontSize: 20,
                                color: '#fff',
                            }
                        }
                    }
                }, {
                    value: v2,
                    name: '女性客户',
                    label: {
                        normal: {
                            formatter: function (params) {
                                return '占比' + Math.round(v1 / v3 * 100) + '%'
                            },
                            textStyle: {
                                color: '#aaa',
                                fontSize: 12
                            }
                        }
                    },
                    itemStyle: {
                        normal: {
                            color: 'rgba(255,255,255,.2)'
                        },
                        emphasis: {
                            color: '#fff'
                        }
                    },
                }]
            }]
        };


        var myChart2 = echarts.init(document.getElementById('echarts2'));
        option3 = {


            series: [{

                type: 'pie',
                radius: ['70%', '80%'],
                color: '#62b62f',
                label: {
                    normal: {
                        position: 'center'
                    }
                },
                data: [{
                    value: v2,
                    name: '女性客户',
                    label: {
                        normal: {
                            formatter: v2 + '',
                            textStyle: {
                                fontSize: 20,
                                color: '#fff',
                            }
                        }
                    }
                }, {
                    value: v1,
                    name: '男性客户',
                    label: {
                        normal: {
                            formatter: function (params) {
                                return '占比' + Math.round(v2 / v3 * 100) + '%'
                            },
                            textStyle: {
                                color: '#aaa',
                                fontSize: 12
                            }
                        }
                    },
                    itemStyle: {
                        normal: {
                            color: 'rgba(255,255,255,.2)'
                        },
                        emphasis: {
                            color: '#fff'
                        }
                    },
                }]
            }]
        };
        setTimeout(function () {
            myChart1.setOption(option1);
            myChart2.setOption(option2);
            myChart3.setOption(option3);
        }, 500);

    </script>
    <script type="text/javascript" src="/template/substation/data/js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="/template/substation/data/js/jquery.countup.min.js"></script>
    <script type="text/javascript">
        $('.counter').countUp();
    </script>

</body>
</html>
